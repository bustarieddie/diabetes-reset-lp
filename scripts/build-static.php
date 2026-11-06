<?php

/**
 * Pre-renders the landing page to a static site in ./dist (for Vercel static hosting).
 *
 * Usage: npm run build && php scripts/build-static.php https://your-domain.example
 */

use Illuminate\Http\Request;

$root = dirname(__DIR__);
$url = rtrim($argv[1] ?? 'http://localhost', '/');

require $root.'/vendor/autoload.php';

putenv("APP_URL={$url}");
$_ENV['APP_URL'] = $_SERVER['APP_URL'] = $url;

$app = require $root.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$response = $kernel->handle(Request::create($url.'/', 'GET'));

if ($response->getStatusCode() !== 200) {
    fwrite(STDERR, "Render failed with status {$response->getStatusCode()}\n");
    exit(1);
}

$dist = $root.'/dist';
if (is_dir($dist)) {
    $it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dist, FilesystemIterator::SKIP_DOTS), RecursiveIteratorIterator::CHILD_FIRST);
    foreach ($it as $f) {
        $f->isDir() ? rmdir($f->getPathname()) : unlink($f->getPathname());
    }
} else {
    mkdir($dist, 0777, true);
}

file_put_contents($dist.'/index.html', $response->getContent());

$copy = function (string $src, string $dst) use (&$copy) {
    if (is_dir($src)) {
        @mkdir($dst, 0777, true);
        foreach (scandir($src) as $item) {
            if ($item !== '.' && $item !== '..') {
                $copy($src.'/'.$item, $dst.'/'.$item);
            }
        }
    } else {
        copy($src, $dst);
    }
};

foreach (['build', 'images', 'favicon.ico', 'favicon.svg', 'favicon-16.png', 'favicon-32.png', 'apple-touch-icon.png', 'icon-192.png', 'icon-512.png', 'robots.txt'] as $item) {
    $copy($root.'/public/'.$item, $dist.'/'.$item);
}

echo "Static site written to dist/ for {$url}\n";

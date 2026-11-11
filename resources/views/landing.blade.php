<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="theme-color" content="#0f766e">
    <title>Diabetes Reset Program™ — Klinik Bustari</title>
    <meta name="description" content="Program metabolik 3 bulan yang diselia doktor: penilaian, data glukosa, pendidikan, intervensi gaya hidup dan pemantauan berkala untuk pesakit Type 2 Diabetes.">

    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">
    <link rel="icon" href="{{ asset('favicon-32.png') }}" sizes="32x32" type="image/png">
    <link rel="icon" href="{{ asset('favicon-16.png') }}" sizes="16x16" type="image/png">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">

    {{-- Open Graph / Facebook, WhatsApp, LinkedIn --}}
    <meta property="og:type" content="website">
    <meta property="og:locale" content="ms_MY">
    <meta property="og:site_name" content="Klinik Bustari">
    <meta property="og:title" content="Diabetes Reset Program™ — Klinik Bustari">
    <meta property="og:description" content="Program metabolik 3 bulan yang diselia doktor: penilaian, data glukosa, pendidikan, intervensi gaya hidup dan pemantauan berkala untuk pesakit Type 2 Diabetes.">
    <meta property="og:image" content="{{ asset('images/og-image.png') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:url" content="{{ url('/') }}">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Diabetes Reset Program™ — Klinik Bustari">
    <meta name="twitter:description" content="Program metabolik 3 bulan yang diselia doktor: penilaian, data glukosa, pendidikan, intervensi gaya hidup dan pemantauan berkala untuk pesakit Type 2 Diabetes.">
    <meta name="twitter:image" content="{{ asset('images/og-image.png') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-slate-800 antialiased">

    @php
        $wa = 'https://wa.me/601165004234?text=' . urlencode('Saya berminat untuk tempah Diabetes Reset Assessment.');
        $waNumber = '011-6500 4234';
    @endphp

    {{-- ============ NAV ============ --}}
    <header class="sticky top-0 z-40 bg-white/95 backdrop-blur border-b border-slate-100">
        <div class="mx-auto max-w-6xl px-5 py-4 flex items-center justify-between">
            <div class="flex items-center gap-2">
                <div class="h-9 w-9 rounded-full bg-teal-700 flex items-center justify-center text-white font-bold text-sm">KB</div>
                <span class="font-semibold tracking-wide text-slate-900">KLINIK BUSTARI</span>
            </div>
            <a href="{{ $wa }}" target="_blank" rel="noopener"
               class="inline-flex items-center gap-2 rounded-full bg-amber-500 hover:bg-amber-600 transition-colors text-white text-sm font-semibold px-4 py-2 sm:px-5 sm:py-2.5 shadow-sm whitespace-nowrap">
                <span class="sm:hidden">WhatsApp</span>
                <span class="hidden sm:inline">WhatsApp {{ $waNumber }}</span>
            </a>
        </div>
    </header>

    {{-- ============ SECTION 1 — HERO ============ --}}
    <section class="relative overflow-hidden bg-gradient-to-b from-teal-50 to-white">
        <div class="mx-auto max-w-6xl px-5 pt-14 pb-16 md:pt-20 md:pb-24 grid md:grid-cols-2 gap-12 items-center">
            <div>
                <p class="text-xs font-bold tracking-widest text-amber-600 uppercase mb-4">
                    Diabetes Reset Program™ &bull; 3-Month Metabolic Health Program
                </p>
                <h1 class="text-3xl md:text-4xl font-extrabold leading-tight text-slate-900">
                    Gula Tinggi Bukan Keseluruhan Masalah.
                </h1>
                <p class="mt-4 text-lg md:text-xl font-semibold text-teal-800 leading-snug">
                    Fahami Apa Yang Berlaku Pada Metabolisme Anda — Kemudian Bina Strategi Untuk Mengubahnya.
                </p>
                <p class="mt-5 text-slate-600 leading-relaxed">
                    Jika anda sudah mengambil ubat, cuba mengawal makanan tetapi gula masih turun naik atau HbA1c
                    masih belum mencapai sasaran&hellip; jangan sekadar mengejar nombor.
                </p>
                <p class="mt-3 text-slate-700 leading-relaxed">
                    <strong>Diabetes Reset Program&trade;</strong> menggunakan penilaian metabolik, data glukosa,
                    pendidikan, intervensi gaya hidup dan pemantauan berkala untuk membantu anda memahami dan
                    memperbaiki kesihatan metabolik anda.
                </p>

                <div class="mt-8 flex flex-col sm:flex-row gap-3">
                    <a href="#assessment" class="inline-flex justify-center items-center rounded-full bg-teal-700 hover:bg-teal-800 transition-colors text-white font-semibold px-6 py-3 sm:px-7 sm:py-3.5 text-center leading-snug shadow-sm">
                        Tempah Diabetes Reset Assessment
                    </a>
                    <a href="{{ $wa }}" target="_blank" rel="noopener" class="inline-flex justify-center items-center gap-2 rounded-full border border-teal-700 text-teal-700 hover:bg-teal-50 transition-colors font-semibold px-6 py-3 sm:px-7 sm:py-3.5 text-center leading-snug">
                        <span class="sm:hidden">WhatsApp {{ $waNumber }}</span><span class="hidden sm:inline">WhatsApp Klinik Bustari &middot; {{ $waNumber }}</span>
                    </a>
                </div>

                <ul class="mt-8 flex flex-wrap gap-x-6 gap-y-2 text-sm text-slate-600">
                    <li class="flex items-center gap-1.5"><span class="text-teal-600">&#10003;</span> Doctor-supervised</li>
                    <li class="flex items-center gap-1.5"><span class="text-teal-600">&#10003;</span> Individualised</li>
                    <li class="flex items-center gap-1.5"><span class="text-teal-600">&#10003;</span> Data-driven</li>
                    <li class="flex items-center gap-1.5"><span class="text-teal-600">&#10003;</span> 3-month structured program</li>
                </ul>
            </div>

            {{-- Hero visual: stylised CGM graph card (placeholder for doctor+patient photo) --}}
            <div class="relative">
                <div class="rounded-2xl border border-slate-200 bg-white shadow-xl p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <p class="text-xs text-slate-400 uppercase tracking-wide">Continuous Glucose Monitor</p>
                            <p class="text-sm font-semibold text-slate-700">Corak Glukosa 24 Jam</p>
                        </div>
                        <span class="text-xs font-medium bg-teal-50 text-teal-700 rounded-full px-3 py-1">Live</span>
                    </div>
                    <svg viewBox="0 0 320 120" class="w-full h-32">
                        <polyline points="0,80 20,75 40,40 60,30 80,55 100,70 120,60 140,35 160,25 180,45 200,65 220,72 240,50 260,30 280,42 300,60 320,68"
                            fill="none" stroke="#0f766e" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        <line x1="0" y1="60" x2="320" y2="60" stroke="#cbd5e1" stroke-width="1" stroke-dasharray="4 4"/>
                    </svg>
                    <div class="mt-4 grid grid-cols-3 gap-3 text-center">
                        <div class="rounded-lg bg-slate-50 py-2">
                            <p class="text-[11px] text-slate-400">Purata</p>
                            <p class="text-sm font-bold text-slate-800">7.4 mmol/L</p>
                        </div>
                        <div class="rounded-lg bg-slate-50 py-2">
                            <p class="text-[11px] text-slate-400">Time in Range</p>
                            <p class="text-sm font-bold text-teal-700">68%</p>
                        </div>
                        <div class="rounded-lg bg-slate-50 py-2">
                            <p class="text-[11px] text-slate-400">HbA1c</p>
                            <p class="text-sm font-bold text-slate-800">7.1%</p>
                        </div>
                    </div>
                </div>
                <div class="absolute -bottom-4 -left-4 hidden sm:flex items-center gap-2 rounded-xl bg-white border border-slate-200 shadow-lg px-4 py-3">
                    <span class="h-2.5 w-2.5 rounded-full bg-amber-500"></span>
                    <span class="text-xs font-medium text-slate-600">Disemak bersama doktor</span>
                </div>
            </div>
        </div>
    </section>

    {{-- ============ SECTION 2 — PATIENT IDENTIFICATION ============ --}}
    <section class="mx-auto max-w-3xl px-5 py-12 sm:py-16 md:py-20 text-center">
        <h2 class="text-2xl md:text-3xl font-extrabold text-slate-900">
            &ldquo;Doktor&hellip; Saya Dah Jaga Makan. Kenapa Gula Masih Tinggi?&rdquo;
        </h2>
        <div class="mt-8 space-y-1.5 text-slate-600 leading-relaxed">
            <p>Mungkin situasi ini familiar.</p>
            <p>Anda sudah cuba kurangkan gula.</p>
            <p>Sudah kurangkan nasi.</p>
            <p>Sudah makan ubat.</p>
            <p>Kadang-kadang bacaan turun.</p>
            <p>Kemudian naik semula.</p>
            <p class="pt-3">Bila HbA1c diperiksa&hellip;</p>
            <p class="font-semibold text-slate-800">masih tinggi.</p>
        </div>
        <p class="mt-8 text-lg font-semibold text-teal-800">&ldquo;Apa lagi yang saya perlu buat?&rdquo;</p>
        <p class="mt-6 text-slate-600 leading-relaxed">
            Masalahnya mungkin bukan kerana anda &ldquo;tidak cukup disiplin&rdquo;.
            Diabetes jenis 2 adalah penyakit metabolik yang kompleks.
            Sebab itu hanya melihat satu makanan atau satu bacaan gula tidak memberikan keseluruhan gambaran.
        </p>
    </section>

    {{-- ============ SECTION 3 — THE REFRAME ============ --}}
    <section class="bg-slate-900 text-white py-12 sm:py-16 md:py-24">
        <div class="mx-auto max-w-4xl px-5 text-center">
            <h2 class="text-2xl md:text-4xl font-extrabold leading-tight">
                DIABETES BUKAN SEKADAR<br class="hidden sm:block"> MASALAH GULA.
            </h2>
            <p class="mt-6 text-slate-300 max-w-xl mx-auto">
                Glukosa tinggi ialah sesuatu yang kita ukur.
                Tetapi kita juga perlu memahami apa yang mempengaruhinya.
            </p>

            <div class="mt-12 max-w-xs mx-auto flex flex-col items-center gap-0">
                @foreach ([
                    'Insulin Resistance',
                    'Liver / Hepatic Glucose',
                    'Muscle Glucose Uptake',
                    'Adiposity / Visceral Fat',
                    'Nutrition',
                    'Physical Activity',
                    'Sleep & Lifestyle',
                    'Medication',
                ] as $i => $step)
                    <div class="w-full rounded-lg bg-white/10 border border-white/10 py-2.5 px-4 text-sm font-medium">
                        {{ $step }}
                    </div>
                    <span class="text-teal-400 text-lg my-1">&darr;</span>
                @endforeach
                <div class="w-full rounded-lg bg-amber-500 text-slate-900 py-2.5 px-4 text-sm font-bold">
                    Glucose Pattern
                </div>
            </div>

            <p class="mt-12 text-slate-300">Setiap pesakit berbeza.</p>
            <p class="mt-2 text-slate-300">Sebab itu Diabetes Reset tidak bermula dengan diet yang sama untuk semua orang.</p>
            <p class="mt-4 text-lg font-semibold text-white">Ia bermula dengan: &ldquo;Apa yang sedang berlaku pada ANDA?&rdquo;</p>
        </div>
    </section>

    {{-- ============ SECTION 4 — UNIQUE MECHANISM ============ --}}
    <section class="py-12 sm:py-16 md:py-24 bg-teal-50">
        <div class="mx-auto max-w-4xl px-5 text-center">
            <p class="text-xs font-bold tracking-widest text-amber-600 uppercase">Introducing</p>
            <h2 class="mt-2 text-2xl md:text-4xl font-extrabold text-slate-900">
                The Metabolic Reset Cycle&trade;
            </h2>
            <p class="mt-3 text-slate-600">Sistem 5 langkah Diabetes Reset Program&trade;</p>

            <div class="mt-10 flex flex-wrap items-center justify-center gap-2 md:gap-3 text-sm md:text-base font-bold text-teal-800">
                @foreach (['Measure', 'Understand', 'Intervene', 'Monitor', 'Adjust'] as $i => $s)
                    <span class="rounded-full bg-white border border-teal-200 px-3 py-1.5 sm:px-4 sm:py-2 shadow-sm">{{ $s }}</span>
                    @if(!$loop->last)<span class="text-teal-400">&rarr;</span>@endif
                @endforeach
            </div>

            <div class="mt-12 grid sm:grid-cols-2 gap-4 text-left max-w-2xl mx-auto text-slate-600">
                <p class="flex gap-2"><span class="text-red-400">&#10007;</span> Ini bukan diet 30 hari.</p>
                <p class="flex gap-2"><span class="text-red-400">&#10007;</span> Bukan sekadar CGM.</p>
                <p class="flex gap-2"><span class="text-red-400">&#10007;</span> Bukan sekadar supplement.</p>
                <p class="flex gap-2"><span class="text-red-400">&#10007;</span> Bukan sekadar konsultasi sekali.</p>
            </div>

            <p class="mt-8 text-lg font-semibold text-slate-900">
                Ia adalah <span class="text-teal-700">closed-loop metabolic management system</span>.
            </p>

            <div class="mt-10 max-w-md mx-auto text-slate-600 space-y-1 text-left sm:text-center">
                <p>Kita ukur keadaan anda.</p>
                <p class="text-teal-500">&darr;</p>
                <p>Kita fahami coraknya.</p>
                <p class="text-teal-500">&darr;</p>
                <p>Kita lakukan intervensi.</p>
                <p class="text-teal-500">&darr;</p>
                <p>Kita lihat respons sebenar.</p>
                <p class="text-teal-500">&darr;</p>
                <p>Kemudian kita sesuaikan strategi.</p>
                <p class="text-teal-500">&darr;</p>
                <p>Dan ulang kitaran tersebut berdasarkan perkembangan anda.</p>
            </div>
        </div>
    </section>

    @php
        $steps = [
            [
                'num' => '01',
                'title' => 'Measure',
                'tag' => 'Jangan meneka. Mulakan dengan data.',
                'intro' => 'Diabetes Reset bermula dengan penilaian keadaan metabolik semasa.',
                'items' => [
                    ['Consultation', 'Sejarah diabetes, ubat semasa, pemakanan, aktiviti, tidur, gaya hidup.'],
                    ['Metabolic Questionnaire', 'Penilaian faktor-faktor yang mungkin memerlukan perhatian lanjut.'],
                    ['Metabolic Health Screening', 'Ujian makmal dipilih berdasarkan keadaan klinikal dan keperluan individu.'],
                    ['CGM', 'Continuous Glucose Monitoring boleh digunakan pada pesakit yang sesuai untuk melihat corak glukosa sepanjang hari dan malam.'],
                ],
            ],
            [
                'num' => '02',
                'title' => 'Understand',
                'tag' => 'Data sahaja tidak mencukupi.',
                'intro' => 'Kita perlu bertanya:',
                'items' => [
                    ['Kenapa glukosa meningkat pada waktu tertentu?', null],
                    ['Makanan mana memberi respons paling besar?', null],
                    ['Bagaimana aktiviti mempengaruhi glukosa?', null],
                    ['Adakah terdapat pola yang berulang?', null],
                    ['Bagaimana keputusan makmal berkaitan dengan gambaran keseluruhan?', null],
                ],
            ],
            [
                'num' => '03',
                'title' => 'Intervene',
                'tag' => 'Selepas memahami keadaan anda, kita membina strategi.',
                'intro' => 'Intervensi boleh merangkumi:',
                'items' => [
                    ['Nutrition', 'Strategi pemakanan yang disesuaikan dengan matlamat metabolik dan kehidupan sebenar anda.'],
                    ['Movement', 'Meningkatkan aktiviti fizikal dan mengurangkan sedentary time.'],
                    ['Resistance Training', 'Membina dan menggunakan otot sebagai komponen penting kesihatan metabolik.'],
                    ['Weight Management', 'Apabila terdapat overweight atau obesity, pengurusan berat dan adipositi menjadi sebahagian penting daripada strategi.'],
                    ['Sleep & Recovery', 'Menilai faktor gaya hidup yang boleh mengganggu usaha memperbaiki metabolisme.'],
                    ['Medication', 'Rawatan diabetes dinilai bersama keadaan klinikal dan respons pesakit. Ubat tidak dihentikan secara automatik.'],
                ],
            ],
            [
                'num' => '04',
                'title' => 'Monitor',
                'tag' => 'Apa yang tidak dipantau sukar untuk diperbaiki secara sistematik.',
                'intro' => 'Sepanjang program, perkembangan boleh dipantau melalui:',
                'checklist' => ['Glucose readings', 'CGM patterns apabila digunakan', 'Weight', 'Lifestyle progress', 'Nutrition adherence', 'Physical activity', 'Symptoms', 'Medication', 'Relevant laboratory markers'],
            ],
            [
                'num' => '05',
                'title' => 'Adjust',
                'tag' => 'Ini bahagian penting dalam Metabolic Reset Cycle™.',
                'intro' => null,
                'items' => [
                    ['Jika sesuatu strategi berkesan:', 'kita teruskan atau optimakan.'],
                    ['Jika tidak:', 'kita cuba memahami kenapa.'],
                ],
            ],
        ];
    @endphp

    {{-- ============ SECTIONS 5–11 — THE 5 STEPS ============ --}}
    @foreach ($steps as $i => $step)
        <section class="py-12 sm:py-16 md:py-20 {{ $i % 2 === 0 ? 'bg-white' : 'bg-slate-50' }} border-t border-slate-100">
            <div class="mx-auto max-w-3xl px-5">
                <div class="flex items-baseline gap-4">
                    <span class="text-4xl md:text-5xl font-black text-teal-100">{{ $step['num'] }}</span>
                    <h2 class="text-2xl md:text-3xl font-extrabold text-slate-900 uppercase tracking-wide">{{ $step['title'] }}</h2>
                </div>
                <p class="mt-4 text-lg font-semibold text-teal-800">{{ $step['tag'] }}</p>
                @if($step['intro'])
                    <p class="mt-2 text-slate-600">{{ $step['intro'] }}</p>
                @endif

                @if(isset($step['items']))
                    <div class="mt-8 grid sm:grid-cols-2 gap-4">
                        @foreach ($step['items'] as [$t, $d])
                            <div class="rounded-xl border border-slate-200 bg-white p-5">
                                <p class="font-semibold text-slate-800">{{ $t }}</p>
                                @if($d)<p class="mt-1.5 text-sm text-slate-500 leading-relaxed">{{ $d }}</p>@endif
                            </div>
                        @endforeach
                    </div>
                @endif

                @if(isset($step['checklist']))
                    <ul class="mt-8 grid sm:grid-cols-2 gap-x-6 gap-y-3">
                        @foreach ($step['checklist'] as $c)
                            <li class="flex items-center gap-2 text-slate-700"><span class="text-teal-600 font-bold">&#10003;</span> {{ $c }}</li>
                        @endforeach
                    </ul>
                @endif

                @if($step['title'] === 'Measure')
                    <a href="#assessment" class="mt-10 inline-flex items-center rounded-full bg-teal-700 hover:bg-teal-800 transition-colors text-white font-semibold px-6 py-3 sm:px-7 sm:py-3.5 text-center leading-snug">
                        Mulakan Dengan Assessment
                    </a>
                @endif

                @if($step['title'] === 'Understand')
                    <p class="mt-8 text-slate-600">Matlamatnya bukan mencari satu makanan untuk dipersalahkan.</p>
                    <p class="mt-1 text-xl font-extrabold text-teal-800">Matlamatnya ialah: Find The Pattern.</p>
                @endif

                @if($step['title'] === 'Intervene')
                    <p class="mt-8 text-sm text-slate-500 italic">
                        Sebarang perubahan ubat dibuat secara klinikal dan dengan pemantauan yang sesuai.
                    </p>
                @endif

                @if($step['title'] === 'Monitor')
                    <p class="mt-8 text-slate-600">Tujuannya bukan untuk mendapatkan &ldquo;perfect score&rdquo;.</p>
                    <p class="mt-1 text-xl font-extrabold text-teal-800">Tujuannya ialah: Are We Moving In The Right Direction?</p>
                @endif

                @if($step['title'] === 'Adjust')
                    <p class="mt-6 text-slate-600">Kemudian pelan boleh disesuaikan berdasarkan keadaan klinikal.</p>
                    <div class="mt-8 flex flex-wrap items-center gap-2 text-sm font-bold text-teal-800">
                        @foreach (['Measure', 'Understand', 'Intervene', 'Monitor', 'Adjust'] as $s)
                            <span class="rounded-full bg-teal-50 border border-teal-200 px-3 py-1.5 sm:px-4 sm:py-2">{{ $s }}</span>
                            @if(!$loop->last)<span class="text-teal-400">&rarr;</span>@endif
                        @endforeach
                        <span class="text-teal-400">&#8635;</span>
                    </div>
                    <p class="mt-6 text-lg font-semibold text-slate-900">Itulah Diabetes Reset.</p>
                @endif
            </div>
        </section>

        {{-- ============ SECTION 6 — CGM DISCOVERY (inserted after Measure) ============ --}}
        @if($step['title'] === 'Measure')
            <section class="py-12 sm:py-16 md:py-20 bg-teal-900 text-white">
                <div class="mx-auto max-w-3xl px-5">
                    <h2 class="text-2xl md:text-3xl font-extrabold text-center leading-snug">
                        Bayangkan Anda Boleh Melihat Apa Yang Berlaku Selepas Setiap Hidangan.
                    </h2>

                    <div class="mt-10 space-y-4 text-teal-50">
                        <p><span class="font-semibold">Sarapan.</span> &rarr; Apa berlaku kepada glukosa?</p>
                        <p><span class="font-semibold">Nasi waktu tengah hari.</span> &rarr; Apa berlaku?</p>
                        <p><span class="font-semibold">Berjalan 15&ndash;20 minit selepas makan.</span> &rarr; Adakah coraknya berubah?</p>
                        <p><span class="font-semibold">Tidur lewat.</span> &rarr; Bagaimana glukosa malam dan pagi?</p>
                    </div>

                    <p class="mt-8 text-teal-100 leading-relaxed">
                        CGM boleh memberikan gambaran yang jauh lebih terperinci berbanding satu bacaan
                        finger-prick pada satu masa.
                    </p>

                    <div class="mt-10 flex flex-wrap items-center justify-center gap-2 text-sm font-bold">
                        @foreach (['Food', 'Glucose Response', 'Learn', 'Modify', 'Measure Again'] as $s)
                            <span class="rounded-full bg-white/10 border border-white/20 px-3 py-1.5 sm:px-4 sm:py-2">{{ $s }}</span>
                            @if(!$loop->last)<span class="text-teal-300">&rarr;</span>@endif
                        @endforeach
                    </div>

                    <p class="mt-10 text-center text-teal-200 text-sm max-w-lg mx-auto">
                        CGM bukan &ldquo;magic device&rdquo;. Ia adalah alat untuk membantu membuat keputusan klinikal
                        dan pembelajaran pesakit apabila sesuai.
                    </p>
                </div>
            </section>
        @endif

        {{-- ============ SECTION 9 — THE BIG DIFFERENCE (inserted after Intervene) ============ --}}
        @if($step['title'] === 'Intervene')
            <section class="py-12 sm:py-16 md:py-20 bg-white border-t border-slate-100">
                <div class="mx-auto max-w-2xl px-5 text-center">
                    <h2 class="text-2xl md:text-3xl font-extrabold text-slate-900">
                        Kebanyakan Orang Tahu Apa Yang Mereka &ldquo;Patut&rdquo; Buat.
                    </h2>
                    <div class="mt-6 space-y-1 text-slate-600">
                        <p>Kurangkan makanan tertentu.</p>
                        <p>Bergerak lebih banyak.</p>
                        <p>Turunkan berat.</p>
                        <p>Tidur cukup.</p>
                    </div>
                    <p class="mt-8 text-lg font-semibold text-teal-800">Masalah sebenar ialah:</p>
                    <p class="text-xl font-extrabold text-slate-900">&ldquo;Adakah strategi itu berkesan untuk SAYA?&rdquo;</p>
                    <p class="mt-8 text-slate-600">
                        Sebab itu Diabetes Reset tidak berhenti selepas memberi nasihat.
                        Kita masuk ke langkah seterusnya.
                    </p>
                </div>
            </section>
        @endif
    @endforeach

    {{-- ============ SECTION 12 — 3-MONTH ROADMAP ============ --}}
    <section class="py-12 sm:py-16 md:py-24 bg-slate-900 text-white">
        <div class="mx-auto max-w-5xl px-5">
            <h2 class="text-2xl md:text-3xl font-extrabold text-center">Perjalanan Diabetes Reset Anda</h2>

            <div class="mt-12 grid md:grid-cols-3 gap-6">
                @foreach ([
                    ['Month 1', 'Discover', ['Consultation', 'Metabolic assessment', 'Laboratory assessment', 'Lifestyle assessment', 'CGM apabila sesuai', 'Identify patterns'], 'Know Your Metabolism'],
                    ['Month 2', 'Reset', ['Nutrition strategy', 'Movement', 'Resistance training', 'Weight strategy apabila diperlukan', 'Sleep & lifestyle', 'Monitoring'], 'Change The Metabolic Environment'],
                    ['Month 3', 'Optimise', ['Review progress', 'Review glucose pattern', 'Review relevant markers', 'Medication review when indicated', 'Identify remaining barriers', 'Long-term strategy'], 'Build A Sustainable System'],
                ] as [$month, $title, $items, $objective])
                    <div class="rounded-2xl bg-white/5 border border-white/10 p-6 flex flex-col">
                        <p class="text-xs font-bold tracking-widest text-amber-400 uppercase">{{ $month }}</p>
                        <h3 class="mt-1 text-xl font-extrabold">{{ $title }}</h3>
                        <ul class="mt-5 space-y-2 text-sm text-slate-300 flex-1">
                            @foreach ($items as $it)
                                <li class="flex gap-2"><span class="text-teal-400">&#10003;</span> {{ $it }}</li>
                            @endforeach
                        </ul>
                        <div class="mt-6 pt-4 border-t border-white/10">
                            <p class="text-[11px] uppercase tracking-wide text-slate-400">Objective</p>
                            <p class="text-sm font-bold text-white">{{ $objective }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ============ SECTION 13 — FUTURE PACING ============ --}}
    <section class="py-12 sm:py-16 md:py-20 bg-white">
        <div class="mx-auto max-w-2xl px-5 text-center">
            <h2 class="text-2xl md:text-3xl font-extrabold text-slate-900">
                Apa Yang Kami Mahu Anda Faham Selepas 3 Bulan?
            </h2>
            <p class="mt-6 text-slate-500">Bukan sekadar:</p>
            <p class="text-lg text-slate-400 italic">&ldquo;Gula saya berapa?&rdquo;</p>
            <p class="mt-4 font-semibold text-slate-700">Tetapi:</p>

            <div class="mt-8 space-y-3 text-left">
                @foreach ([
                    'Saya tahu makanan mana yang memberi kesan besar kepada saya.',
                    'Saya faham corak gula saya.',
                    'Saya tahu apa yang perlu saya buat selepas makan.',
                    'Saya faham kenapa aktiviti dan otot penting.',
                    'Saya tahu nombor metabolik yang perlu saya pantau.',
                    'Saya mempunyai strategi yang boleh saya teruskan.',
                ] as $q)
                    <p class="rounded-xl bg-teal-50 border border-teal-100 px-5 py-3 text-slate-700">&ldquo;{{ $q }}&rdquo;</p>
                @endforeach
            </div>

            <p class="mt-10 text-slate-600">Itulah perbezaan antara sekadar mendapat nasihat&hellip;</p>
            <p class="text-lg font-semibold text-teal-800">dan memahami metabolisme sendiri.</p>
        </div>
    </section>

    {{-- ============ SECTION 14 — REMISSION ============ --}}
    <section class="py-12 sm:py-16 md:py-20 bg-slate-50 border-t border-slate-100">
        <div class="mx-auto max-w-2xl px-5">
            <h2 class="text-2xl md:text-3xl font-extrabold text-slate-900 text-center">
                Bolehkah Type 2 Diabetes Masuk Remisi?
            </h2>
            <p class="mt-6 text-slate-700 text-center font-semibold">Ya &mdash; pada sesetengah individu.</p>
            <p class="mt-4 text-slate-600 leading-relaxed">
                Tetapi kami tidak menjanjikan bahawa setiap pesakit akan mencapai remisi.
                Remisi mempunyai definisi klinikal tertentu dan ia bukan bermaksud diabetes telah
                &ldquo;sembuh selama-lamanya&rdquo;. Walaupun remisi dicapai, pemantauan jangka panjang masih diperlukan.
            </p>
            <p class="mt-6 text-slate-600">Sebab itu matlamat Diabetes Reset ialah:</p>
            <div class="mt-4 grid sm:grid-cols-3 gap-3 text-center">
                <div class="rounded-xl bg-white border border-slate-200 py-4 px-3 font-semibold text-teal-800 text-sm">Better Glycemic Control</div>
                <div class="rounded-xl bg-white border border-slate-200 py-4 px-3 font-semibold text-teal-800 text-sm">Better Metabolic Health</div>
                <div class="rounded-xl bg-white border border-slate-200 py-4 px-3 font-semibold text-teal-800 text-sm">Lower Long-Term Risk</div>
            </div>
            <p class="mt-4 text-center text-slate-600 text-sm">dan bagi individu yang sesuai,</p>
            <p class="mt-1 text-center font-bold text-amber-600">Work Towards Remission.</p>
        </div>
    </section>

    {{-- ============ SECTION 15 — MEDICATION OBJECTION ============ --}}
    <section class="py-12 sm:py-16 md:py-20 bg-white">
        <div class="mx-auto max-w-2xl px-5">
            <h2 class="text-2xl md:text-3xl font-extrabold text-slate-900 text-center">
                &ldquo;Kalau Saya Join, Boleh Berhenti Ubat?&rdquo;
            </h2>
            <div class="mt-6 rounded-xl bg-amber-50 border border-amber-200 px-5 py-4 text-amber-800 font-semibold text-center">
                Jangan hentikan ubat diabetes sendiri.
            </div>
            <p class="mt-6 text-slate-600 leading-relaxed">
                Apabila glukosa, berat dan keadaan metabolik berubah, keperluan ubat juga mungkin berubah
                bagi sesetengah individu. Tetapi keputusan tersebut perlu dibuat berdasarkan:
            </p>
            <ul class="mt-4 space-y-2 text-slate-700">
                @foreach (['Glucose readings', 'CGM apabila berkaitan', 'HbA1c', 'Risiko hypoglycaemia', 'Ubat yang digunakan', 'Keadaan klinikal keseluruhan'] as $x)
                    <li class="flex gap-2"><span class="text-teal-600 font-bold">&#10003;</span> {{ $x }}</li>
                @endforeach
            </ul>
            <p class="mt-6 text-slate-600">
                Diabetes Reset bukan anti-medication.
                Ia adalah program untuk memperbaiki pengurusan diabetes secara menyeluruh.
            </p>
        </div>
    </section>

    {{-- ============ SECTION 16 — WHO IT'S FOR ============ --}}
    <section id="assessment" class="py-12 sm:py-16 md:py-24 bg-teal-50">
        <div class="mx-auto max-w-3xl px-5 text-center">
            <h2 class="text-2xl md:text-3xl font-extrabold text-slate-900">Adakah Diabetes Reset Sesuai Untuk Saya?</h2>
            <p class="mt-3 text-slate-600">Program ini mungkin sesuai untuk anda jika:</p>

            <div class="mt-10 grid sm:grid-cols-2 gap-3 text-left">
                @foreach ([
                    'Anda mempunyai Type 2 Diabetes',
                    'HbA1c masih belum mencapai sasaran',
                    'Bacaan gula sering turun naik',
                    'Anda mempunyai overweight/obesity dan diabetes',
                    'Anda tidak memahami makanan mana yang paling mempengaruhi gula',
                    'Anda mahu belajar menggunakan data CGM',
                    'Anda mahu program yang lebih tersusun',
                    'Anda mahu mengambil peranan lebih aktif dalam kesihatan metabolik anda',
                ] as $x)
                    <div class="flex gap-3 rounded-xl bg-white border border-teal-100 px-4 py-3">
                        <span class="text-teal-600 font-bold">&#10003;</span>
                        <span class="text-slate-700 text-sm">{{ $x }}</span>
                    </div>
                @endforeach
            </div>

            <a href="{{ $wa }}" target="_blank" rel="noopener" class="mt-10 inline-flex items-center rounded-full bg-teal-700 hover:bg-teal-800 transition-colors text-white font-semibold px-6 py-3 sm:px-8 sm:py-3.5 text-center leading-snug shadow-sm">
                Saya Nak Buat Assessment
            </a>
        </div>
    </section>

    {{-- ============ SECTION 17 — NOT FOR EVERYONE ============ --}}
    <section class="py-12 sm:py-16 md:py-20 bg-slate-900 text-white">
        <div class="mx-auto max-w-2xl px-5 text-center">
            <h2 class="text-2xl md:text-3xl font-extrabold">Diabetes Reset Bukan &ldquo;Magic Cure&rdquo;.</h2>
            <p class="mt-4 text-slate-300">Kami tidak akan menjanjikan:</p>
            <div class="mt-6 space-y-2 text-left max-w-md mx-auto">
                @foreach ([
                    'diabetes hilang dalam 30 hari',
                    'semua pesakit boleh berhenti ubat',
                    'satu supplement boleh menyelesaikan diabetes',
                    'satu diet sesuai untuk semua orang',
                    'satu bacaan CGM menentukan keseluruhan kesihatan anda',
                ] as $x)
                    <p class="flex gap-2 text-slate-300 text-sm"><span class="text-red-400 font-bold">&#10007;</span> {{ $x }}</p>
                @endforeach
            </div>

            <p class="mt-10 text-slate-300">Apa yang kami tawarkan ialah:</p>
            <div class="mt-4 flex flex-wrap justify-center gap-2 text-sm font-semibold">
                @foreach (['Medical Assessment', 'Metabolic Data', 'Education', 'Lifestyle Intervention', 'Monitoring', 'Clinical Review'] as $x)
                    <span class="rounded-full bg-teal-800/60 border border-teal-600/50 px-3 py-1.5 sm:px-4 sm:py-2">{{ $x }}</span>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ============ SECTION 19 — WHAT'S INCLUDED ============ --}}
    <section class="py-12 sm:py-16 md:py-20 bg-teal-50">
        <div class="mx-auto max-w-3xl px-5 text-center">
            <h2 class="text-2xl md:text-3xl font-extrabold text-slate-900">Your Diabetes Reset Journey</h2>
            <p class="mt-2 text-sm font-bold tracking-widest text-amber-600 uppercase">3-Month Program</p>
            <p class="mt-4 text-slate-600">Your program can include:</p>

            <div class="mt-8 grid sm:grid-cols-2 gap-3 text-left">
                @foreach ([
                    'Diabetes Reset Consultation', 'Lifestyle Assessment', 'Medication Review', 'Metabolic Questionnaire',
                    'Metabolic Health Screening', 'CGM monitoring when appropriate', 'CGM interpretation', 'Nutrition strategy',
                    'Exercise & resistance-training guidance', 'Biweekly monitoring', 'Laboratory analysis', 'Risk analysis',
                    'Progress analysis', 'Patient education', 'Clinical reviews',
                ] as $x)
                    <div class="flex gap-3 rounded-xl bg-white border border-teal-100 px-4 py-3">
                        <span class="text-teal-600 font-bold">&#10003;</span>
                        <span class="text-slate-700 text-sm">{{ $x }}</span>
                    </div>
                @endforeach
            </div>
            <p class="mt-6 text-xs text-slate-400">
                Exact investigations and interventions depend on individual clinical assessment and selected program package.
            </p>
        </div>
    </section>

    {{-- ============ SECTION 21 — FAQ ============ --}}
    <section class="py-12 sm:py-16 md:py-20 bg-slate-50">
        <div class="mx-auto max-w-2xl px-5">
            <h2 class="text-2xl md:text-3xl font-extrabold text-slate-900 text-center">Frequently Asked Questions</h2>

            <div class="mt-10 space-y-3">
                @foreach ([
                    ['Berapa lama program?', 'Diabetes Reset ialah program 3 bulan.'],
                    ['Adakah saya perlu CGM?', 'Tidak semestinya. Penggunaan CGM bergantung kepada keadaan dan tujuan klinikal individu.'],
                    ['Perlu stop nasi?', 'Tidak semestinya. Pelan pemakanan perlu disesuaikan kepada individu.'],
                    ['Perlu stop ubat?', 'Tidak. Jangan berhenti atau mengurangkan ubat tanpa arahan doktor.'],
                    ['Adakah program menjamin diabetes remission?', 'Tidak. Sesetengah individu dengan Type 2 Diabetes boleh mencapai remisi, tetapi ia tidak boleh dijamin.'],
                    ['Kalau HbA1c saya sangat tinggi?', 'Anda perlu menjalani penilaian klinikal terlebih dahulu untuk menentukan rawatan yang sesuai dan sama ada Diabetes Reset sesuai untuk anda.'],
                ] as $faq)
                    <details class="group rounded-xl bg-white border border-slate-200 open:border-teal-300 open:shadow-sm">
                        <summary class="flex items-center justify-between cursor-pointer list-none px-5 py-4 font-semibold text-slate-800">
                            {{ $faq[0] }}
                            <span class="text-teal-600 transition-transform group-open:rotate-45 text-xl leading-none">+</span>
                        </summary>
                        <p class="px-5 pb-4 text-sm text-slate-600 leading-relaxed">{{ $faq[1] }}</p>
                    </details>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ============ SECTION 22 — FINAL CLOSE ============ --}}
    <section class="py-12 sm:py-16 md:py-24 bg-teal-900 text-white text-center">
        <div class="mx-auto max-w-2xl px-5">
            <h2 class="text-2xl md:text-3xl font-extrabold">Anda Ada Dua Pilihan.</h2>
            <p class="mt-6 text-teal-100">Terus melihat satu nombor setiap beberapa bulan&hellip;</p>
            <p class="text-teal-100">dan tertanya-tanya kenapa ia berubah.</p>
            <p class="mt-4 font-semibold text-white">Atau&hellip;</p>
            <p class="text-teal-50">mula memahami metabolisme anda dengan lebih sistematik.</p>

            <div class="mt-8 flex flex-wrap justify-center gap-2 text-sm font-bold uppercase tracking-wide">
                @foreach (['Measure', 'Understand', 'Intervene', 'Monitor', 'Adjust'] as $s)
                    <span class="rounded-full bg-white/10 border border-white/20 px-3 py-1.5 sm:px-4 sm:py-2">{{ $s }}</span>
                @endforeach
            </div>

            <p class="mt-10 text-xs font-bold tracking-widest text-amber-300 uppercase">Diabetes Reset Program&trade;</p>
            <p class="mt-2 text-xl font-extrabold">Reset Your Metabolic Health.</p>
            <p class="text-xl font-extrabold">Reclaim Your Life.</p>
            <p class="mt-4 text-teal-200 font-semibold">Klinik Bustari</p>

            <div class="mt-10 flex flex-col sm:flex-row gap-3 justify-center">
                <a href="{{ $wa }}" target="_blank" rel="noopener" class="inline-flex justify-center items-center rounded-full bg-amber-500 hover:bg-amber-600 transition-colors text-white font-semibold px-6 py-3 sm:px-8 sm:py-3.5 text-center leading-snug shadow-sm">
                    Tempah Diabetes Reset Assessment
                </a>
                <a href="{{ $wa }}" target="_blank" rel="noopener" class="inline-flex justify-center items-center rounded-full border border-white/40 text-white hover:bg-white/10 transition-colors font-semibold px-6 py-3 sm:px-8 sm:py-3.5 text-center leading-snug">
                    WhatsApp &middot; {{ $waNumber }}
                </a>
            </div>
        </div>
    </section>

    <footer class="bg-slate-950 text-slate-400 text-center py-8 text-xs">
        &copy; {{ date('Y') }} Klinik Bustari. Diabetes Reset Program&trade; adalah program penjagaan kesihatan
        yang diselia doktor. Hasil individu berbeza mengikut keadaan klinikal masing-masing.
    </footer>

    {{-- ============ MOBILE STICKY CTA ============ --}}
    <div class="fixed bottom-0 inset-x-0 z-50 sm:hidden bg-white/95 backdrop-blur border-t border-slate-200 px-4 pt-3 pb-[calc(0.75rem+env(safe-area-inset-bottom))] shadow-[0_-4px_12px_rgba(0,0,0,0.06)]">
        <a href="{{ $wa }}" target="_blank" rel="noopener"
           class="flex items-center justify-center rounded-full bg-amber-500 active:bg-amber-600 text-white text-base font-bold py-3.5 px-4 text-center whitespace-nowrap">
            WhatsApp Sekarang
        </a>
    </div>
    <div class="h-24 sm:hidden"></div>

</body>
</html>

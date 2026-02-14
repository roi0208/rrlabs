<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Kami- Robot Rakitan</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .hide-scroll::-webkit-scrollbar {
            display: none;
        }

        .hide-scroll {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>
<body class="bg-white">
    
<nav x-data="{ open: false }" class="absolute top-0 left-0 w-full z-20 flex justify-between items-center px-6 md:px-10 py-6 text-white">
    <div class="flex items-center gap-3">
        <div class="w-10 h-10 bg-white text-black rounded flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
            </svg>
        </div>
        <div class="leading-tight">
            <span class="block font-bold text-lg tracking-wide">Robot</span>
            <span class="block text-sm font-light">Rakitan</span>
        </div>
    </div>

    <div class="hidden md:flex items-center gap-10 text-gray-400 font-medium text-sm">
        <a href="/" class="hover:text-white transition duration-300">Home</a>
        <a href="/pengetahuan" class="hover:text-white transition duration-300">Pengetahuan</a>
        <a href="/portofolio" class="text-white relative after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-1/2 after:h-0.5 after:bg-white">Portofolio</a>
        <a href="/tentang-kami" class="hover:text-white transition duration-300">Tentang Kami</a>
    </div>

    <div class="flex items-center gap-4">
        <span class="font-bold hidden sm:inline">EN</span>
        <i class="fa-solid fa-moon cursor-pointer hover:text-gray-300 transition"></i>
        
        <button @click="open = !open" class="md:hidden focus:outline-none ml-2">
            <svg x-show="!open" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
            <svg x-show="open" x-cloak class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>

    <div x-show="open" 
         x-cloak
         @click.away="open = false"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0"
         class="md:hidden absolute left-0 right-0 top-full bg-black/95 backdrop-blur-md border-t border-white/10 px-10 py-6 flex flex-col gap-4 text-gray-400 z-50">
        <a href="/" class="hover:text-white transition">Home</a>
        <a href="/pengetahuan" class="hover:text-white transition">Pengetahuan</a>
        <a href="/portofolio" class="text-white font-bold">Portofolio</a>
        <a href="/tentang-kami" class="hover:text-white transition">Tentang Kami</a>
    </div>
</nav>
    <section class="relative h-[450px] bg-black overflow-hidden flex items-center justify-center hero-clip">
        <img src="{{ asset('images/bg-project.png') }}"
             class="absolute inset-0 w-full h-full object-cover opacity-50 grayscale" alt="Banner">
        
        <h1 class="relative z-10 text-white text-6xl font-bold tracking-tight">Portofolio Kami</h1>
    </section>

    <section class="bg-gray-500 py-6 text-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex flex-wrap justify-center gap-8">
            @php
                $categories = [
                    ['img' => 'iot.png', 'label' => 'IoT & WSN'],
                    ['img' => 'mobile.png', 'label' => 'Mobile App'],
                    ['img' => 'web.png', 'label' => 'Deploy Website'],
                    ['img' => 'desain.png', 'label' => 'Desain UI/UX'],
                    ['img' => 'seo.png', 'label' => 'Optimasi SEO'],
                    ['img' => 'video.png', 'label' => 'Editing Video'],
                    ['img' => 'foto.png', 'label' => 'Editing Foto'],
                    ['img' => 'bot.png', 'label' => 'Pembuatan Bot'],
                ];
           @endphp

                @foreach($categories as $cat)
                <div class="flex flex-col items-center group cursor-pointer">
                <div class="w-16 h-16 rounded-full bg-white border-2 border-white flex items-center justify-center mb-3 group-hover:bg-gray-400 transition-all duration-300 overflow-hidden p-3">
                    
                    <img src="{{ asset('images/icons/' . $cat['img']) }}" 
                         alt="{{ $cat['label'] }}" 
                         class="w-full h-full object-contain group-hover:brightness-0 transition-all duration-300">
                </div>
                
                <span class="text-[10px] md:text-[11px] uppercase font-bold text-center leading-tight tracking-tighter">
                {{ $cat['label'] }}
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                
                @php
                    $projects = [
                        ['img' => 'project1.png', 'label' => 'Website Ponpes Al-Fauzaniyah'],
                        ['img' => 'project2.png', 'label' => 'Website Badan Pertanahan Nasional '],
                        ['img' => 'project3.png', 'label' => 'Juice Zallies'],
                        ['img' => 'project4.png', 'label' => 'Website Bugar Spa'],
                        
                    ];
                @endphp

                @foreach($projects as $p)
                <div class="bg-[#efefef] rounded-[1.8rem] border border-gray-300 p-4 shadow-sm hover:shadow-md transition">
                    <div class="bg-white rounded-[0.8rem] overflow-hidden border border-gray-300 aspect-video relative">
                        <img src="{{ asset('images/projects/' . $p['img']) }}" class="w-full h-full object-cover" alt="{{ $p['label'] }}">
                    </div>
                    <div class="pt-5 pb-2">
                        <h3 class="text-xl font-bold text-center text-gray-800">{{ $p['label'] }}</h3>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>

    <footer class="bg-[#1c1f24] text-white pt-16 pb-8 border-t border-gray-800">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 mb-16">

                <div class="lg:col-span-6">
                    <div class="mb-6">
                        <h3 class="text-2xl font-bold tracking-widest uppercase leading-none">Robot<br>Rakitan</h3>
                    </div>
                    <p class="text-gray-400 text-sm leading-relaxed mb-8 max-w-md">
                        Selalu terhubung dengan kami dan lebih mengenal tentang layanan yang kami berikan
                    </p>
                    <div class="relative max-w-sm">
                        <input type="email" placeholder="Email anda"
                            class="w-full bg-white text-gray-800 px-6 py-3 rounded-full focus:outline-none placeholder:text-gray-400 text-sm">
                        <button
                            class="absolute right-1.5 top-1.5 p-1.5 bg-[#2d3339] rounded-full hover:bg-black transition text-white">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="lg:col-span-3">
                    <h4 class="text-lg font-bold mb-6">Navigasi</h4>
                    <ul class="space-y-4 text-gray-400 text-sm">
                        <li><a href="/" class="hover:text-white transition">Home</a></li>
                        <li><a href="/pengetahuan" class="hover:text-white transition">Pengetahuan</a></li>
                        <li><a href="/portofolio" class="hover:text-white transition">Portofolio</a></li>
                        <li><a href="/tentang-kami" class="hover:text-white transition">Tentang Kami</a></li>
                    </ul>
                </div>

                <div class="lg:col-span-3">
                    <h4 class="text-lg font-bold mb-6">Layanan</h4>
                    <ul class="space-y-4 text-gray-400 text-sm">
                        <li><a href="#" class="hover:text-white transition">IoT & WSN</a></li>
                        <li><a href="#" class="hover:text-white transition">Mobile App</a></li>
                        <li><a href="#" class="hover:text-white transition">Deploy Website</a></li>
                        <li><a href="#" class="hover:text-white transition">Desain UI/UX</a></li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-700/50 pt-8 flex items-center">
                <div
                    class="w-6 h-6 rounded-full border border-gray-500 flex items-center justify-center text-gray-500 text-xs">
                    C
                </div>
            </div>
        </div>
    </footer>
    
</body>
</html>
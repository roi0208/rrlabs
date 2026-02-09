<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - RRLabs</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="text-slate-900 relative min-h-screen w-full">

    <div class="absolute top-0 left-0 w-full h-[800px] -z-10 bg-cover bg-center bg-no-repeat bg-fixed"
         style="background-image: url('{{ asset('images/bg-tentang_kami.png') }}');">
    </div>

    <nav class="flex items-center justify-between px-8 py-6 w-full max-w-7xl mx-auto">
        <div class="flex items-center gap-2">
            <div class="text-slate-800">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                    <path d="M4 10a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-7Z"/>
                    <path d="M8 8V6a4 4 0 1 1 8 0v2"/>
                    <circle cx="9" cy="13" r="1.5" fill="white"/>
                    <circle cx="15" cy="13" r="1.5" fill="white"/>
                </svg>
            </div>
            <div class="flex flex-col leading-none">
                <span class="font-bold text-lg tracking-tight">RRLabs</span>
                <span class="text-[10px] text-gray-500 font-medium">sakkus</span>
            </div>
        </div>

        <div class="hidden md:flex items-center gap-10 text-sm font-medium text-slate-600">
            <a href="{{ url('/') }}" class="hover:text-black transition">Home</a>
            <a href="{{ url('/pengetahuan') }}" class="hover:text-black transition">Pengetahuan</a>
            <a href="{{ url('/portofolio') }}" class="hover:text-black transition">Proyek</a>
            <div class="relative text-black font-semibold cursor-default">
                Tentang Kami
                <span class="absolute -bottom-2 left-0 w-full h-[2px] bg-black"></span>
            </div>
        </div>

        <div class="flex items-center gap-6 text-sm font-medium">
            <span class="cursor-pointer hover:text-slate-600">EN</span>
            <button class="focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 -rotate-12 fill-black">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
                </svg>
            </button>
        </div>
    </nav>

    <header class="flex items-center justify-center min-h-[50vh] pb-20">
        <h1 class="text-5xl md:text-7xl font-extrabold text-slate-900 tracking-tight drop-shadow-sm">
            Tentang Kami
        </h1>
    </header>

    <section class="bg-white py-20 px-8 rounded-t-[3rem] shadow-[0_-10px_40px_rgba(0,0,0,0.05)] relative z-10">
        <div class="max-w-6xl mx-auto">
            
            <div class="mb-24 max-w-4xl">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Siapa Kami</h2>
                <p class="text-slate-600 leading-relaxed text-lg text-justify">
                    Robot Rakitan kami adalah tim kecil yang bekerja di bidang pengembangan website, desain UI/UX, sistem IoT, dan optimasi SEO. Pendekatan kami menekankan kejelasan teknis, keputusan berbasis konteks, dan solusi yang realistis untuk skala UMKM dan startup
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-12 md:gap-24 mt-10 mb-10 items-stretch">
                
                <div class="relative bg-[#1F2937] rounded-3xl p-8 pt-24 pb-12 text-center text-white shadow-xl hover:-translate-y-2 transition-transform duration-300 h-full">
                    <div class="absolute -top-12 left-1/2 transform -translate-x-1/2 w-24 h-24 bg-white rounded-full flex items-center justify-center border-[6px] border-[#1F2937]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="#1F2937" class="w-10 h-10">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    
                    <h3 class="text-3xl font-bold mb-6">Visi</h3>
                    
                    <div class="flex items-center justify-center h-[calc(100%-4rem)]">
                        <p class="text-gray-100 leading-relaxed text-lg md:text-xl px-2 font-medium">
                            "Menjadi mitra solusi teknologi digital terdepan yang terpercaya dalam mengakselerasi pertumbuhan bisnis dan instansi di Indonesia."
                        </p>
                    </div>
                </div>

                <div class="relative bg-[#1F2937] rounded-3xl p-8 pt-24 pb-12 text-center text-white shadow-xl hover:-translate-y-2 transition-transform duration-300 h-full">
                    <div class="absolute -top-12 left-1/2 transform -translate-x-1/2 w-24 h-24 bg-white rounded-full flex items-center justify-center border-[6px] border-[#1F2937]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="#1F2937" class="w-10 h-10">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                        </svg>
                    </div>

                    <h3 class="text-3xl font-bold mb-6">Misi</h3>
                    
                    <ul class="text-gray-300 leading-relaxed text-sm px-2 text-left list-disc pl-6 space-y-2">
                        <li>Menyediakan layanan pengembangan website dan aplikasi yang stabil, aman, dan mudah digunakan.</li>
                        <li>Menghadirkan solusi automasi dan IoT yang efisien untuk meningkatkan produktivitas klien.</li>
                        <li>Memberikan layanan purna jual (maintenance) yang responsif dan berorientasi pada kepuasan pelanggan.</li>
                        <li>Terus berinovasi mengikuti perkembangan teknologi jaringan dan perangkat lunak terkini.</li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <section class="relative w-full h-[400px] flex items-center justify-center bg-scroll bg-cover bg-center"
             style="background-image: url('{{ asset('images/banner_quote.png') }}');">
        <div class="absolute inset-0 bg-black/50"></div>
        <h2 class="relative z-10 text-white text-3xl md:text-5xl font-serif italic text-center px-4 tracking-wide">
            “Digitalisasi Sat Set, Bisnis Anti Macet”
        </h2>
    </section>

    <section class="bg-white py-24 px-8">
        <div class="max-w-4xl mx-auto text-center space-y-6">
            <h3 class="text-3xl font-bold text-slate-800">
                Siap Digitalisasi Bisnis Anda?
            </h3>
            <p class="text-slate-500 text-lg">
                Bergabunglah bersama kami dalam menciptakan inovasi teknologi yang berdampak.
            </p>
            
            <a href="https://wa.me/628889665831?text=Halo%20RRLabs,%20saya%20ingin%20berkonsultasi" 
               target="_blank"
               class="inline-block mt-4 px-8 py-3 bg-[#1F242C] text-white font-medium rounded-full hover:bg-slate-700 transition shadow-lg">
                Hubungi Kami
            </a>

        </div>
    </section>

    <footer class="bg-[#1F242C] text-white pt-16 pb-8 border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-8">
            <div class="grid md:grid-cols-3 gap-12 mb-16">
                
                <div class="space-y-6">
                    <h3 class="text-2xl font-bold tracking-wider uppercase">ROBOT RAKITAN</h3>
                    <p class="text-gray-400 text-sm leading-relaxed max-w-xs">
                        Selalu terhubung dengan kami dan lebih mengenal tentang layanan yang kami berikan.
                    </p>
                    <div class="flex items-center bg-white rounded-full p-1 max-w-xs">
                        <input type="email" placeholder="Email anda" class="flex-1 bg-transparent px-4 py-2 text-sm text-gray-800 focus:outline-none placeholder-gray-400">
                        <button class="bg-[#2D333F] p-2 rounded-full text-white hover:bg-black transition">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div>
                    <h4 class="text-lg font-semibold mb-6">Navigasi</h4>
                    <ul class="space-y-4 text-gray-400 text-sm">
                        <li><a href="{{ url('/') }}" class="hover:text-white transition">Home</a></li>
                        <li><a href="{{ url('/pengetahuan') }}" class="hover:text-white transition">Pengetahuan</a></li>
                        <li><a href="{{ url('/portofolio') }}" class="hover:text-white transition">Proyek</a></li>
                        <li><a href="{{ url('/tentang-kami') }}" class="hover:text-white transition">Tentang Kami</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-semibold mb-6">Layanan</h4>
                    <ul class="space-y-4 text-gray-400 text-sm">
                        <li><a href="#" class="hover:text-white transition">IoT & WSN</a></li>
                        <li><a href="#" class="hover:text-white transition">Mobile App</a></li>
                        <li><a href="#" class="hover:text-white transition">Deploy Website</a></li>
                        <li><a href="#" class="hover:text-white transition">Desain UI/UX</a></li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-700 pt-8 text-gray-500 text-sm flex items-center gap-2">
                <span>&copy;</span>
                <span>2026 RRLabs. All rights reserved.</span>
            </div>
        </div>
    </footer>

</body>
</html>
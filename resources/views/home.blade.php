<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RRLabs - Robot Rakitan</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        /* Custom Scrollbar Hide */
        .hide-scroll::-webkit-scrollbar {
            display: none;
        }

        .hide-scroll {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        /* Hide default summary marker */
        details>summary {
            list-style: none;
        }

        details>summary::-webkit-details-marker {
            display: none;
        }
    </style>
</head>

<body class="bg-black text-white min-h-screen relative overflow-x-hidden selection:bg-white selection:text-black">

    <div class="absolute inset-0 z-0 opacity-40 pointer-events-none"
        style="background-image: url('https://www.transparenttextures.com/patterns/stardust.png');">
    </div>

    <nav class="relative z-10 container mx-auto px-6 py-8 flex justify-between items-center">
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
            <a href="/home"
                class="text-white relative after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-1/2 after:h-0.5 after:bg-white">Home</a>
            <a href="/pengetahuan" class="hover:text-white transition duration-300">Pengetahuan</a>
            <a href="/portofolio" class="hover:text-white transition duration-300">Portofolio</a>
            <a href="#" class="hover:text-white transition duration-300">Tentang Kami</a>
        </div>

        <div class="flex items-center gap-6">
            <span class="font-bold text-sm tracking-wider">EN</span>
            <button class="hover:text-gray-300 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 -rotate-12" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
                </svg>
            </button>
        </div>
    </nav>

    <main
        class="relative z-10 container mx-auto px-6 flex flex-col lg:flex-row items-center mt-8 lg:mt-20 gap-12 pb-20">
        <div class="w-full lg:w-3/5">
            <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-6 tracking-tight">
                Solusi Digital untuk Bisnis yang Ingin Tumbuh Secara Nyata
            </h1>
            <p class="text-gray-400 text-lg leading-relaxed mb-10 max-w-xl">
                Kami membantu UMKM, startup, dan individu membangun website, desain antarmuka, sistem IoT, serta
                optimasi SEO dengan pendekatan yang terstruktur dan relevan dengan kebutuhan bisnis.
            </p>
            <a href="#"
                class="group inline-flex items-center justify-center border border-white text-white px-8 py-3 rounded-full hover:bg-white hover:text-black transition duration-300 font-medium">
                Hubungi Kami
            </a>
        </div>

        <div class="w-full lg:w-2/5 flex justify-center lg:justify-end relative mt-8 lg:mt-0">
            <div
                class="relative w-72 h-48 md:w-[28rem] md:h-[18rem] border-2 border-dashed border-gray-600/60 flex items-center justify-center">
                <div class="absolute -top-1.5 -left-1.5 w-3 h-3 bg-white"></div>
                <div class="absolute -top-1.5 -right-1.5 w-3 h-3 bg-white"></div>
                <div class="absolute -bottom-1.5 -left-1.5 w-3 h-3 bg-white"></div>
                <div class="absolute -bottom-1.5 -right-1.5 w-3 h-3 bg-white"></div>

                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-32 w-32 md:h-52 md:w-52 text-white animate-spin-slow transition-all duration-300"
                    viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                        clip-rule="evenodd" />
                </svg>

                <div class="absolute -bottom-10 -right-10">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-9 w-9 text-white fill-current drop-shadow-lg"
                        viewBox="0 0 24 24">
                        <path d="M5.5 3.21l12.32 7.7-6.07 1.25L10 17.5 5.5 3.21z" />
                    </svg>
                </div>
            </div>
        </div>
    </main>

    <div class="relative w-full bg-white py-6 overflow-hidden z-20">
        <div class="flex w-[200%] animate-scroll hover:[animation-play-state:paused]">
            <div class="flex w-1/2 justify-around items-center px-8 gap-10">
                <img src="/images/logos/logo1.png" alt="Partner 1"
                    class="h-12 md:h-16 object-contain transition opacity-80 hover:opacity-100">
                <img src="/images/logos/logo2.png" alt="Partner 2"
                    class="h-12 md:h-16 object-contain transition opacity-80 hover:opacity-100">
                <img src="/images/logos/logo3.png" alt="Partner 3"
                    class="h-12 md:h-16 object-contain transition opacity-80 hover:opacity-100">
                <img src="/images/logos/logo4.png" alt="Partner 4"
                    class="h-12 md:h-16 object-contain transition opacity-80 hover:opacity-100">
                <img src="/images/logos/logo5.png" alt="Partner 5"
                    class="h-12 md:h-16 object-contain transition opacity-80 hover:opacity-100">
            </div>
            <div class="flex w-1/2 justify-around items-center px-8 gap-10">
                <img src="/images/logos/logo1.png" alt="Partner 1"
                    class="h-12 md:h-16 object-contain transition opacity-80 hover:opacity-100">
                <img src="/images/logos/logo2.png" alt="Partner 2"
                    class="h-12 md:h-16 object-contain transition opacity-80 hover:opacity-100">
                <img src="/images/logos/logo3.png" alt="Partner 3"
                    class="h-12 md:h-16 object-contain transition opacity-80 hover:opacity-100">
                <img src="/images/logos/logo4.png" alt="Partner 4"
                    class="h-12 md:h-16 object-contain transition opacity-80 hover:opacity-100">
                <img src="/images/logos/logo5.png" alt="Partner 5"
                    class="h-12 md:h-16 object-contain transition opacity-80 hover:opacity-100">
            </div>
        </div>
    </div>

    <section class="relative w-full bg-[#f8f9fa] py-20 px-6 text-gray-800 z-20">
        <div class="container mx-auto relative">

            <div class="absolute -top-10 right-0 hidden lg:flex flex-col gap-3">
                <button class="bg-gray-200 p-2 rounded-full hover:bg-gray-300 transition shadow-sm">
                    <svg class="w-5 h-5 text-gray-700" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                    </svg>
                </button>
                <button class="bg-gray-200 p-2 rounded-full hover:bg-gray-300 transition shadow-sm">
                    <svg class="w-5 h-5 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                    </svg>
                </button>
            </div>

            <div class="max-w-4xl mx-auto text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-extrabold mb-6 text-gray-800">Robot Rakitan</h2>
                <p class="text-gray-500 leading-relaxed text-sm md:text-base px-4">
                    Kami adalah tim kecil yang bekerja di bidang pengembangan website, desain UI/UX, sistem IoT, dan
                    optimasi SEO. Pendekatan kami menekankan kejelasan teknis, keputusan berbasis konteks, dan solusi
                    yang realistis untuk skala UMKM dan startup.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12 relative px-2 items-start">

                <div
                    class="group relative bg-[#373d42] text-white rounded-xl overflow-hidden shadow-lg transition-all duration-500 ease-in-out h-[260px] hover:h-[420px]">
                    <div class="absolute inset-0 w-full h-full bg-cover bg-center opacity-0 group-hover:opacity-100 transition-opacity duration-500"
                        style="background-image: url('/images/services/bg-iot.png');">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent"></div>
                    </div>
                    <div class="relative z-10 p-8 h-full flex flex-col justify-between">
                        <div class="mb-4"><img src="/images/icons/iot_wsn.png" alt="IoT Icon"
                                class="w-14 h-14 object-contain group-hover:scale-110 transition-transform duration-300">
                        </div>
                        <div
                            class="mt-auto transform translate-y-0 group-hover:-translate-y-2 transition-transform duration-500">
                            <h3 class="font-bold text-2xl mb-3 group-hover:text-white">IoT & WSN</h3>
                            <p class="text-gray-400 text-sm leading-relaxed group-hover:text-gray-200">Membangun proyek
                                IoT dan sistem sensor cerdas yang terintegrasi untuk kebutuhan industri maupun personal.
                            </p>
                        </div>
                    </div>
                </div>
                <div
                    class="group relative bg-[#373d42] text-white rounded-xl overflow-hidden shadow-lg transition-all duration-500 ease-in-out h-[260px] hover:h-[420px]">
                    <div class="absolute inset-0 w-full h-full bg-cover bg-center opacity-0 group-hover:opacity-100 transition-opacity duration-500"
                        style="background-image: url('/images/services/bg-mobile.png');">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent"></div>
                    </div>
                    <div class="relative z-10 p-8 h-full flex flex-col justify-between">
                        <div class="mb-4"><img src="/images/icons/mobile_app.png" alt="Mobile App Icon"
                                class="w-14 h-14 object-contain group-hover:scale-110 transition-transform duration-300">
                        </div>
                        <div
                            class="mt-auto transform translate-y-0 group-hover:-translate-y-2 transition-transform duration-500">
                            <h3 class="font-bold text-2xl mb-3">Mobile App</h3>
                            <p class="text-gray-400 text-sm leading-relaxed group-hover:text-gray-200">Pengembangan
                                aplikasi Android dan iOS yang responsif, cepat, dan user-friendly untuk bisnis Anda.</p>
                        </div>
                    </div>
                </div>
                <div
                    class="group relative bg-[#373d42] text-white rounded-xl overflow-hidden shadow-lg transition-all duration-500 ease-in-out h-[260px] hover:h-[420px]">
                    <div class="absolute inset-0 w-full h-full bg-cover bg-center opacity-0 group-hover:opacity-100 transition-opacity duration-500"
                        style="background-image: url('/images/services/bg-web.png');">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent"></div>
                    </div>
                    <div class="relative z-10 p-8 h-full flex flex-col justify-between">
                        <div class="mb-4"><svg class="w-14 h-14 group-hover:scale-110 transition-transform duration-300"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                            </svg></div>
                        <div
                            class="mt-auto transform translate-y-0 group-hover:-translate-y-2 transition-transform duration-500">
                            <h3 class="font-bold text-2xl mb-3">Deploy Website</h3>
                            <p class="text-gray-400 text-sm leading-relaxed group-hover:text-gray-200">Jasa pembuatan
                                dan deployment website profesional dengan performa tinggi dan optimasi SEO.</p>
                        </div>
                    </div>
                </div>
                <div
                    class="group relative bg-[#373d42] text-white rounded-xl overflow-hidden shadow-lg transition-all duration-500 ease-in-out h-[260px] hover:h-[420px]">
                    <div class="absolute inset-0 w-full h-full bg-cover bg-center opacity-0 group-hover:opacity-100 transition-opacity duration-500"
                        style="background-image: url('/images/services/bg-uiux.png');">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent"></div>
                    </div>
                    <div class="relative z-10 p-8 h-full flex flex-col justify-between">
                        <div class="mb-4"><img src="/images/icons/desain_ui-ux.png" alt="UI/UX Icon"
                                class="w-14 h-14 object-contain group-hover:scale-110 transition-transform duration-300">
                        </div>
                        <div
                            class="mt-auto transform translate-y-0 group-hover:-translate-y-2 transition-transform duration-500">
                            <h3 class="font-bold text-2xl mb-3">Desain UI/UX</h3>
                            <p class="text-gray-400 text-sm leading-relaxed group-hover:text-gray-200">Perancangan
                                antarmuka aplikasi dan website yang estetis serta memberikan pengalaman pengguna
                                terbaik.</p>
                        </div>
                    </div>
                </div>
                <div class="hidden lg:flex absolute -right-12 top-1/2 transform -translate-y-1/2 text-gray-400"><svg
                        class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg></div>
            </div>

            <div class="flex justify-center gap-2 mb-10">
                <span class="w-2.5 h-2.5 rounded-full bg-gray-800 cursor-pointer"></span>
                <span class="w-2.5 h-2.5 rounded-full bg-gray-200 cursor-pointer hover:bg-gray-400 transition"></span>
                <span class="w-2.5 h-2.5 rounded-full bg-gray-200 cursor-pointer hover:bg-gray-400 transition"></span>
                <span class="w-2.5 h-2.5 rounded-full bg-gray-200 cursor-pointer hover:bg-gray-400 transition"></span>
                <span class="w-2.5 h-2.5 rounded-full bg-gray-200 cursor-pointer hover:bg-gray-400 transition"></span>
            </div>

            <div class="flex flex-col items-center gap-6 mb-24">
                <div class="flex gap-6 text-gray-700">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <a href="#"
                    class="px-8 py-3 rounded-full bg-gray-200 text-gray-800 font-bold text-sm hover:bg-gray-300 transition shadow-sm">
                    Hubungi Kami
                </a>
            </div>

            <div class="text-center mb-10 pt-10 border-t border-gray-200/50">
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800">Project Kami</h2>
            </div>
            <div class="relative px-2">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div
                        class="bg-gray-100 rounded-2xl p-4 border border-gray-200 hover:shadow-xl transition-all duration-300 cursor-pointer group hover:-translate-y-1">
                        <div class="rounded-xl overflow-hidden h-64 mb-5 relative">
                            <img src="/images/projects/project1.png" alt="Ponpes Al-Fauzaniyah"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <div
                                class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors duration-300">
                            </div>
                        </div>
                        <div class="text-center pb-2">
                            <h3 class="font-bold text-xl text-gray-800 mb-1">Website Ponpes Al-Fauzaniyah</h3>
                            <div
                                class="flex justify-center gap-2 overflow-hidden max-h-0 opacity-0 group-hover:max-h-20 group-hover:opacity-100 group-hover:mt-4 transition-all duration-500 ease-in-out">
                                <span
                                    class="px-4 py-1 rounded-full border border-gray-400 text-xs font-semibold text-gray-600 bg-transparent">UI/UX</span>
                                <span
                                    class="px-4 py-1 rounded-full border border-gray-400 text-xs font-semibold text-gray-600 bg-transparent">Desain
                                    Website</span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="bg-gray-100 rounded-2xl p-4 border border-gray-200 hover:shadow-xl transition-all duration-300 cursor-pointer group hover:-translate-y-1">
                        <div class="rounded-xl overflow-hidden h-64 mb-5 relative">
                            <img src="/images/projects/project2.png" alt="Badan Pertanahan Nasional"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <div
                                class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors duration-300">
                            </div>
                        </div>
                        <div class="text-center pb-2">
                            <h3 class="font-bold text-xl text-gray-800 mb-1">Website Badan Pertanahan<br>Nasional</h3>
                            <div
                                class="flex justify-center gap-2 overflow-hidden max-h-0 opacity-0 group-hover:max-h-20 group-hover:opacity-100 group-hover:mt-4 transition-all duration-500 ease-in-out">
                                <span
                                    class="px-4 py-1 rounded-full border border-gray-400 text-xs font-semibold text-gray-600 bg-transparent">Sistem
                                    Informasi</span>
                                <span
                                    class="px-4 py-1 rounded-full border border-gray-400 text-xs font-semibold text-gray-600 bg-transparent">Web
                                    App</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="hidden lg:flex absolute -right-12 top-1/2 transform -translate-y-1/2 cursor-pointer text-gray-600 hover:text-gray-900 transition hover:scale-110">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </div>
            </div>

            <div class="flex justify-center gap-2 mt-12">
                <span class="w-2.5 h-2.5 rounded-full bg-gray-800 cursor-pointer"></span>
                <span class="w-2.5 h-2.5 rounded-full bg-gray-200 cursor-pointer hover:bg-gray-400 transition"></span>
                <span class="w-2.5 h-2.5 rounded-full bg-gray-200 cursor-pointer hover:bg-gray-400 transition"></span>
                <span class="w-2.5 h-2.5 rounded-full bg-gray-200 cursor-pointer hover:bg-gray-400 transition"></span>
            </div>

            <div class="mt-20">
                <h2 class="text-2xl md:text-3xl font-extrabold text-gray-800 mb-8 text-left">Pertanyaan Yang Sering
                    Ditanyakan</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="space-y-4">
                        <details class="group bg-[#e9ecef] rounded-lg overflow-hidden cursor-pointer">
                            <summary
                                class="flex justify-between items-center p-4 font-semibold text-gray-800 text-sm md:text-base">
                                <span>Siapa tim di balik brand ini?</span>
                                <svg class="w-5 h-5 text-gray-700 transform group-open:rotate-180 transition-transform duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </summary>
                            <div class="px-4 pb-4 text-gray-600 text-sm leading-relaxed">
                                Brand ini dijalankan oleh tim kecil yang terdiri dari beberapa peran, termasuk
                                pengembangan website, desain UI/UX, optimasi SEO, solusi IoT, editing video serta foto
                                dan pembuatan Bot untuk otomatisasi. Setiap proyek dikerjakan secara kolaboratif sesuai
                                keahlian masing-masing.
                            </div>
                        </details>
                        <details class="group bg-[#e9ecef] rounded-lg overflow-hidden cursor-pointer">
                            <summary
                                class="flex justify-between items-center p-4 font-semibold text-gray-800 text-sm md:text-base">
                                <span>Apakah brand ini merupakan agensi atau tim independen?</span>
                                <svg class="w-5 h-5 text-gray-700 transform group-open:rotate-180 transition-transform duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </summary>
                            <div class="px-4 pb-4 text-gray-600 text-sm leading-relaxed">
                                Brand ini beroperasi sebagai tim independen dengan pendekatan semi-agency, fokus pada
                                proyek skala kecil hingga menengah dengan proses kerja yang fleksibel dan terstruktur.
                            </div>
                        </details>
                        <details class="group bg-[#e9ecef] rounded-lg overflow-hidden cursor-pointer">
                            <summary
                                class="flex justify-between items-center p-4 font-semibold text-gray-800 text-sm md:text-base">
                                <span>Bagaimana pendekatan kerja yang digunakan dalam setiap proyek?</span>
                                <svg class="w-5 h-5 text-gray-700 transform group-open:rotate-180 transition-transform duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </summary>
                            <div class="px-4 pb-4 text-gray-600 text-sm leading-relaxed">
                                Pendekatan kerja dimulai dari pemahaman kebutuhan, penentuan ruang lingkup, hingga
                                pemilihan solusi yang realistis dan mudah dikembangkan di tahap berikutnya.
                            </div>
                        </details>
                        <details class="group bg-[#e9ecef] rounded-lg overflow-hidden cursor-pointer">
                            <summary
                                class="flex justify-between items-center p-4 font-semibold text-gray-800 text-sm md:text-base">
                                <span>Layanan apa saja yang dapat ditangani?</span>
                                <svg class="w-5 h-5 text-gray-700 transform group-open:rotate-180 transition-transform duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </summary>
                            <div class="px-4 pb-4 text-gray-600 text-sm leading-relaxed">
                                Layanan yang ditangani meliputi pengembangan website, desain UI/UX, optimasi SEO
                                berbasis struktur dan konten, solusi IoT, editing video serta foto, dan pembuatan Bot
                                otomatisasi untuk kebutuhan skala kecil hingga menengah.
                            </div>
                        </details>
                        <details class="group bg-[#e9ecef] rounded-lg overflow-hidden cursor-pointer">
                            <summary
                                class="flex justify-between items-center p-4 font-semibold text-gray-800 text-sm md:text-base">
                                <span>Apakah melayani UMKM dan startup?</span>
                                <svg class="w-5 h-5 text-gray-700 transform group-open:rotate-180 transition-transform duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </summary>
                            <div class="px-4 pb-4 text-gray-600 text-sm leading-relaxed">
                                Ya. Fokus utama layanan kami adalah UMKM, startup, dan individu yang membutuhkan solusi
                                digital yang praktis dan sesuai dengan keterbatasan sumber daya.
                            </div>
                        </details>
                        <details class="group bg-[#e9ecef] rounded-lg overflow-hidden cursor-pointer">
                            <summary
                                class="flex justify-between items-center p-4 font-semibold text-gray-800 text-sm md:text-base">
                                <span>Apakah semua solusi dibuat secara custom?</span>
                                <svg class="w-5 h-5 text-gray-700 transform group-open:rotate-180 transition-transform duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </summary>
                            <div class="px-4 pb-4 text-gray-600 text-sm leading-relaxed">
                                Ya. Setiap solusi disesuaikan dengan kebutuhan dan konteks proyek, tanpa menggunakan
                                pendekatan satu solusi untuk semua.
                            </div>
                        </details>
                    </div>

                    <div class="space-y-4">
                        <details class="group bg-[#e9ecef] rounded-lg overflow-hidden cursor-pointer">
                            <summary
                                class="flex justify-between items-center p-4 font-semibold text-gray-800 text-sm md:text-base">
                                <span>Bagaimana alur kerja dari awal hingga proyek selesai?</span>
                                <svg class="w-5 h-5 text-gray-700 transform group-open:rotate-180 transition-transform duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </summary>
                            <div class="px-4 pb-4 text-gray-600 text-sm leading-relaxed">
                                Alur kerja umumnya meliputi diskusi awal, perencanaan, pengerjaan bertahap, evaluasi,
                                dan penyesuaian sebelum proyek dinyatakan selesai.
                            </div>
                        </details>
                        <details class="group bg-[#e9ecef] rounded-lg overflow-hidden cursor-pointer">
                            <summary
                                class="flex justify-between items-center p-4 font-semibold text-gray-800 text-sm md:text-base">
                                <span>Apakah klien dilibatkan selama proses pengerjaan?</span>
                                <svg class="w-5 h-5 text-gray-700 transform group-open:rotate-180 transition-transform duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </summary>
                            <div class="px-4 pb-4 text-gray-600 text-sm leading-relaxed">
                                Ya. Klien dilibatkan pada tahap-tahap penting untuk memastikan solusi yang dikembangkan
                                tetap sesuai dengan kebutuhan awal.
                            </div>
                        </details>
                        <details class="group bg-[#e9ecef] rounded-lg overflow-hidden cursor-pointer">
                            <summary
                                class="flex justify-between items-center p-4 font-semibold text-gray-800 text-sm md:text-base">
                                <span>Apakah optimasi SEO menjamin peringkat tertentu di Google?</span>
                                <svg class="w-5 h-5 text-gray-700 transform group-open:rotate-180 transition-transform duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </summary>
                            <div class="px-4 pb-4 text-gray-600 text-sm leading-relaxed">
                                Tidak. Optimasi SEO tidak menjamin peringkat tertentu, namun bertujuan meningkatkan
                                struktur, relevansi, dan kualitas konten agar lebih mudah dipahami mesin pencari.
                            </div>
                        </details>
                        <details class="group bg-[#e9ecef] rounded-lg overflow-hidden cursor-pointer">
                            <summary
                                class="flex justify-between items-center p-4 font-semibold text-gray-800 text-sm md:text-base">
                                <span>Kapan hasil SEO biasanya mulai terlihat?</span>
                                <svg class="w-5 h-5 text-gray-700 transform group-open:rotate-180 transition-transform duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </summary>
                            <div class="px-4 pb-4 text-gray-600 text-sm leading-relaxed">
                                Hasil SEO biasanya terlihat secara bertahap, tergantung kondisi website, kompetisi kata
                                kunci, dan konsistensi pengelolaan konten.
                            </div>
                        </details>
                        <details class="group bg-[#e9ecef] rounded-lg overflow-hidden cursor-pointer">
                            <summary
                                class="flex justify-between items-center p-4 font-semibold text-gray-800 text-sm md:text-base">
                                <span>Apakah bisa konsultasi sebelum memulai proyek?</span>
                                <svg class="w-5 h-5 text-gray-700 transform group-open:rotate-180 transition-transform duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </summary>
                            <div class="px-4 pb-4 text-gray-600 text-sm leading-relaxed">
                                Ya. Konsultasi awal tersedia untuk membantu memahami kebutuhan dan menentukan pendekatan
                                yang paling sesuai sebelum proyek dimulai.
                            </div>
                        </details>
                        <details class="group bg-[#e9ecef] rounded-lg overflow-hidden cursor-pointer">
                            <summary
                                class="flex justify-between items-center p-4 font-semibold text-gray-800 text-sm md:text-base">
                                <span>Bagaimana cara menghubungi tim untuk diskusi awal?</span>
                                <svg class="w-5 h-5 text-gray-700 transform group-open:rotate-180 transition-transform duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </summary>
                            <div class="px-4 pb-4 text-gray-600 text-sm leading-relaxed">
                                Tim dapat dihubungi melalui Email, WhatsApp, atau live chat yang tersedia di website.
                            </div>
                        </details>
                    </div>
                </div>
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
                        <li><a href="/home" class="hover:text-white transition">Home</a></li>
                        <li><a href="#" class="hover:text-white transition">Pengetahuan</a></li>
                        <li><a href="#" class="hover:text-white transition">Portofolio</a></li>
                        <li><a href="#" class="hover:text-white transition">Tentang Kami</a></li>
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
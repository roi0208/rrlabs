<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengetahuan - Robot Rakitan</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
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

<body class="bg-black text-white min-h-screen relative overflow-x-hidden selection:bg-white selection:text-black">

    <!-- Background Pattern -->
    <div class="absolute inset-0 z-0 opacity-40 pointer-events-none"
        style="background-image: url('https://www.transparenttextures.com/patterns/stardust.png');">
    </div>

    <nav x-data="{ open: false }" class="relative z-20 container mx-auto px-6 py-8">
    <div class="flex justify-between items-center">
        <div class="flex items-center gap-3 text-white">
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
            <a href="/pengetahuan"
                class="text-white relative after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-1/2 after:h-0.5 after:bg-white">Pengetahuan</a>
            <a href="/portofolio" class="hover:text-white transition duration-300">Portofolio</a>
            <a href="/tentang-kami" class="hover:text-white transition duration-300">Tentang Kami</a>
        </div>

        <div class="flex items-center gap-6 text-white">
            <span class="font-bold text-sm tracking-wider hidden sm:inline">EN</span>
            <button class="hover:text-gray-300 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 -rotate-12" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
                </svg>
            </button>

            <button @click="open = !open" class="md:hidden focus:outline-none">
                <svg x-show="!open" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
                <svg x-show="open" x-cloak class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
    </div>

    <div x-show="open" 
         x-cloak
         @click.away="open = false"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0"
         class="md:hidden absolute left-0 right-0 top-full bg-black/95 backdrop-blur-md border-t border-white/10 px-6 py-6 flex flex-col gap-4 text-gray-400 z-50">
        <a href="/" class="hover:text-white transition">Home</a>
        <a href="/pengetahuan" class="text-white font-bold">Pengetahuan</a>
        <a href="/portofolio" class="hover:text-white transition">Portofolio</a>
        <a href="/tentang-kami" class="hover:text-white transition">Tentang Kami</a>
    </div>
</nav>

    <!-- Hero Section -->
    <section class="relative z-10 text-center py-16 px-6">
        <h1 class="text-5xl md:text-6xl font-bold mb-4 tracking-tight">Pengetahuan</h1>
        <p class="text-gray-400 text-lg mb-6">Ingin tahu lebih banyak? yuk simak artikel dibawah</p>
        <div class="flex justify-center gap-4">
            <a href="#"
                class="w-10 h-10 bg-gray-800 hover:bg-gray-700 rounded-full flex items-center justify-center transition">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                </svg>
            </a>
            <a href="#"
                class="w-10 h-10 bg-gray-800 hover:bg-gray-700 rounded-full flex items-center justify-center transition">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z" />
                </svg>
            </a>
            <a href="#"
                class="w-10 h-10 bg-gray-800 hover:bg-gray-700 rounded-full flex items-center justify-center transition">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                </svg>
            </a>
        </div>
    </section>

    <!-- Articles Section with White Background -->
    <div class="bg-white relative z-10">
        <div class="relative z-10 container mx-auto px-6 py-20">

            <!-- Article 1: IoT -->
            <article
                class="bg-[#222831] rounded-2xl overflow-hidden mb-8 hover:transform hover:-translate-y-1 transition-all duration-300 shadow-xl">
                <div class="grid md:grid-cols-2 gap-0">
                    <div class="p-8 md:p-12 flex flex-col justify-center order-2 md:order-1">
                        <h2 class="text-3xl font-bold mb-4 text-white">Apa itu IoT?</h2>
                        <p class="text-gray-300 leading-relaxed mb-6">
                            Internet of Things (IoT) adalah jaringan koleksi dari perangkat yang terhubung satu sama
                            lainnya
                            yang memungkinkan komunikasi antar perangkat dan cloud, serta antar perangkat itu sendiri.
                            Berkat adanya chip komputer yang murah dan telekomunikasi dengan jaringan nirkabel,
                            dimungkinkan
                            untuk mengubah berbagai macam alat menjadi bagian dari IoT.
                        </p>
                        <a href="/pengetahuan/apa-itu-iot" target="_blank"
                            class="inline-flex items-center gap-2 mt-6 px-6 py-3 bg-white text-[#222831] font-bold rounded-xl hover:bg-gray-50 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1 w-fit group">
                            Lihat Detail
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>

                    </div>
                    <div class="h-64 md:h-auto bg-cover bg-center order-1 md:order-2"
                        style="background-image: url('https://images.unsplash.com/photo-1518770660439-4636190af475?w=600&q=80')">
                    </div>
                </div>
            </article>

            <!-- Article 2: SEO -->
            <article
                class="bg-[#222831] rounded-2xl overflow-hidden mb-8 hover:transform hover:-translate-y-1 transition-all duration-300 shadow-xl">
                <div class="grid md:grid-cols-2 gap-0">
                    <div class="h-64 md:h-auto bg-cover bg-center"
                        style="background-image: url('{{ asset('images/seo-analytics.png') }}')">
                    </div>
                    <div class="p-8 md:p-12 flex flex-col justify-center">
                        <h2 class="text-3xl font-bold mb-4 text-white">Apa itu SEO pada Website?</h2>
                        <p class="text-gray-300 leading-relaxed mb-6">
                            Search Engine Optimization (SEO) adalah praktik meningkatkan kualitas dan kuantitas traffic
                            ke
                            situs web atau halaman web melalui hasil mesin pencari organik. SEO menargetkan traffic yang
                            tidak dibayar daripada traffic langsung atau traffic yang dibeli. Tujuan utama SEO adalah
                            membuat konten Anda muncul di ranking teratas di hasil pencarian yang relevan dan
                            berkualitas
                            tinggi.
                        </p>
                        <a href="/pengetahuan/apa-itu-seo" target="_blank"
                            class="inline-flex items-center gap-2 mt-6 px-6 py-3 bg-white text-[#222831] font-bold rounded-xl hover:bg-gray-50 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1 w-fit group">
                            Lihat Detail
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>

                    </div>
                </div>
            </article>

            <!-- Article 3: Laptop Overheat -->
            <article
                class="bg-[#222831] rounded-2xl overflow-hidden mb-8 hover:transform hover:-translate-y-1 transition-all duration-300 shadow-xl">
                <div class="grid md:grid-cols-2 gap-0">
                    <div class="p-8 md:p-12 flex flex-col justify-center order-2 md:order-1">
                        <h2 class="text-3xl font-bold mb-4 text-white">Apa itu Overheat pada Laptop?</h2>
                        <p class="text-gray-300 leading-relaxed mb-6">
                            Overheat atau panas berlebih adalah kondisi dimana suhu laptop saya meningkat secara
                            berlebihan.
                            Umumnya disebabkan oleh Procesor (CPU) atau Central Processing Unit dan GPU (Graphics
                            Processing
                            Unit) yang bekerja keras secara terus menerus. Suhu yang normal berkisar antara 40°C hingga
                            70°C. Jika lebih tinggi dari rentang ini, maka laptop Anda mengalami overheat.
                        </p>
                        <a href="/pengetahuan/overheat-laptop" target="_blank"
                            class="inline-flex items-center gap-2 mt-6 px-6 py-3 bg-white text-[#222831] font-bold rounded-xl hover:bg-gray-50 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1 w-fit group">
                            Lihat Detail
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>

                    </div>
                    <div class="h-64 md:h-auto bg-cover bg-center order-1 md:order-2"
                        style="background-image: url('{{ asset('images/laptop-overheat.png') }}')">
                    </div>
                </div>
            </article>

            <!-- Article 4: Chatbot -->
            <article
                class="bg-[#222831] rounded-2xl overflow-hidden mb-8 hover:transform hover:-translate-y-1 transition-all duration-300 shadow-xl">
                <div class="grid md:grid-cols-2 gap-0">
                    <div class="h-64 md:h-auto bg-cover bg-center"
                        style="background-image: url('{{ asset('images/chatbot.png') }}')">
                    </div>
                    <div class="p-8 md:p-12 flex flex-col justify-center">
                        <h2 class="text-3xl font-bold mb-4 text-white">Apa Itu Bot Chat (Chatbot)?</h2>
                        <p class="text-gray-300 leading-relaxed mb-6">
                            Bot Chat atau Chatbot adalah program komputer yang dirancang untuk mensimulasikan percakapan
                            dengan pengguna manusia, terutama di atas Internet. Bot chat dapat membantu customer service
                            mengotomatiskan jawaban untuk pertanyaan yang berulang serta menjawab pertanyaan secara
                            cepat
                            dan real-time dengan memberikan bantuan instan tanpa henti 24/7.
                        </p>
                        <a href="/pengetahuan/chatbot" target="_blank"
                            class="inline-flex items-center gap-2 mt-6 px-6 py-3 bg-white text-[#222831] font-bold rounded-xl hover:bg-gray-50 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1 w-fit group">
                            Lihat Detail
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>

                    </div>
                </div>
            </article>

        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-[#1c1f24] text-white pt-16 pb-8 border-t border-gray-800 relative z-10">
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

    <!-- Scroll to Top Button -->
    <div class="fixed bottom-8 right-8 z-50">
        <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})"
            class="w-12 h-12 bg-gray-800 hover:bg-gray-700 rounded-full flex items-center justify-center transition shadow-lg opacity-0 pointer-events-none"
            id="scrollTopBtn">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
            </svg>
        </button>
    </div>

    <script>
        // Show/hide scroll to top button
        window.addEventListener('scroll', function () {
            const scrollTopBtn = document.getElementById('scrollTopBtn');
            if (window.pageYOffset > 300) {
                scrollTopBtn.classList.remove('opacity-0', 'pointer-events-none');
                scrollTopBtn.classList.add('opacity-100');
            } else {
                scrollTopBtn.classList.add('opacity-0', 'pointer-events-none');
                scrollTopBtn.classList.remove('opacity-100');
            }
        });
    </script>

</body>

</html>
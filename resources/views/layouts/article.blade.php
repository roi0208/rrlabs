<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Robot Rakitan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Outfit', 'sans-serif'],
                    },
                    colors: {
                        primary: '#10B981',
                        dark: '#1c1f24',
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Outfit', sans-serif;
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="bg-white text-gray-900">

    <!-- Navbar -->
    <nav
        class="fixed w-full z-50 transition-all duration-300 bg-[#1c1f24]/90 backdrop-blur-md border-b border-gray-800">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-white text-black rounded flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                        </svg>
                    </div>
                    <div class="leading-tight">
                        <span class="block font-bold text-lg tracking-wide text-white">Robot</span>
                        <span class="block text-sm font-light text-white">Rakitan</span>
                    </div>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center gap-8">
                    <a href="/home"
                        class="text-sm font-medium text-gray-400 hover:text-white transition-colors">Home</a>
                    <a href="/pengetahuan"
                        class="text-sm font-bold text-white transition-colors border-b-2 border-white pb-1">Pengetahuan</a>
                    <a href="#" class="text-sm font-medium text-gray-400 hover:text-white transition-colors">Proyek</a>
                    <a href="#" class="text-sm font-medium text-gray-400 hover:text-white transition-colors">Tentang
                        Kami</a>
                </div>

                <!-- Right Actions -->
                <div class="hidden md:flex items-center gap-4">
                    <span class="text-sm font-bold text-white">EN</span>
                    <button class="text-white hover:text-gray-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z">
                            </path>
                        </svg>
                    </button>
                    <a href="#"
                        class="bg-white text-gray-900 px-5 py-2 rounded-full text-sm font-bold hover:bg-gray-200 transition-colors">
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="relative h-[60vh] min-h-[500px] flex items-end">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0">
            <img src="@yield('image')" alt="@yield('title')" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-[#1c1f24] via-[#1c1f24]/60 to-transparent"></div>
        </div>

        <!-- Content -->
        <div class="container mx-auto px-6 relative z-10 pb-16">
            <h1 class="text-4xl md:text-6xl font-bold text-white mb-4 max-w-4xl leading-tight">
                @yield('title')
            </h1>
            <p class="text-xl text-gray-300 mb-2 font-light max-w-2xl">
                @yield('subtitle')
            </p>
            <p class="text-sm text-gray-400 mb-8">
                @yield('date')
            </p>
        </div>

        <!-- Social Icons Floating -->
        <div class="absolute top-32 right-6 md:right-12 flex flex-col gap-4 z-20">
            <a href="#" class="bg-white/10 backdrop-blur-md p-3 rounded-full hover:bg-white/20 transition text-white">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.897 0-6.721 5.37-12.215 11.97-12.215 3.197.001 6.202 1.259 8.461 3.535 2.257 2.227 3.518 5.23 3.516 8.356-.007 6.643-5.32 12.062-11.859 12.067-1.92-.002-3.875-.526-5.631-1.558L.057 24zm6.578-4.228a.997.997 0 0 1 .521.146 10.026 10.026 0 0 0 5.093 1.359c5.385-.004 9.77-4.475 9.776-9.97.001-2.583-1.041-5.064-2.906-6.903-1.865-1.876-4.343-2.911-6.974-2.912-5.467 0-9.92 4.453-9.92 9.947-.001 1.777.498 3.518 1.442 5.163a.997.997 0 0 1 .154.67l-.767 3.16 3.254-.863a.998.998 0 0 1 .325-.097zm10.748-4.116c-.538-2.618-2.62-5.021-5.268-6.11-2.648-1.089-6.002-.56-8.243 1.393-.112.1-.219.208-.318.322a.965.965 0 0 0 .151 1.341c.365.289.897.234 1.189-.131.066-.083.136-.162.212-.236 1.776-1.636 4.39-2.066 6.541-1.109 2.152.957 3.824 2.859 4.298 4.96.071.312.355.518.666.518a.747.747 0 0 0 .239-.039c.451-.146.702-.628.533-1.009z" />
                </svg>
            </a>
            <a href="#" class="bg-white/10 backdrop-blur-md p-3 rounded-full hover:bg-white/20 transition text-white">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                    </path>
                </svg>
            </a>
            <a href="#" class="bg-white/10 backdrop-blur-md p-3 rounded-full hover:bg-white/20 transition text-white">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5" stroke-width="2"></rect>
                </svg>
            </a>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-6 py-12 md:py-20">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-12">

            <!-- Sidebar (Left) -->
            <div class="md:col-span-4 lg:col-span-3">
                <h3 class="text-2xl font-bold mb-6 text-gray-900 border-l-4 border-gray-900 pl-4">Artikel Lainnya:</h3>

                <div class="flex flex-col gap-6">
                    <!-- Static Sidebar Content -->
                    <ul class="space-y-6">
                        <li>
                            <a href="/pengetahuan/apa-itu-iot" class="block group">
                                <span
                                    class="font-bold text-gray-600 group-hover:text-gray-900 text-lg transition-colors">Apa
                                    itu IoT?</span>
                                <div class="h-px bg-gray-300 w-full mt-4"></div>
                            </a>
                        </li>
                        <li>
                            <a href="/pengetahuan/apa-itu-seo" class="block group">
                                <span
                                    class="font-bold text-gray-600 group-hover:text-gray-900 text-lg transition-colors">Apa
                                    itu SEO pada Website?</span>
                                <div class="h-px bg-gray-300 w-full mt-4"></div>
                            </a>
                        </li>
                        <li>
                            <a href="/pengetahuan/overheat-laptop" class="block group">
                                <span
                                    class="font-bold text-gray-600 group-hover:text-gray-900 text-lg transition-colors">Apa
                                    itu Overheat pada Laptop?</span>
                                <div class="h-px bg-gray-300 w-full mt-4"></div>
                            </a>
                        </li>
                        <li>
                            <a href="/pengetahuan/chatbot" class="block group">
                                <span
                                    class="font-bold text-gray-600 group-hover:text-gray-900 text-lg transition-colors">Apa
                                    itu Bot Chat (Chatbot)?</span>
                                <div class="h-px bg-gray-300 w-full mt-4"></div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Content (Right) -->
            <div class="md:col-span-8 lg:col-span-9">
                <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                    @yield('content')
                </div>

                <!-- Back Button -->
                <div class="mt-12 flex justify-end">
                    <a href="/pengetahuan"
                        class="inline-flex items-center gap-2 bg-[#222831] text-white px-6 py-2 rounded-lg font-bold hover:bg-black transition shadow-lg">
                        Kembali
                        <svg class="w-4 h-4 transform scale-x-[-1]" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>

        </div>
    </main>

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
                        <li><a href="/home" class="hover:text-white transition-colors">Home</a></li>
                        <li><a href="/pengetahuan" class="hover:text-white transition-colors">Pengetahuan</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Proyek</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Tentang Kami</a></li>
                    </ul>
                </div>

                <div class="lg:col-span-3">
                    <h4 class="text-lg font-bold mb-6">Layanan</h4>
                    <ul class="space-y-4 text-gray-400 text-sm">
                        <li><a href="#" class="hover:text-white transition-colors">IoT & WSN</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Mobile App</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Deploy Website</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Desain UI/UX</a></li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 pt-8 flex items-center gap-2">
                <div class="p-1 rounded-full border border-gray-600">
                    <span class="block w-2 h-2 text-gray-600 text-[10px] leading-none text-center">c</span>
                </div>
                <!-- Placeholder for copyright icon circle -->
            </div>
        </div>
    </footer>

</body>

</html>
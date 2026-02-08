@extends('layouts.article')

@section('title', 'Apa itu SEO pada Website?')
@section('subtitle', 'Mengapa website butuh SEO? Simak penjelasannya di sini.')
@section('date', '10 Oktober 2025')
@section('image', asset('images/seo-analytics.png'))

@section('content')
    <p class="mb-4"><strong>Search Engine Optimization (SEO)</strong> adalah serangkaian proses yang dilakukan untuk
        meningkatkan visibilitas sebuah website di halaman hasil pencarian mesin pencari (SERP) seperti Google, Bing, atau
        Yahoo. Tujuan utamanya adalah untuk mendapatkan traffic organik (gratis) yang berkualitas, artinya pengunjung yang
        datang memang mencari informasi atau produk yang Anda tawarkan.</p>

    <h3 class="text-xl font-bold mt-8 mb-4">Mengapa SEO Penting?</h3>
    <p class="mb-4">Di era digital saat ini, sebagian besar pengalaman online dimulai dengan mesin pencari. Jika website
        Anda tidak muncul di halaman pertama untuk kata kunci yang relevan, Anda kehilangan potensi pengunjung yang besar.
    </p>
    <ul class="list-disc list-inside space-y-2 mb-6 ml-2">
        <li><strong>Meningkatkan Kredibilitas:</strong> Website yang muncul di posisi teratas sering dianggap lebih
            terpercaya oleh pengguna.</li>
        <li><strong>Traffic Berkelanjutan:</strong> Berbeda dengan iklan berbayar yang berhenti saat budget habis, SEO
            memberikan dampak jangka panjang.</li>
        <li><strong>Pengalaman Pengguna yang Lebih Baik:</strong> SEO teknis juga mencakup optimasi kecepatan website dan
            responsivitas mobile, yang membuat pengunjung betah.</li>
    </ul>

    <h3 class="text-xl font-bold mt-8 mb-4">Komponen Utama SEO</h3>
    <p class="mb-4">SEO biasanya dibagi menjadi tiga kategori utama:</p>
    <ol class="list-decimal list-inside space-y-2 mb-6 ml-2">
        <li><strong>On-Page SEO:</strong> Optimasi konten di dalam website, seperti penggunaan kata kunci, struktur heading,
            dan kualitas konten.</li>
        <li><strong>Off-Page SEO:</strong> Upaya di luar website untuk meningkatkan otoritas, terutama melalui backlink dari
            website lain yang kredibel.</li>
        <li><strong>Technical SEO:</strong> Optimasi sisi teknis seperti sitemap XML, kecepatan loading, dan keamanan
            (HTTPS) agar mudah dirayapi oleh mesin pencari.</li>
    </ol>
@endsection
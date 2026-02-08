@extends('layouts.article')

@section('title', 'Apa itu IoT?')
@section('subtitle', 'Banyak orang bertanya-tanya apa sih IoT itu?, yuk simak artikel dibawah ini')
@section('date', '12 September 2025')
@section('image', 'https://images.unsplash.com/photo-1518770660439-4636190af475?w=1200&q=80')

@section('content')
    <p class="mb-4"><strong>Internet of Things (IoT)</strong> adalah jaringan kolektif dari perangkat yang terhubung dan
        teknologi yang memfasilitasi komunikasi antara perangkat dan cloud, serta antar perangkat itu sendiri. Secara
        sederhana, IoT menambahkan kemampuan komputasi dan konektivitas ke benda-benda fisik sehingga mereka dapat
        mengirimkan data mengenai kondisi atau lingkungannya secara real-time melalui internet.</p>

    <h3 class="text-xl font-bold mt-8 mb-4">1. Arsitektur dan Cara Kerja IoT</h3>
    <p class="mb-4">IoT bekerja melalui siklus transmisi data yang terdiri dari empat tahap utama:</p>
    <ol class="list-decimal list-inside space-y-2 mb-6 ml-2">
        <li><strong>Sensor/Perangkat:</strong> Mengumpulkan data dari lingkungan (seperti suhu, lokasi, atau detak jantung).
        </li>
        <li><strong>Konektivitas:</strong> Perangkat mengirimkan data ke cloud melalui WiFi, Bluetooth, seluler (4G/5G),
            atau satelit.</li>
        <li><strong>Pengolahan Data:</strong> Perangkat lunak di cloud memproses data yang masuk (misalnya, mengecek apakah
            suhu ruangan melampaui batas aman).</li>
        <li><strong>Antarmuka Pengguna:</strong> Informasi dikirimkan kepada pengguna akhir melalui notifikasi, email, atau
            dasbor aplikasi.</li>
    </ol>

    <h3 class="text-xl font-bold mt-8 mb-4">2. Komponen Pendukung Utama</h3>
    <p class="mb-4">Untuk membentuk sistem IoT yang fungsional, diperlukan integrasi antara:</p>
    <ul class="list-disc list-inside space-y-2 mb-6 ml-2">
        <li><strong>Hardware (Hardware):</strong> Mikrokontroler (seperti Arduino atau Raspberry Pi) dan sensor.</li>
        <li><strong>Protokol Komunikasi:</strong> Standar transmisi data seperti MQTT, CoAP, atau HTTP.</li>
        <li><strong>Cloud Platform:</strong> Tempat penyimpanan dan pemrosesan data (seperti AWS IoT, Google Cloud IoT, atau
            Azure).</li>
        <li><strong>Data Analytics:</strong> Algoritma yang mengubah data mentah menjadi wawasan yang bisa ditindaklanjuti.
        </li>
    </ul>

    <h3 class="text-xl font-bold mt-8 mb-4">3. Implementasi IoT di Berbagai Sektor</h3>
    <p class="mb-4">Pengetahuan mengenai IoT dapat diklasifikasikan berdasarkan penerapannya:</p>
    <ul class="list-disc list-inside space-y-2 mb-6 ml-2">
        <li><strong>Smart Home:</strong> Lampu pintar, termostat otomatis, dan keamanan rumah berbasis aplikasi.</li>
        <li><strong>Industrial IoT (IIoT):</strong> Pemantauan mesin pabrik secara prediktif untuk mencegah kerusakan
            sebelum terjadi.</li>
        <li><strong>Smart City:</strong> Manajemen lalu lintas pintar dan pemantauan kualitas udara kota secara real-time.
        </li>
        <li><strong>Wearables:</strong> Alat kesehatan pintar yang memantau kondisi fisik pasien secara jarak jauh.</li>
    </ul>
@endsection
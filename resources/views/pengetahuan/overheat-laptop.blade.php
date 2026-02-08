@extends('layouts.article')

@section('title', 'Apa itu Overheat pada Laptop?')
@section('subtitle', 'Laptop cepat panas? Kenali penyebab dan solusinya.')
@section('date', '25 September 2025')
@section('image', asset('images/laptop-overheat.png'))

@section('content')
    <p class="mb-4"><strong>Overheat</strong> adalah kondisi di mana suhu komponen internal laptop, terutama prosesor (CPU)
        dan kartu grafis (GPU), meningkat melebihi batas operasional yang aman. Suhu normal laptop saat bekerja berat
        biasanya berkisar antara 70°C hingga 85°C. Jika melebihi ini secara terus-menerus, laptop bisa mengalami penurunan
        performa (thermal throttling) atau bahkan mati mendadak untuk mencegah kerusakan permanen.</p>

    <h3 class="text-xl font-bold mt-8 mb-4">Penyebab Umum Overheat</h3>
    <ul class="list-disc list-inside space-y-2 mb-6 ml-2">
        <li><strong>Debu yang Menumpuk:</strong> Debu dapat menyumbat lubang ventilasi dan menghambat baling-baling kipas,
            sehingga aliran udara panas tidak bisa keluar.</li>
        <li><strong>Thermal Paste Kering:</strong> Pasta termal yang berfungsi menghantarkan panas dari prosesor ke heatsink
            bisa mengering seiring waktu, mengurangi efektivitas pendinginan.</li>
        <li><strong>Permukaan Tidak Rata:</strong> Menggunakan laptop di atas kasur atau bantal dapat menutupi lubang intake
            udara di bagian bawah laptop.</li>
        <li><strong>Beban Kerja Berlebih:</strong> Menjalankan aplikasi berat atau game dengan spesifikasi yang tidak
            mumpuni memaksa hardware bekerja ekstra keras.</li>
    </ul>

    <h3 class="text-xl font-bold mt-8 mb-4">Cara Mencegah dan Mengatasi</h3>
    <p class="mb-4">Berikut beberapa langkah yang bisa Anda lakukan:</p>
    <ol class="list-decimal list-inside space-y-2 mb-6 ml-2">
        <li>Bersihkan kipas dan ventilasi secara berkala menggunakan kuas atau compressed air.</li>
        <li>Ganti thermal paste setidaknya setahun sekali jika laptop sering digunakan untuk tugas berat.</li>
        <li>Gunakan cooling pad untuk membantu sirkulasi udara eksternal.</li>
        <li>Selalu gunakan laptop di permukaan yang keras dan datar seperti meja.</li>
    </ol>
@endsection
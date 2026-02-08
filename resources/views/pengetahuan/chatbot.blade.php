@extends('layouts.article')

@section('title', 'Apa Itu Bot Chat (Chatbot)?')
@section('subtitle', 'Mengenal asisten virtual yang siap melayani 24/7.')
@section('date', '1 November 2025')
@section('image', asset('images/chatbot.png'))

@section('content')
    <p class="mb-4"><strong>Bot Chat</strong> atau <strong>Chatbot</strong> adalah program komputer yang dirancang untuk
        mensimulasikan percakapan dengan pengguna manusia, baik melalui teks maupun suara (voice command). Chatbot kini
        menjadi komponen penting dalam strategi layanan pelanggan digital, memungkinkan bisnis untuk merespons pertanyaan
        pelanggan secara instan kapan saja.</p>

    <h3 class="text-xl font-bold mt-8 mb-4">Bagaimana Chatbot Bekerja?</h3>
    <p class="mb-4">Ada dua jenis utama teknologi di balik chatbot:</p>
    <ul class="list-disc list-inside space-y-2 mb-6 ml-2">
        <li><strong>Rule-Based (Berbasis Aturan):</strong> Chatbot ini bekerja sesuai dengan pohon keputusan yang telah
            diprogram sebelumnya. Ia hanya bisa menjawab pertanyaan spesifik yang sudah ada dalam database-nya. Jika
            pertanyaan di luar skenario, ia tidak bisa menjawab.</li>
        <li><strong>AI / NLP (Artificial Intelligence):</strong> Chatbot ini menggunakan Natural Language Processing untuk
            memahami konteks dan maksud percakapan, bukan hanya kata kunci. Ia bisa "belajar" dari interaksi sebelumnya
            untuk memberikan jawaban yang lebih natural dan akurat.</li>
    </ul>

    <h3 class="text-xl font-bold mt-8 mb-4">Manfaat Chatbot untuk Bisnis</h3>
    <ol class="list-decimal list-inside space-y-2 mb-6 ml-2">
        <li><strong>Layanan 24/7:</strong> Tidak perlu istirahat seperti staf manusia.</li>
        <li><strong>Efisiensi Biaya:</strong> Mengurangi kebutuhan jumlah staf customer service untuk menangani pertanyaan
            dasar yang berulang.</li>
        <li><strong>Respon Cepat:</strong> Menghilangkan waktu tunggu bagi pelanggan yang ingin mendapatkan informasi
            instan.</li>
    </ol>
@endsection
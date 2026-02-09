@extends('layouts.app')

@section('title', 'Tentang Kami - Café Nusantara')

@section('content')
    <!-- Hero Section -->
    <section class="py-16 bg-sage text-white relative">
        <div class="absolute inset-0 bg-black/40 z-0"></div>
        <img src="https://images.unsplash.com/photo-1554118811-1e0d58224f24?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" 
             alt="Café Interior" 
             class="absolute inset-0 w-full h-full object-cover z-0">
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-5xl font-serif font-bold mb-6">Cerita di Balik Setiap Cangkir</h1>
                <p class="text-xl">
                    Sebuah perjalanan rasa yang dimulai dari kecintaan pada warisan kuliner Indonesia
                </p>
            </div>
        </div>
    </section>

    <!-- Our Story -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-serif font-semibold text-wood mb-6">Visi & Misi Kami</h2>
                    <p class="text-gray-600 text-lg">
                        Menjadi wadah yang menghubungkan tradisi dengan modernitas melalui pengalaman kuliner yang autentik
                    </p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                    <div class="bg-white p-8 rounded-2xl shadow-lg">
                        <div class="w-12 h-12 bg-sage/20 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-wood mb-3">Visi</h3>
                        <p class="text-gray-600">
                            Menjadi café terdepan yang melestarikan dan memodernisasi kuliner Indonesia, menciptakan pengalaman bersantap yang mengedukasi sekaligus memanjakan.
                        </p>
                    </div>
                    
                    <div class="bg-white p-8 rounded-2xl shadow-lg">
                        <div class="w-12 h-12 bg-sage/20 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-wood mb-3">Misi</h3>
                        <ul class="text-gray-600 space-y-2">
                            <li>• Menggunakan bahan lokal berkualitas terbaik</li>
                            <li>• Melestarikan resep tradisional dengan sentuhan modern</li>
                            <li>• Menciptakan lingkungan yang nyaman dan inspiratif</li>
                            <li>• Mendukung petani dan produsen lokal</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Timeline -->
                <div class="mb-12">
                    <h3 class="text-3xl font-serif font-semibold text-wood mb-8 text-center">Perjalanan Kami</h3>
                    
                    <div class="space-y-8">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-12 h-12 bg-accent text-white rounded-full flex items-center justify-center font-bold">
                                2018
                            </div>
                            <div class="ml-6">
                                <h4 class="text-xl font-semibold text-wood mb-2">Awal Mula</h4>
                                <p class="text-gray-600">
                                    Café Nusantara didirikan oleh tiga sahabat yang memiliki kecintaan sama pada kopi dan kuliner Indonesia. Dimulai dari kedai kecil di Kemang dengan 10 meja saja.
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-12 h-12 bg-sage text-white rounded-full flex items-center justify-center font-bold">
                                2019
                            </div>
                            <div class="ml-6">
                                <h4 class="text-xl font-semibold text-wood mb-2">Ekspansi Menu</h4>
                                <p class="text-gray-600">
                                    Mulai memperkenalkan menu makanan berat dengan resep turun-temurun dari berbagai daerah Indonesia. Menerima penghargaan "Best New Café" dari Jakarta Food Guide.
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-12 h-12 bg-wood text-white rounded-full flex items-center justify-center font-bold">
                                2022
                            </div>
                            <div class="ml-6">
                                <h4 class="text-xl font-semibold text-wood mb-2">Renovasi & Digitalisasi</h4>
                                <p class="text-gray-600">
                                    Melakukan renovasi besar-besaran dan meluncurkan sistem pemesanan digital. Konsep "modern Indonesian café" semakin matang dengan desain interior yang lebih hangat.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values -->
    <section class="py-16 bg-cream">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-serif font-semibold text-wood mb-6">Nilai-nilai Kami</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Prinsip yang selalu kami pegang dalam setiap langkah dan keputusan
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center p-6">
                    <div class="w-20 h-20 bg-sage/20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-wood mb-3">Cinta</h3>
                    <p class="text-gray-600">
                        Setiap hidangan dibuat dengan cinta dan perhatian penuh, karena kami percaya cinta adalah bumbu terbaik.
                    </p>
                </div>
                
                <div class="text-center p-6">
                    <div class="w-20 h-20 bg-sage/20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-wood mb-3">Kualitas</h3>
                    <p class="text-gray-600">
                        Hanya bahan terbaik yang kami gunakan. Setiap biji kopi dan setiap rempah dipilih dengan teliti.
                    </p>
                </div>
                
                <div class="text-center p-6">
                    <div class="w-20 h-20 bg-sage/20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-wood mb-3">Keaslian</h3>
                    <p class="text-gray-600">
                        Kami menghormati resep asli dan teknik tradisional, sambil berinovasi dalam penyajian dan pengalaman.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-serif font-semibold text-wood mb-6">Tim Kami</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Para penggiat kuliner yang menjalankan Café Nusantara dengan penuh semangat
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=774&q=80" 
                         alt="Budi Santoso" 
                         class="w-32 h-32 rounded-full object-cover mx-auto mb-4">
                    <h3 class="text-xl font-semibold text-wood mb-1">Budi Santoso</h3>
                    <p class="text-sage font-medium mb-3">Founder & Head Chef</p>
                    <p class="text-gray-600">
                        Lulusan sekolah kuliner dengan spesialisasi masakan Indonesia modern.
                    </p>
                </div>
                
                <div class="text-center">
                    <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&auto=format&fit=crop&w=774&q=80" 
                         alt="Sari Dewi" 
                         class="w-32 h-32 rounded-full object-cover mx-auto mb-4">
                    <h3 class="text-xl font-semibold text-wood mb-1">Sari Dewi</h3>
                    <p class="text-sage font-medium mb-3">Co-founder & Barista Expert</p>
                    <p class="text-gray-600">
                        Ahli kopi dengan sertifikasi internasional dan kecintaan pada kopi lokal.
                    </p>
                </div>
                
                <div class="text-center">
                    <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&auto=format&fit=crop&w=774&q=80" 
                         alt="Agus Wijaya" 
                         class="w-32 h-32 rounded-full object-cover mx-auto mb-4">
                    <h3 class="text-xl font-semibold text-wood mb-1">Agus Wijaya</h3>
                    <p class="text-sage font-medium mb-3">Operations Manager</p>
                    <p class="text-gray-600">
                        Bertanggung jawab atas operasional sehari-hari dan pengalaman pelanggan.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
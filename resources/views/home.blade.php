@extends('layouts.app')

@section('title', 'Home - Café Kopitiam33')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-screen overflow-hidden">
        <!-- Swiper Hero Slider -->
        <div class="swiper swiper-hero h-full">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide relative">
                    <div class="absolute inset-0 bg-black/40 z-10"></div>
                    <img src="https://images.unsplash.com/photo-1565958011703-44f9829ba187?ixlib=rb-4.0.3&auto=format&fit=crop&w=2068&q=80" 
                         alt="Kopi Nusantara" 
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 z-20 flex items-center justify-center text-center px-4">
                        <div class="max-w-3xl animate-fade-in">
                            <h1 class="text-5xl md:text-7xl font-serif font-bold text-white mb-6">
                                Cita Rasa <span class="text-accent">Kopitiam33</span>
                            </h1>
                            <p class="text-xl text-white/90 mb-8">
                                Menyajikan kehangatan dan kelezatan dalam setiap sajian. Dari biji kopi pilihan hingga hidangan tradisional dengan sentuhan modern.
                            </p>
                            <a href="#featured" class="bg-accent text-white px-8 py-3 rounded-lg font-medium hover:bg-wood transition inline-block">
                                Jelajahi Menu
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Slide 2 -->
                <div class="swiper-slide relative">
                    <div class="absolute inset-0 bg-black/40 z-10"></div>
                    <img src="https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?ixlib=rb-4.0.3&auto=format&fit=crop&w=2068&q=80" 
                         alt="Makanan Tradisional" 
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 z-20 flex items-center justify-center text-center px-4">
                        <div class="max-w-3xl animate-fade-in">
                            <h1 class="text-5xl md:text-7xl font-serif font-bold text-white mb-6">
                                Warisan <span class="text-accent">Kuliner</span>
                            </h1>
                            <p class="text-xl text-white/90 mb-8">
                                Setiap hidangan adalah cerita. Kami menghadirkan resep turun-temurun dengan inovasi yang mengikuti zaman.
                            </p>
                            <a href="#featured" class="bg-accent text-white px-8 py-3 rounded-lg font-medium hover:bg-wood transition inline-block">
                                Lihat Spesial Hari Ini
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Slide 3 -->
                <div class="swiper-slide relative">
                    <div class="absolute inset-0 bg-black/40 z-10"></div>
                    <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" 
                         alt="Suasana Café" 
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 z-20 flex items-center justify-center text-center px-4">
                        <div class="max-w-3xl animate-fade-in">
                            <h1 class="text-5xl md:text-7xl font-serif font-bold text-white mb-6">
                                Suasana <span class="text-accent">Hangat</span>
                            </h1>
                            <p class="text-xl text-white/90 mb-8">
                                Tempat di mana cerita bertemu kopi. Nikmati momen terbaik Anda dalam suasana yang cozy dan penuh inspirasi.
                            </p>
                            <a href="#featured" class="bg-accent text-white px-8 py-3 rounded-lg font-medium hover:bg-wood transition inline-block">
                                Kunjungi Kami
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Navigation Buttons -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-- Featured Menu Section -->
    <section id="featured" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-serif font-semibold text-wood mb-4">Menu Unggulan</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Nikmati hidangan terbaik kami yang selalu dinanti pelanggan. Setiap sajian dibuat dengan bahan pilihan dan penuh cinta.
                </p>
            </div>
            
            <!-- Menu Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Menu Item 1 -->
                <div class="bg-cream rounded-2xl overflow-hidden hover-lift">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1593246049226-ded77bf90326?ixlib=rb-4.0.3&auto=format&fit=crop&w=1035&q=80" 
                             alt="Nasi Goreng Spesial" 
                             class="w-full h-64 object-cover image-zoom">
                        <div class="absolute top-4 left-4">
                            <span class="bg-accent text-white px-3 py-1 rounded-full text-sm font-medium">
                                Best Seller
                            </span>
                        </div>
                        <div class="absolute top-4 right-4">
                            <span class="bg-green-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                                Tersedia
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="text-xl font-semibold text-wood">Nasi Goreng Spesial</h3>
                            <span class="text-lg font-bold text-accent">Rp 35.000</span>
                        </div>
                        <p class="text-gray-600 mb-4">
                            Nasi goreng dengan ayam suwir, udang, telur, dan sayuran segar. Dihidangkan dengan kerupuk dan acar.
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-sage font-medium">Makanan Berat</span>
                            <button onclick="openOrderModal('Nasi Goreng Spesial', 35000)" 
                                    class="bg-sage text-white px-4 py-2 rounded-lg hover:bg-wood transition">
                                Pesan Sekarang
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Menu Item 2 -->
                <div class="bg-cream rounded-2xl overflow-hidden hover-lift">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1499638673689-79a0b5115d87?ixlib=rb-4.0.3&auto=format&fit=crop&w=1035&q=80" 
                             alt="Kopi Tubruk" 
                             class="w-full h-64 object-cover image-zoom">
                        <div class="absolute top-4 left-4">
                            <span class="bg-accent text-white px-3 py-1 rounded-full text-sm font-medium">
                                Best Seller
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="text-xl font-semibold text-wood">Kopi Tubruk Original</h3>
                            <span class="text-lg font-bold text-accent">Rp 25.000</span>
                        </div>
                        <p class="text-gray-600 mb-4">
                            Kopi lokal pilihan yang diseduh secara tradisional. Aroma kuat dengan rasa yang khas dan nikmat.
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-sage font-medium">Minuman Panas</span>
                            <button onclick="openOrderModal('Kopi Tubruk Original', 25000)" 
                                    class="bg-sage text-white px-4 py-2 rounded-lg hover:bg-wood transition">
                                Pesan Sekarang
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Menu Item 3 -->
                <div class="bg-cream rounded-2xl overflow-hidden hover-lift">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1559715745-e1b33a271c8f?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" 
                             alt="Mie Goreng Jawa" 
                             class="w-full h-64 object-cover image-zoom">
                        <div class="absolute top-4 right-4">
                            <span class="bg-red-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                                Habis
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="text-xl font-semibold text-wood">Mie Goreng Jawa</h3>
                            <span class="text-lg font-bold text-accent">Rp 32.000</span>
                        </div>
                        <p class="text-gray-600 mb-4">
                            Mie goreng dengan bumbu khas Jawa, ayam, udang, sayuran, dan telur. Dilengkapi dengan acar dan kerupuk.
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-sage font-medium">Makanan Berat</span>
                            <button disabled 
                                    class="bg-gray-300 text-gray-500 px-4 py-2 rounded-lg cursor-not-allowed">
                                Stok Habis
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="{{ route('menu') }}" 
                   class="inline-flex items-center text-accent font-medium hover:text-wood transition">
                    Lihat Semua Menu
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- About Preview -->
    <section class="py-16 bg-sage/10">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-4xl font-serif font-semibold text-wood mb-6">Cerita Kami</h2>
                    <p class="text-gray-700 mb-6">
                        Café Nusantara lahir dari kecintaan terhadap warisan kuliner Indonesia. Didirikan pada tahun 2018, kami berkomitmen untuk menghadirkan cita rasa autentik dengan sentuhan modern yang sesuai dengan selera masa kini.
                    </p>
                    <p class="text-gray-700 mb-8">
                        Setiap hidangan yang kami sajikan adalah hasil dari penelitian mendalam tentang resep tradisional, dipadukan dengan teknik penyajian terkini. Kami percaya bahwa makanan tidak hanya memuaskan lidah, tetapi juga menghubungkan kita dengan budaya dan kenangan.
                    </p>
                    <a href="{{ route('about') }}" 
                       class="inline-flex items-center bg-wood text-white px-6 py-3 rounded-lg hover:bg-sage transition">
                        Kenali Kami Lebih Dekat
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                </div>
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1559925393-8be0ec4767c8?ixlib=rb-4.0.3&auto=format&fit=crop&w=2071&q=80" 
                         alt="Interior Café" 
                         class="rounded-2xl shadow-xl">
                    <div class="absolute -bottom-6 -right-6 bg-white p-6 rounded-2xl shadow-lg">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-accent mb-2">4.8</div>
                            <div class="flex justify-center mb-2">
                                ★★★★★
                            </div>
                            <p class="text-sm text-gray-600">Rating dari 500+ pelanggan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

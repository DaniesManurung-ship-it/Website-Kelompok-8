@extends('layouts.app')

@section('title', 'Menu - Café Nusantara')

@section('content')
    <!-- Menu Header -->
    <section class="py-12 bg-sage text-white">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-5xl font-serif font-bold mb-4">Menu Kami</h1>
            <p class="text-xl max-w-3xl mx-auto">
                Temukan berbagai pilihan makanan dan minuman dengan cita rasa Nusantara yang autentik
            </p>
        </div>
    </section>

    <!-- Menu Filter & Search -->
    <section class="py-8 bg-white sticky top-16 z-40 shadow-sm">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                <!-- Category Filter -->
                <div class="flex flex-wrap gap-2">
                    <button class="px-4 py-2 bg-sage text-white rounded-lg font-medium">
                        Semua
                    </button>
                    <button class="px-4 py-2 bg-cream text-wood rounded-lg hover:bg-sage hover:text-white transition">
                        Makanan 
                    </button>
                    <button class="px-4 py-2 bg-cream text-wood rounded-lg hover:bg-sage hover:text-white transition">
                        Snack
                    </button>
                    <button class="px-4 py-2 bg-cream text-wood rounded-lg hover:bg-sage hover:text-white transition">
                        Minuman Panas
                    </button>
                    <button class="px-4 py-2 bg-cream text-wood rounded-lg hover:bg-sage hover:text-white transition">
                        Minuman Dingin
                    </button>
                </div>
                
                <!-- Search -->
                <div class="relative">
                    <input type="text" 
                           placeholder="Cari menu..." 
                           class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-sage focus:border-transparent w-full md:w-64">
                    <svg class="w-5 h-5 text-gray-400 absolute left-3 top-1/2 transform -translate-y-1/2" 
                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu Grid -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <!-- Menu List -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <!-- Menu Items will be populated dynamically -->
                @for($i = 1; $i <= 12; $i++)
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover-lift">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-{{ ['1565299624946-b28f40a0ae38','1559847844-5315695dadae','1565958011703-44f9829ba187'][$i%3] }}?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                             alt="Menu Item {{ $i }}" 
                             class="w-full h-48 object-cover image-zoom"
                             loading="lazy">
                        
                        @if($i % 4 == 0)
                        <div class="absolute top-3 left-3">
                            <span class="bg-red-600 text-white px-2 py-1 rounded text-xs font-medium">
                                HABIS
                            </span>
                        </div>
                        @elseif($i % 3 == 0)
                        <div class="absolute top-3 left-3">
                            <span class="bg-accent text-white px-2 py-1 rounded text-xs font-medium">
                                BEST SELLER
                            </span>
                        </div>
                        @endif
                        
                        @if($i % 5 == 0)
                        <div class="absolute top-3 right-3">
                            <span class="bg-green-600 text-white px-2 py-1 rounded text-xs font-medium">
                                BARU
                            </span>
                        </div>
                        @endif
                    </div>
                    
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-semibold text-lg text-wood">
                                {{ ['Nasi Goreng Spesial', 'Kopi Tubruk', 'Mie Goreng Jawa', 'Es Teh Manis', 'Sate Ayam', 'Bakso Malang', 'Gado-gado', 'Soto Ayam', 'Es Campur', 'Martabak Manis', 'Cappuccino', 'Brownies'][$i-1] }}
                            </h3>
                            <span class="font-bold text-accent">
                                Rp {{ number_format([35000, 25000, 32000, 15000, 28000, 30000, 27000, 29000, 22000, 45000, 28000, 32000][$i-1], 0, ',', '.') }}
                            </span>
                        </div>
                        
                        <p class="text-gray-600 text-sm mb-4">
                            {{ ['Nasi goreng dengan ayam suwir dan udang', 'Kopi tradisional dengan aroma kuat', 'Mie goreng bumbu Jawa spesial', 'Es teh dengan gula merah khas', 'Sate ayam dengan bumbu kacang', 'Bakso urat dengan kuah kaldu sapi', 'Salad sayur dengan bumbu kacang', 'Soto ayam kampung dengan santan', 'Campuran buah dan jelly dengan sirup', 'Martabak manis dengan topping keju', 'Cappuccino dengan latte art', 'Brownies coklat dengan kacang'][$i-1] }}
                        </p>
                        
                        <div class="flex items-center justify-between">
                            <span class="text-xs text-sage font-medium">
                                {{ ['Makanan Berat', 'Minuman Panas', 'Makanan Berat', 'Minuman Dingin', 'Makanan Berat', 'Makanan Berat', 'Makanan Ringan', 'Makanan Berat', 'Minuman Dingin', 'Makanan Ringan', 'Minuman Panas', 'Makanan Ringan'][$i-1] }}
                            </span>
                            
                            @if($i % 4 == 0)
                            <button disabled 
                                    class="bg-gray-200 text-gray-500 px-3 py-1 rounded text-sm cursor-not-allowed">
                                Stok Habis
                            </button>
                            @else
                            <button onclick="openOrderModal(
                                '{{ ['Nasi Goreng Spesial', 'Kopi Tubruk', 'Mie Goreng Jawa', 'Es Teh Manis', 'Sate Ayam', 'Bakso Malang', 'Gado-gado', 'Soto Ayam', 'Es Campur', 'Martabak Manis', 'Cappuccino', 'Brownies'][$i-1] }}',
                                {{ [35000, 25000, 32000, 15000, 28000, 30000, 27000, 29000, 22000, 45000, 28000, 32000][$i-1] }}
                            )" 
                                    class="bg-sage text-white px-3 py-1 rounded text-sm hover:bg-wood transition">
                                Pesan
                            </button>
                            @endif
                        </div>
                    </div>
                </div>
                @endfor
            </div>
            
            <!-- Pagination -->
            <div class="mt-12 flex justify-center">
                <nav class="flex items-center space-x-2">
                    <button class="w-10 h-10 flex items-center justify-center rounded-lg bg-cream text-wood hover:bg-sage hover:text-white transition">
                        &laquo;
                    </button>
                    <button class="w-10 h-10 flex items-center justify-center rounded-lg bg-sage text-white">
                        1
                    </button>
                    <button class="w-10 h-10 flex items-center justify-center rounded-lg bg-cream text-wood hover:bg-sage hover:text-white transition">
                        2
                    </button>
                    <button class="w-10 h-10 flex items-center justify-center rounded-lg bg-cream text-wood hover:bg-sage hover:text-white transition">
                        3
                    </button>
                    <button class="w-10 h-10 flex items-center justify-center rounded-lg bg-cream text-wood hover:bg-sage hover:text-white transition">
                        &raquo;
                    </button>
                </nav>
            </div>
        </div>
    </section>

    <!-- Order Information -->
    <section class="py-12 bg-cream">
        <div class="container mx-auto px-4 text-center">
            <div class="max-w-3xl mx-auto">
                <h2 class="text-3xl font-serif font-semibold text-wood mb-6">Cara Memesan</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="p-6">
                        <div class="w-16 h-16 bg-sage/20 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-sage">1</span>
                        </div>
                        <h3 class="font-semibold text-lg text-wood mb-2">Pilih Menu</h3>
                        <p class="text-gray-600">Telusuri menu kami dan pilih makanan/minuman favorit Anda</p>
                    </div>
                    
                    <div class="p-6">
                        <div class="w-16 h-16 bg-sage/20 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-sage">2</span>
                        </div>
                        <h3 class="font-semibold text-lg text-wood mb-2">Klik Pesan</h3>
                        <p class="text-gray-600">Klik tombol "Pesan" pada menu yang Anda inginkan</p>
                    </div>
                    
                    <div class="p-6">
                        <div class="w-16 h-16 bg-sage/20 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-sage">3</span>
                        </div>
                        <h3 class="font-semibold text-lg text-wood mb-2">Bayar di Kasir</h3>
                        <p class="text-gray-600">Lakukan pembayaran di kasir saat mengambil pesanan</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
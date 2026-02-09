<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Café Kopitiam33') }} - @yield('title')</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">
    
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    
    <!-- Alpine JS -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Custom Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'sage': '#8BA888',
                        'cream': '#F5EFE6',
                        'wood': '#A67B5B',
                        'accent': '#D97642',
                    },
                    fontFamily: {
                        'sans': ['Poppins', 'sans-serif'],
                        'serif': ['Playfair Display', 'serif'],
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.5s ease-in-out',
                        'slide-up': 'slideUp 0.3s ease-out',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        slideUp: {
                            '0%': { transform: 'translateY(10px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' },
                        }
                    }
                }
            }
        }
    </script>
    
    <style>
        .swiper-pagination-bullet-active {
            background-color: #D97642 !important;
        }
        .swiper-button-next, .swiper-button-prev {
            color: #D97642 !important;
        }
        .hover-lift {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .hover-lift:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .image-zoom {
            transition: transform 0.5s ease;
        }
        .image-zoom:hover {
            transform: scale(1.05);
        }
    </style>
    
    @stack('styles')
</head>
<body class="bg-cream font-sans text-gray-800">
    
    @unless(Request::is('login', 'register', 'admin/login', 'admin/*'))
        @include('layouts.navbar')
    @endunless

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    @unless(Request::is('login', 'register', 'admin/login', 'admin/*'))
        <!-- Footer -->
        <footer class="bg-sage text-white mt-16">
            <div class="container mx-auto px-4 py-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Brand Info -->
                    <div>
                        <div class="flex items-center space-x-2 mb-4">
                            <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center">
                                <span class="text-sage font-bold text-xl">CK</span>
                            </div>
                            <span class="font-serif text-2xl font-semibold">Café Kopitiam33</span>
                        </div>
                        <p class="text-cream">
                            Menyajikan cita rasa Indonesia dengan sentuhan modern. Nikmati suasana hangat dan nyaman di tengah kota.
                        </p>
                    </div>
                    
                    <!-- Quick Links -->
                    <div>
                        <h3 class="text-xl font-semibold mb-4">Navigasi</h3>
                        <ul class="space-y-2">
                            <li><a href="{{ url('/') }}" class="text-cream hover:text-white transition">Dashboard</a></li>
                            <li><a href="{{ url('/home') }}" class="text-cream hover:text-white transition">Home</a></li>
                            <li><a href="{{ url('/menu') }}" class="text-cream hover:text-white transition">Menu</a></li>
                            <li><a href="{{ url('/about') }}" class="text-cream hover:text-white transition">Tentang Kami</a></li>
                            <li><a href="{{ url('/gallery') }}" class="text-cream hover:text-white transition">Galeri</a></li>
                            <li><a href="{{ url('/contact') }}" class="text-cream hover:text-white transition">Kontak</a></li>
                        </ul>
                    </div>
                    
                    <!-- Contact Info -->
                    <div>
                        <h3 class="text-xl font-semibold mb-4">Kontak Kami</h3>
                        <div class="space-y-2 text-cream">
                            <p class="flex items-center space-x-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                <span>Jl. Patuan Nagari No. 5, Sangkar Nihuta, Kota Balige</span>
                            </p>
                            <p class="flex items-center space-x-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                                <span>+62 853-5908-7858</span>
                            </p>
                            <p class="flex items-center space-x-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                <span>kopitiam33@gmail.com</span>
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="border-t border-cream/30 mt-8 pt-8 text-center text-cream">
                    <p>&copy; {{ date('Y') }} Café Kopitiam33. All rights reserved.</p>
                    <p class="mt-2">Made with ☕ in Toba</p>
                </div>
            </div>
        </footer>
    @endunless

    <!-- Order Success Modal -->
    @unless(Request::is('login', 'register', 'admin/login', 'admin/*'))
        <div id="orderModal" class="fixed inset-0 bg-black/50 z-50 hidden items-center justify-center p-4">
            <div class="bg-white rounded-2xl max-w-md w-full p-6 animate-slide-up">
                <div class="text-center mb-6">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-serif font-semibold text-wood mb-2">Pesanan Berhasil!</h3>
                    <p class="text-gray-600" id="orderMessage"></p>
                </div>
                
                <div class="bg-cream/50 rounded-lg p-4 mb-6">
                    <div class="flex justify-between items-center mb-2">
                        <span class="font-medium" id="modalItemName">Nasi Goreng Spesial</span>
                        <span class="font-semibold text-wood" id="modalItemPrice">Rp 35.000</span>
                    </div>
                    <div class="text-sm text-gray-600">
                        Jumlah: <span id="modalItemQuantity">1</span> porsi
                    </div>
                </div>
                
                <div class="text-center text-gray-600 mb-6">
                    <p class="font-medium">Silakan lakukan pembayaran di kasir.</p>
                    <p class="text-sm mt-2">Pesanan Anda telah dicatat dalam sistem kami.</p>
                </div>
                
                <button onclick="closeOrderModal()" class="w-full bg-accent text-white py-3 rounded-lg font-medium hover:bg-wood transition">
                    Tutup
                </button>
            </div>
        </div>
    @endunless

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
    <script>
        // Mobile Menu Toggle
        document.getElementById('mobile-menu-button')?.addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            const mobileMenu = document.getElementById('mobile-menu');
            const menuButton = document.getElementById('mobile-menu-button');
            
            if (mobileMenu && menuButton) {
                if (!mobileMenu.contains(event.target) && !menuButton.contains(event.target)) {
                    mobileMenu.classList.add('hidden');
                }
            }
        });

        // Order Modal Functions
        function openOrderModal(itemName, itemPrice, itemImage = null) {
            const orderModal = document.getElementById('orderModal');
            if (orderModal) {
                document.getElementById('modalItemName').textContent = itemName;
                document.getElementById('modalItemPrice').textContent = formatPrice(itemPrice);
                document.getElementById('orderMessage').textContent = `"${itemName}" telah ditambahkan ke pesanan Anda.`;
                
                orderModal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            }
        }

        function closeOrderModal() {
            const orderModal = document.getElementById('orderModal');
            if (orderModal) {
                orderModal.classList.add('hidden');
                document.body.style.overflow = 'auto';
            }
        }

        // Format price to Indonesian Rupiah
        function formatPrice(price) {
            return new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR',
                minimumFractionDigits: 0
            }).format(price);
        }

        // Close modal when clicking outside
        document.getElementById('orderModal')?.addEventListener('click', function(event) {
            if (event.target === this) {
                closeOrderModal();
            }
        });

        // Initialize Swiper on pages that need it
        document.addEventListener('DOMContentLoaded', function() {
            if (document.querySelector('.swiper-hero')) {
                new Swiper('.swiper-hero', {
                    loop: true,
                    autoplay: {
                        delay: 4000,
                        disableOnInteraction: false,
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                });
            }
            
            if (document.querySelector('.swiper-gallery')) {
                new Swiper('.swiper-gallery', {
                    slidesPerView: 1,
                    spaceBetween: 20,
                    loop: true,
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    breakpoints: {
                        640: {
                            slidesPerView: 2,
                        },
                        1024: {
                            slidesPerView: 3,
                        },
                    },
                });
            }
        });
    </script>
    
    @stack('scripts')
</body>
</html>
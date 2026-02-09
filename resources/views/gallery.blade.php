@extends('layouts.app')

@section('title', 'Galeri - Café Kopitiam33')

@push('styles')
<style>
    /* Masonry Grid untuk Galeri */
    .gallery-grid {
        columns: 1;
        column-gap: 1.5rem;
    }
    
    .gallery-item {
        break-inside: avoid;
        margin-bottom: 1.5rem;
    }
    
    @media (min-width: 640px) {
        .gallery-grid {
            columns: 2;
        }
    }
    
    @media (min-width: 1024px) {
        .gallery-grid {
            columns: 3;
        }
    }
    
    @media (min-width: 1280px) {
        .gallery-grid {
            columns: 4;
        }
    }
    
    /* Gallery Item Styling */
    .gallery-card {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        transition: all 0.3s ease;
        border: 1px solid rgba(139, 168, 136, 0.1);
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    }
    
    .gallery-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(139, 168, 136, 0.15);
        border-color: rgba(139, 168, 136, 0.3);
    }
    
    /* Category Badge */
    .category-badge {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        border-radius: 20px;
        padding: 6px 12px;
        font-size: 12px;
        font-weight: 500;
        color: #A67B5B;
        border: 1px solid rgba(167, 123, 91, 0.2);
    }
    
    /* Overlay Effect */
    .gallery-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, transparent 50%);
        opacity: 0;
        transition: opacity 0.3s ease;
        display: flex;
        align-items: flex-end;
        padding: 1.5rem;
    }
    
    .gallery-card:hover .gallery-overlay {
        opacity: 1;
    }
    
    /* Filter Buttons */
    .filter-btn {
        padding: 10px 20px;
        border-radius: 25px;
        font-weight: 500;
        transition: all 0.3s ease;
        border: 2px solid transparent;
        background: #F5EFE6;
        color: #A67B5B;
    }
    
    .filter-btn:hover {
        background: rgba(139, 168, 136, 0.1);
        transform: translateY(-2px);
    }
    
    .filter-btn.active {
        background: #8BA888;
        color: white;
        border-color: #8BA888;
    }
    
    /* Lightbox Modal */
    .lightbox-modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.9);
        z-index: 1000;
        animation: fadeIn 0.3s ease;
    }
    
    .lightbox-content {
        position: relative;
        max-width: 90%;
        max-height: 90vh;
        margin: 5vh auto;
        animation: zoomIn 0.3s ease;
    }
    
    @keyframes zoomIn {
        from { transform: scale(0.9); opacity: 0; }
        to { transform: scale(1); opacity: 1; }
    }
</style>
@endpush

@section('content')
<!-- Gallery Header -->
<section class="py-12 bg-sage text-white">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-5xl font-serif font-bold mb-4">Galeri Kami</h1>
        <p class="text-xl max-w-3xl mx-auto">
            Jelajahi momen terbaik, hidangan istimewa, dan suasana hangat Café Nusantara
        </p>
    </div>
</section>

<!-- Gallery Filter -->
<section class="py-8 bg-white sticky top-16 z-40 shadow-sm">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
            <!-- Category Filter -->
            <div class="flex flex-wrap gap-3">
                <button class="filter-btn active" data-filter="all">Semua</button>
                <button class="filter-btn" data-filter="interior">Interior</button>
                <button class="filter-btn" data-filter="food">Makanan</button>
                <button class="filter-btn" data-filter="drink">Minuman</button>
                <button class="filter-btn" data-filter="event">Acara</button>
                <button class="filter-btn" data-filter="chef">Chef</button>
            </div>
            
            <!-- Sort Options -->
            <div class="flex items-center space-x-4">
                <span class="text-gray-600">Urutkan:</span>
                <select class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-sage">
                    <option>Terbaru</option>
                    <option>Terlama</option>
                    <option>Terpopuler</option>
                </select>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Grid -->
<section class="py-12">
    <div class="container mx-auto px-4">
        <!-- Masonry Grid -->
        <div class="gallery-grid" id="galleryContainer">
            <!-- Gallery Items will be inserted here -->
        </div>
        
        <!-- Load More Button -->
        <div class="text-center mt-12">
            <button id="loadMoreBtn" class="bg-sage text-white px-8 py-3 rounded-lg font-medium hover:bg-wood transition">
                Muat Lebih Banyak
            </button>
        </div>
    </div>
</section>

<!-- Lightbox Modal -->
<div id="lightboxModal" class="lightbox-modal">
    <div class="lightbox-content">
        <button id="closeLightbox" class="absolute top-4 right-4 text-white text-3xl z-10">
            &times;
        </button>
        <button id="prevBtn" class="absolute left-4 top-1/2 transform -translate-y-1/2 text-white text-3xl z-10">
            ‹
        </button>
        <button id="nextBtn" class="absolute right-4 top-1/2 transform -translate-y-1/2 text-white text-3xl z-10">
            ›
        </button>
        
        <img id="lightboxImage" class="w-full h-auto rounded-lg" src="" alt="">
        
        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-6 rounded-b-lg">
            <div id="lightboxTitle" class="text-white text-xl font-semibold mb-2"></div>
            <div id="lightboxDesc" class="text-white/80"></div>
            <div id="lightboxCategory" class="mt-2">
                <span class="inline-block px-3 py-1 bg-white/20 text-white rounded-full text-sm"></span>
            </div>
        </div>
    </div>
</div>

<!-- Instagram Section -->
<section class="py-16 bg-cream">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full mb-4">
                <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                </svg>
            </div>
            <h2 class="text-4xl font-serif font-semibold text-wood mb-4">Ikuti Perjalanan Kami</h2>
            <p class="text-gray-600 max-w-2xl mx-auto mb-8">
                Ikuti update terbaru, menu spesial, dan momen-momen spesial di balik layar
            </p>
            <a href="https://instagram.com/cafenusantara" 
               target="_blank"
               class="inline-flex items-center bg-gradient-to-r from-purple-500 to-pink-500 text-white px-6 py-3 rounded-lg font-medium hover:opacity-90 transition">
                @cafenusantara
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                </svg>
            </a>
        </div>
        
        <!-- Instagram Feed -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @for($i = 1; $i <= 8; $i++)
            <a href="#" class="block overflow-hidden rounded-xl group">
                <img src="https://images.unsplash.com/photo-{{ [
                    '1578662996442-48f60103fc96',
                    '1567306301408-9b74779a11af',
                    '1545235617-9465d2a55698',
                    '1561047029-3000c68339ca',
                    '1513104890138-7c749659a591',
                    '1549396536-c74d8f9f731d',
                    '1514933651103-005eec06c04b',
                    '1476224203421-9c39e5b15b01'
                ][$i-1] }}?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                     alt="Instagram {{ $i }}" 
                     class="w-full h-64 object-cover group-hover:scale-110 transition duration-300">
                <div class="absolute inset-0 bg-black/0 group-hover:bg-black/40 transition duration-300 flex items-center justify-center opacity-0 group-hover:opacity-100">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                    </svg>
                </div>
            </a>
            @endfor
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    // Gallery data
    const galleryItems = [
        // Interior
        { id: 1, category: 'interior', title: 'Interior Café', description: 'Suasana hangat interior café dengan desain modern Indonesia', image: 'https://images.unsplash.com/photo-1554118811-1e0d58224f24?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80' },
        { id: 2, category: 'interior', title: 'Area Lounge', description: 'Area lounge yang nyaman untuk bersantai', image: 'https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80' },
        { id: 3, category: 'interior', title: 'Coffee Bar', description: 'Coffee bar dengan peralatan profesional', image: 'https://images.unsplash.com/photo-1559925393-8be0ec4767c8?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80' },
        
        // Food
        { id: 4, category: 'food', title: 'Nasi Goreng Spesial', description: 'Nasi goreng dengan penyajian premium', image: 'https://images.unsplash.com/photo-1593246049226-ded77bf90326?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80' },
        { id: 5, category: 'food', title: 'Sate Ayam', description: 'Sate ayam dengan bumbu kacang khas', image: 'https://images.unsplash.com/photo-1555939594-58d7cb561ad1?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80' },
        { id: 6, category: 'food', title: 'Rendang Sapi', description: 'Rendang sapi dengan bumbu rempah lengkap', image: 'https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80' },
        { id: 7, category: 'food', title: 'Gado-Gado', description: 'Salad sayuran dengan saus kacang', image: 'https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80' },
        { id: 8, category: 'food', title: 'Soto Ayam', description: 'Soto ayam dengan kuah kaldu gurih', image: 'https://images.unsplash.com/photo-1559715745-e1b33a271c8f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80' },
        
        // Drink
        { id: 9, category: 'drink', title: 'Kopi Tubruk', description: 'Kopi tradisional dengan aroma kuat', image: 'https://images.unsplash.com/photo-1499638673689-79a0b5115d87?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80' },
        { id: 10, category: 'drink', title: 'Es Teh Manis', description: 'Es teh dengan gula merah khas', image: 'https://images.unsplash.com/photo-1561047029-3000c68339ca?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80' },
        { id: 11, category: 'drink', title: 'Es Campur', description: 'Campuran buah dan jelly dengan sirup', image: 'https://images.unsplash.com/photo-1560008581-09826d1de69e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80' },
        
        // Event
        { id: 12, category: 'event', title: 'Workshop Kopi', description: 'Workshop brewing kopi untuk komunitas', image: 'https://images.unsplash.com/photo-1514933651103-005eec06c04b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80' },
        { id: 13, category: 'event', title: 'Acara Komunitas', description: 'Acara bulanan komunitas pecinta kopi', image: 'https://images.unsplash.com/photo-1476224203421-9c39e5b15b01?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80' },
        { id: 14, category: 'event', title: 'Launch Menu Baru', description: 'Peluncuran menu baru dengan live cooking', image: 'https://images.unsplash.com/photo-1481833761820-0509d3217039?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80' },
        
        // Chef
        { id: 15, category: 'chef', title: 'Chef Feny', description: 'Chef Feny sedang mempersiapkan hidangan', image: 'https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80' },
        { id: 16, category: 'chef', title: 'Barista Beraksi', description: 'Barista kami sedang membuat latte art', image: 'https://images.unsplash.com/photo-1463797221720-8c0ba3d8e025?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80' },
        { id: 17, category: 'chef', title: 'Tim Dapur', description: 'Tim dapur kami yang profesional', image: 'https://images.unsplash.com/photo-1545235617-9465d2a55698?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80' },
        { id: 18, category: 'chef', title: 'Training Barista', description: 'Training barista untuk staf baru', image: 'https://images.unsplash.com/photo-1513104890138-7c749659a591?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80' },
    ];

    let currentFilter = 'all';
    let displayedItems = 12;
    let currentLightboxIndex = 0;

    // Function to render gallery items
    function renderGallery() {
        const container = document.getElementById('galleryContainer');
        container.innerHTML = '';
        
        const filteredItems = galleryItems.filter(item => 
            currentFilter === 'all' || item.category === currentFilter
        ).slice(0, displayedItems);
        
        filteredItems.forEach((item, index) => {
            const galleryItem = document.createElement('div');
            galleryItem.className = 'gallery-item';
            galleryItem.setAttribute('data-category', item.category);
            galleryItem.setAttribute('data-index', index);
            
            galleryItem.innerHTML = `
                <div class="gallery-card">
                    <div class="relative h-64 overflow-hidden">
                        <img src="${item.image}" 
                             alt="${item.title}" 
                             class="w-full h-full object-cover">
                        <div class="absolute top-4 left-4">
                            <span class="category-badge">
                                ${getCategoryName(item.category)}
                            </span>
                        </div>
                        <div class="gallery-overlay">
                            <div>
                                <h3 class="text-white text-lg font-semibold mb-2">${item.title}</h3>
                                <p class="text-white/80 text-sm">${item.description}</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-wood mb-2">${item.title}</h3>
                        <p class="text-gray-600 text-sm">${item.description}</p>
                    </div>
                </div>
            `;
            
            galleryItem.addEventListener('click', () => openLightbox(index));
            container.appendChild(galleryItem);
        });
        
        // Show/hide load more button
        document.getElementById('loadMoreBtn').style.display = 
            displayedItems < galleryItems.length ? 'block' : 'none';
    }

    // Function to get category name in Indonesian
    function getCategoryName(category) {
        const categories = {
            'interior': 'Interior',
            'food': 'Makanan',
            'drink': 'Minuman',
            'event': 'Acara',
            'chef': 'Chef'
        };
        return categories[category] || 'Lainnya';
    }

    // Function to open lightbox
    function openLightbox(index) {
        const item = galleryItems[index];
        currentLightboxIndex = index;
        
        document.getElementById('lightboxImage').src = item.image;
        document.getElementById('lightboxTitle').textContent = item.title;
        document.getElementById('lightboxDesc').textContent = item.description;
        document.getElementById('lightboxCategory').innerHTML = `
            <span class="inline-block px-3 py-1 bg-white/20 text-white rounded-full text-sm">
                ${getCategoryName(item.category)}
            </span>
        `;
        
        document.getElementById('lightboxModal').style.display = 'block';
        document.body.style.overflow = 'hidden';
    }

    // Function to close lightbox
    function closeLightbox() {
        document.getElementById('lightboxModal').style.display = 'none';
        document.body.style.overflow = 'auto';
    }

    // Function to navigate lightbox
    function navigateLightbox(direction) {
        const filteredItems = galleryItems.filter(item => 
            currentFilter === 'all' || item.category === currentFilter
        );
        
        if (direction === 'prev') {
            currentLightboxIndex = (currentLightboxIndex - 1 + filteredItems.length) % filteredItems.length;
        } else {
            currentLightboxIndex = (currentLightboxIndex + 1) % filteredItems.length;
        }
        
        openLightbox(currentLightboxIndex);
    }

    // Initialize gallery
    document.addEventListener('DOMContentLoaded', function() {
        // Initial render
        renderGallery();
        
        // Filter buttons
        document.querySelectorAll('.filter-btn').forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                document.querySelectorAll('.filter-btn').forEach(btn => {
                    btn.classList.remove('active');
                });
                
                // Add active class to clicked button
                this.classList.add('active');
                
                // Update filter
                currentFilter = this.getAttribute('data-filter');
                displayedItems = 12;
                renderGallery();
            });
        });
        
        // Load more button
        document.getElementById('loadMoreBtn').addEventListener('click', function() {
            displayedItems += 6;
            renderGallery();
        });
        
        // Lightbox controls
        document.getElementById('closeLightbox').addEventListener('click', closeLightbox);
        document.getElementById('prevBtn').addEventListener('click', () => navigateLightbox('prev'));
        document.getElementById('nextBtn').addEventListener('click', () => navigateLightbox('next'));
        
        // Close lightbox on click outside
        document.getElementById('lightboxModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeLightbox();
            }
        });
        
        // Keyboard navigation for lightbox
        document.addEventListener('keydown', function(e) {
            if (document.getElementById('lightboxModal').style.display === 'block') {
                if (e.key === 'Escape') {
                    closeLightbox();
                } else if (e.key === 'ArrowLeft') {
                    navigateLightbox('prev');
                } else if (e.key === 'ArrowRight') {
                    navigateLightbox('next');
                }
            }
        });
    });
</script>
@endpush
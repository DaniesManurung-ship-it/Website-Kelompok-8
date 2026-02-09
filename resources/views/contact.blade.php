@extends('layouts.app')

@section('title', 'Kontak & Lokasi - Café Nusantara')

@section('content')
    <!-- Contact Header -->
    <section class="py-12 bg-sage text-white">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-5xl font-serif font-bold mb-4">Kontak & Lokasi</h1>
            <p class="text-xl max-w-3xl mx-auto">
                Temukan kami, hubungi kami, atau kunjungi langsung untuk pengalaman terbaik
            </p>
        </div>
    </section>

    <!-- Contact & Map -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Information -->
                <div>
                    <h2 class="text-3xl font-serif font-semibold text-wood mb-8">Informasi Kontak</h2>
                    
                    <div class="space-y-8">
                        <!-- Address -->
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-12 h-12 bg-sage/20 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-wood mb-2">Alamat</h3>
                                <p class="text-gray-600">
                                    Jl. Kemang Raya No. 12<br>
                                    Kemang, Jakarta Selatan<br>
                                    DKI Jakarta 12730
                                </p>
                            </div>
                        </div>
                        
                        <!-- Hours -->
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-12 h-12 bg-sage/20 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-wood mb-2">Jam Operasional</h3>
                                <div class="space-y-1 text-gray-600">
                                    <div class="flex justify-between">
                                        <span>Senin - Kamis</span>
                                        <span class="font-medium">08:00 - 22:00</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span>Jumat</span>
                                        <span class="font-medium">08:00 - 23:00</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span>Sabtu - Minggu</span>
                                        <span class="font-medium">07:00 - 23:00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Contact -->
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-12 h-12 bg-sage/20 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-wood mb-2">Kontak</h3>
                                <div class="space-y-1 text-gray-600">
                                    <p class="flex items-center">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                        </svg>
                                        Telepon: (021) 1234-5678
                                    </p>
                                    <p class="flex items-center">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                        </svg>
                                        Email: hello@cafenusantara.id
                                    </p>
                                    <p class="flex items-center">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                                        </svg>
                                        WhatsApp: 0812-3456-7890
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Social Media -->
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-12 h-12 bg-sage/20 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-wood mb-2">Media Sosial</h3>
                                <div class="flex space-x-4">
                                    <a href="#" class="w-10 h-10 bg-sage text-white rounded-full flex items-center justify-center hover:bg-wood transition">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                                        </svg>
                                    </a>
                                    <a href="#" class="w-10 h-10 bg-sage text-white rounded-full flex items-center justify-center hover:bg-wood transition">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                        </svg>
                                    </a>
                                    <a href="#" class="w-10 h-10 bg-sage text-white rounded-full flex items-center justify-center hover:bg-wood transition">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Reservation Note -->
                    <div class="mt-12 p-6 bg-cream rounded-2xl">
                        <h3 class="text-xl font-semibold text-wood mb-3">Untuk Reservasi</h3>
                        <p class="text-gray-600 mb-4">
                            Untuk reservasi meja atau acara khusus, silakan hubungi kami minimal 1 hari sebelumnya melalui WhatsApp atau telepon.
                        </p>
                        <a href="https://wa.me/6281234567890" 
                           target="_blank"
                           class="inline-flex items-center bg-green-600 text-white px-6 py-2 rounded-lg font-medium hover:bg-green-700 transition">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.76.982.998-3.677-.236-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.897 6.994c-.004 5.45-4.438 9.88-9.888 9.88m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.333.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.333 11.893-11.893 0-3.18-1.24-6.162-3.495-8.411"/>
                            </svg>
                            Reservasi via WhatsApp
                        </a>
                    </div>
                </div>
                
                <!-- Map & Contact Form -->
                <div class="space-y-8">
                    <!-- Map -->
                    <div class="bg-white rounded-2xl overflow-hidden shadow-lg">
                        <div class="h-96 bg-gray-200 relative">
                            <!-- Static Map Image -->
                            <img src="https://maps.googleapis.com/maps/api/staticmap?center=Jl.Kemang+Raya+No.12,Jakarta&zoom=15&size=600x400&scale=2&markers=color:red%7Clabel:C%7C-6.2649,106.824&key=YOUR_API_KEY" 
                                 alt="Map Location" 
                                 class="w-full h-full object-cover">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="bg-white p-6 rounded-xl shadow-lg text-center">
                                    <div class="w-12 h-12 bg-accent text-white rounded-full flex items-center justify-center mx-auto mb-3">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        </svg>
                                    </div>
                                    <p class="font-semibold text-wood">Café Nusantara</p>
                                    <p class="text-sm text-gray-600">Jl. Kemang Raya No. 12</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-wood mb-4">Akses Transportasi</h3>
                            <div class="space-y-2 text-gray-600">
                                <p>🚗 <span class="font-medium">Parkir:</span> Tersedia area parkir untuk 20 mobil</p>
                                <p>🛵 <span class="font-medium">Motor:</span> Area parkir motor di depan café</p>
                                <p>🚌 <span class="font-medium">Transjakarta:</span> Halte Kemang (10 menit jalan kaki)</p>
                                <p>🚇 <span class="font-medium">MRT:</span> Stasiun Blok M (15 menit dengan taksi)</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Contact Form -->
                    <div class="bg-white p-8 rounded-2xl shadow-lg">
                        <h3 class="text-2xl font-serif font-semibold text-wood mb-6">Kirim Pesan</h3>
                        
                        <form id="contactForm">
                            <div class="space-y-6">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                                    <input type="text" 
                                           id="name" 
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-sage focus:border-transparent"
                                           placeholder="Masukkan nama Anda">
                                </div>
                                
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                                    <input type="email" 
                                           id="email" 
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-sage focus:border-transparent"
                                           placeholder="nama@email.com">
                                </div>
                                
                                <div>
                                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Nomor Telepon</label>
                                    <input type="tel" 
                                           id="phone" 
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-sage focus:border-transparent"
                                           placeholder="08xxxxxxxxxx">
                                </div>
                                
                                <div>
                                    <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Subjek</label>
                                    <select id="subject" 
                                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-sage focus:border-transparent">
                                        <option value="">Pilih subjek</option>
                                        <option value="reservation">Reservasi Meja</option>
                                        <option value="catering">Catering Acara</option>
                                        <option value="feedback">Feedback & Saran</option>
                                        <option value="partnership">Kerja Sama</option>
                                        <option value="other">Lainnya</option>
                                    </select>
                                </div>
                                
                                <div>
                                    <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Pesan</label>
                                    <textarea id="message" 
                                              rows="4" 
                                              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-sage focus:border-transparent"
                                              placeholder="Tulis pesan Anda di sini..."></textarea>
                                </div>
                                
                                <button type="submit" 
                                        class="w-full bg-sage text-white py-3 rounded-lg font-medium hover:bg-wood transition">
                                    Kirim Pesan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 bg-cream">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-serif font-semibold text-wood mb-6">Pertanyaan Umum</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Temukan jawaban untuk pertanyaan yang sering diajukan tentang Café Nusantara
                </p>
            </div>
            
            <div class="max-w-3xl mx-auto">
                <div class="space-y-4">
                    <div class="bg-white rounded-xl p-6 shadow-md">
                        <button class="flex justify-between items-center w-full text-left" onclick="toggleFAQ(1)">
                            <span class="font-semibold text-lg text-wood">Apakah Café Nusantara menerima reservasi online?</span>
                            <svg id="faq-icon-1" class="w-5 h-5 text-sage transform rotate-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div id="faq-content-1" class="mt-4 text-gray-600 hidden">
                            Ya, kami menerima reservasi online melalui WhatsApp di nomor 0812-3456-7890. Silakan hubungi minimal 2 jam sebelum kedatangan untuk reservasi meja.
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-xl p-6 shadow-md">
                        <button class="flex justify-between items-center w-full text-left" onclick="toggleFAQ(2)">
                            <span class="font-semibold text-lg text-wood">Apakah ada menu khusus untuk vegetarian?</span>
                            <svg id="faq-icon-2" class="w-5 h-5 text-sage transform rotate-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div id="faq-content-2" class="mt-4 text-gray-600 hidden">
                            Tentu saja! Kami memiliki beberapa pilihan menu vegetarian, termasuk Gado-gado (tanpa telur), Sayur Lodeh, dan berbagai salad segar. Silakan informasikan kepada pelayan saat memesan.
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-xl p-6 shadow-md">
                        <button class="flex justify-between items-center w-full text-left" onclick="toggleFAQ(3)">
                            <span class="font-semibold text-lg text-wood">Apakah café menyediakan WiFi gratis?</span>
                            <svg id="faq-icon-3" class="w-5 h-5 text-sage transform rotate-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div id="faq-content-3" class="mt-4 text-gray-600 hidden">
                            Ya, kami menyediakan WiFi gratis untuk pelanggan. Password WiFi dapat ditanyakan kepada staf kami. Kecepatan internet kami cukup untuk meeting online dan browsing.
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-xl p-6 shadow-md">
                        <button class="flex justify-between items-center w-full text-left" onclick="toggleFAQ(4)">
                            <span class="font-semibold text-lg text-wood">Apakah café cocok untuk bekerja/meeting?</span>
                            <svg id="faq-icon-4" class="w-5 h-5 text-sage transform rotate-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div id="faq-content-4" class="mt-4 text-gray-600 hidden">
                            Sangat cocok! Kami memiliki area khusus untuk bekerja dengan stop kontak yang cukup. Untuk meeting kecil, kami juga menyediakan area semi-private yang dapat dipesan terlebih dahulu.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script>
    function toggleFAQ(id) {
        const content = document.getElementById(`faq-content-${id}`);
        const icon = document.getElementById(`faq-icon-${id}`);
        
        content.classList.toggle('hidden');
        icon.classList.toggle('rotate-180');
    }
    
    // Contact Form Submission
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Simple form validation
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const message = document.getElementById('message').value;
        
        if (!name || !email || !message) {
            alert('Harap isi semua field yang wajib diisi');
            return;
        }
        
        // Simulate form submission
        alert('Terima kasih! Pesan Anda telah dikirim. Kami akan menghubungi Anda dalam 1x24 jam.');
        this.reset();
    });
</script>
@endpush
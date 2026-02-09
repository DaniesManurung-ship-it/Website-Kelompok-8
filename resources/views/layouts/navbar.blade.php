<!-- Navigation -->
<nav class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <a href="{{ url('/') }}" class="flex items-center space-x-2">
                <div class="w-10 h-10 bg-sage rounded-full flex items-center justify-center">
                    <span class="text-white font-bold text-xl">CK
</span>
                </div>
                <span class="text-wood font-serif text-2xl font-semibold">Café Kopitiam33</span>
            </a>
            
            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-8">
                <a href="{{ url('/') }}" class="text-wood hover:text-accent font-medium transition">Dashboard</a>
                <a href="{{ url('/home') }}" class="text-wood hover:text-accent font-medium transition">Home</a>
                <a href="{{ url('/menu') }}" class="text-wood hover:text-accent font-medium transition">Menu</a>
                <a href="{{ url('/about') }}" class="text-wood hover:text-accent font-medium transition">Tentang</a>
                <a href="{{ url('/gallery') }}" class="text-wood hover:text-accent font-medium transition">Galeri</a>
                <a href="{{ url('/contact') }}" class="text-wood hover:text-accent font-medium transition">Kontak</a>
                
                @auth
                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open" class="flex items-center space-x-2 text-wood hover:text-accent font-medium transition">
                            <span>{{ Auth::user()->name }}</span>
                            <svg class="w-4 h-4" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div x-show="open" @click.away="open = false" 
                             class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg py-2 z-50">
                            <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition">
                                Admin Dashboard
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="block w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100 transition">
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>
                @else
                    <a href="{{ url('/login') }}" class="bg-sage text-white px-4 py-2 rounded-lg hover:bg-wood transition">
                        Login
                    </a>
                @endauth
            </div>
            
            <!-- Mobile Menu Button -->
            <button id="mobile-menu-button" class="md:hidden text-wood">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden py-4 border-t">
            <div class="flex flex-col space-y-4">
                <a href="{{ url('/') }}" class="text-wood hover:text-accent font-medium transition">Dashboard</a>
                <a href="{{ url('/home') }}" class="text-wood hover:text-accent font-medium transition">Home</a>
                <a href="{{ url('/menu') }}" class="text-wood hover:text-accent font-medium transition">Menu</a>
                <a href="{{ url('/about') }}" class="text-wood hover:text-accent font-medium transition">Tentang</a>
                <a href="{{ url('/gallery') }}" class="text-wood hover:text-accent font-medium transition">Galeri</a>
                <a href="{{ url('/contact') }}" class="text-wood hover:text-accent font-medium transition">Kontak</a>
                
                @auth
                    <div class="space-y-2">
                        <div class="px-2 py-1 text-sm text-gray-500">
                            Logged in as: {{ Auth::user()->name }}
                        </div>
                        <a href="{{ route('admin.dashboard') }}" class="block text-wood hover:text-accent font-medium transition">
                            Admin Dashboard
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="block w-full text-left text-wood hover:text-accent font-medium transition">
                                Logout
                            </button>
                        </form>
                    </div>
                @else
                    <a href="{{ url('/login') }}" class="bg-sage text-white px-4 py-2 rounded-lg hover:bg-wood transition text-center">
                        Login
                    </a>
                @endauth
            </div>
        </div>
    </div>
</nav>
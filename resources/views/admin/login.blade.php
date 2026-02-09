@extends('layouts.app')

@section('title', 'Admin Login - Café Nusantara')

@push('styles')
<style>
    .login-container {
        min-height: 100vh;
        background: linear-gradient(135deg, #F5EFE6 0%, #8BA888 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 1rem;
    }
    
    .login-card {
        background: white;
        border-radius: 20px;
        box-shadow: 0 20px 60px rgba(139, 168, 136, 0.3);
        width: 100%;
        max-width: 420px;
        overflow: hidden;
        position: relative;
    }
    
    .login-header {
        background: #8BA888;
        padding: 2.5rem 2rem;
        text-align: center;
        position: relative;
        overflow: hidden;
    }
    
    .login-header::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: linear-gradient(45deg, transparent 30%, rgba(255,255,255,0.1) 50%, transparent 70%);
        animation: shine 3s infinite;
    }
    
    @keyframes shine {
        0% { transform: translateX(-100%) translateY(-100%) rotate(45deg); }
        100% { transform: translateX(100%) translateY(100%) rotate(45deg); }
    }
    
    .logo-circle {
        width: 80px;
        height: 80px;
        background: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.5rem;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        position: relative;
        z-index: 1;
    }
    
    .logo-text {
        color: #8BA888;
        font-weight: bold;
        font-size: 2rem;
        font-family: 'Playfair Display', serif;
    }
    
    .login-body {
        padding: 2.5rem 2rem;
    }
    
    .form-group {
        margin-bottom: 1.5rem;
    }
    
    .form-input {
        width: 100%;
        padding: 1rem 1.25rem;
        border: 2px solid #E5E7EB;
        border-radius: 12px;
        font-size: 0.95rem;
        transition: all 0.3s ease;
        background: #F9FAFB;
    }
    
    .form-input:focus {
        outline: none;
        border-color: #8BA888;
        box-shadow: 0 0 0 3px rgba(139, 168, 136, 0.2);
        background: white;
    }
    
    .form-input.error {
        border-color: #EF4444;
    }
    
    .error-message {
        color: #EF4444;
        font-size: 0.85rem;
        margin-top: 0.5rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    
    .remember-group {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin: 1.5rem 0;
    }
    
    .custom-checkbox {
        width: 20px;
        height: 20px;
        border: 2px solid #D1D5DB;
        border-radius: 6px;
        cursor: pointer;
        position: relative;
        transition: all 0.3s ease;
    }
    
    .custom-checkbox.checked {
        background: #8BA888;
        border-color: #8BA888;
    }
    
    .custom-checkbox.checked::after {
        content: '✓';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        font-weight: bold;
    }
    
    .login-btn {
        width: 100%;
        padding: 1rem;
        background: linear-gradient(135deg, #8BA888 0%, #A67B5B 100%);
        color: white;
        border: none;
        border-radius: 12px;
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.75rem;
    }
    
    .login-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(139, 168, 136, 0.4);
    }
    
    .login-btn:active {
        transform: translateY(0);
    }
    
    .back-link {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        color: #6B7280;
        text-decoration: none;
        font-size: 0.9rem;
        margin-top: 2rem;
        transition: color 0.3s ease;
    }
    
    .back-link:hover {
        color: #8BA888;
    }
    
    .password-toggle {
        position: absolute;
        right: 1.25rem;
        top: 50%;
        transform: translateY(-50%);
        background: none;
        border: none;
        color: #9CA3AF;
        cursor: pointer;
        padding: 0.25rem;
    }
    
    .password-toggle:hover {
        color: #6B7280;
    }
    
    .password-wrapper {
        position: relative;
    }
    
    /* Success/Error States */
    .alert {
        padding: 1rem;
        border-radius: 12px;
        margin-bottom: 1.5rem;
        display: flex;
        align-items: flex-start;
        gap: 0.75rem;
        animation: slideDown 0.3s ease;
    }
    
    @keyframes slideDown {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .alert-error {
        background: #FEF2F2;
        border: 1px solid #FECACA;
        color: #991B1B;
    }
    
    .alert-success {
        background: #F0FDF4;
        border: 1px solid #BBF7D0;
        color: #166534;
    }
</style>
@endpush

@section('content')
<div class="login-container">
    <div class="login-card">
        <!-- Header -->
        <div class="login-header">
            <div class="logo-circle">
                <span class="logo-text">CK</span>
            </div>
            <h1 class="text-3xl font-serif font-bold text-white mb-2">Café Kopitiam33</h1>
            <p class="text-white/90 text-sm">Admin Panel</p>
        </div>
        
        <!-- Body -->
        <div class="login-body">
            @if($errors->any())
                <div class="alert alert-error">
                    <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <div>
                        <strong class="font-semibold">Login gagal</strong>
                        <p class="text-sm mt-1">{{ $errors->first() }}</p>
                    </div>
                </div>
            @endif
            
            @if(session('status'))
                <div class="alert alert-success">
                    <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                    <div>
                        <strong class="font-semibold">Berhasil!</strong>
                        <p class="text-sm mt-1">{{ session('status') }}</p>
                    </div>
                </div>
            @endif
            
            <form id="loginForm" action="{{ route('admin.login') }}" method="POST">
                @csrf
                
                <div class="form-group">
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Email
                    </label>
                    <input 
                        type="email" 
                        name="email" 
                        id="email" 
                        value="{{ old('email') }}"
                        class="form-input @error('email') error @enderror"
                        placeholder="admin@cafenusantara.id"
                        required
                        autofocus
                    >
                    @error('email')
                        <div class="error-message">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Password
                    </label>
                    <div class="password-wrapper">
                        <input 
                            type="password" 
                            name="password" 
                            id="password"
                            class="form-input @error('password') error @enderror"
                            placeholder="••••••••"
                            required
                        >
                        <button type="button" class="password-toggle" id="togglePassword">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                        </button>
                    </div>
                    @error('password')
                        <div class="error-message">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="remember-group">
                    <div 
                        class="custom-checkbox @if(old('remember')) checked @endif" 
                        id="rememberCheckbox"
                    ></div>
                    <input type="checkbox" name="remember" id="remember" class="hidden" @checked(old('remember'))>
                    <label for="remember" class="text-sm text-gray-600 cursor-pointer">
                        Ingat saya
                    </label>
                </div>
                
                <button type="submit" class="login-btn" id="submitBtn">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                    </svg>
                    <span>Masuk ke Dashboard</span>
                </button>
            </form>
            
            <div class="text-center">
                <a href="{{ url('/') }}" class="back-link">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    Kembali ke Halaman Utama
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Password Toggle
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');
        
        togglePassword.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            
            // Update icon
            this.innerHTML = type === 'password' ? `
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                </svg>
            ` : `
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.878 9.878L6.59 6.59m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"/>
                </svg>
            `;
        });
        
        // Custom Checkbox
        const rememberCheckbox = document.getElementById('rememberCheckbox');
        const rememberInput = document.getElementById('remember');
        
        rememberCheckbox.addEventListener('click', function() {
            rememberInput.checked = !rememberInput.checked;
            this.classList.toggle('checked');
        });
        
        // Form Validation & Loading State
        const loginForm = document.getElementById('loginForm');
        const submitBtn = document.getElementById('submitBtn');
        
        loginForm.addEventListener('submit', function(e) {
            const email = document.getElementById('email').value.trim();
            const password = document.getElementById('password').value.trim();
            
            if (!email || !password) {
                e.preventDefault();
                alert('Harap isi email dan password');
                return;
            }
            
            if (!isValidEmail(email)) {
                e.preventDefault();
                alert('Format email tidak valid');
                return;
            }
            
            // Show loading state
            submitBtn.innerHTML = `
                <svg class="w-5 h-5 animate-spin" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                </svg>
                <span>Memproses...</span>
            `;
            submitBtn.disabled = true;
        });
        
        function isValidEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }
        
        // Auto focus on email if empty
        if (!document.getElementById('email').value) {
            document.getElementById('email').focus();
        }
        
        // Smooth animations
        const loginCard = document.querySelector('.login-card');
        setTimeout(() => {
            loginCard.style.opacity = '1';
            loginCard.style.transform = 'translateY(0)';
        }, 100);
        
        loginCard.style.opacity = '0';
        loginCard.style.transform = 'translateY(20px)';
        loginCard.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
    });
</script>
@endpush
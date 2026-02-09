@extends('layouts.app')

@section('title', 'Dashboard Admin - Café Nusantara')

@push('styles')
<style>
    /* Professional Dashboard Grid System */
    .dashboard-grid {
        display: grid;
        gap: 1.5rem;
        grid-template-columns: repeat(1, 1fr);
    }
    
    @media (min-width: 768px) {
        .dashboard-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }
    
    @media (min-width: 1024px) {
        .dashboard-grid {
            grid-template-columns: repeat(4, 1fr);
        }
    }
    
    /* Clean Stats Cards */
    .stat-card {
        background: white;
        border: 1px solid #E5E7EB;
        border-radius: 12px;
        padding: 1.5rem;
        transition: all 0.2s ease;
        position: relative;
        overflow: hidden;
    }
    
    .stat-card:hover {
        border-color: #8BA888;
        box-shadow: 0 4px 12px rgba(139, 168, 136, 0.08);
    }
    
    .stat-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 3px;
        background: #8BA888;
    }
    
    .stat-icon {
        width: 48px;
        height: 48px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(139, 168, 136, 0.08);
        margin-bottom: 1rem;
    }
    
    /* Professional Tables */
    .data-table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
    }
    
    .data-table thead {
        background: #F9FAFB;
    }
    
    .data-table th {
        padding: 0.875rem 1rem;
        text-align: left;
        font-weight: 600;
        color: #374151;
        border-bottom: 1px solid #E5E7EB;
        font-size: 0.875rem;
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }
    
    .data-table td {
        padding: 1rem;
        border-bottom: 1px solid #F3F4F6;
        color: #4B5563;
        font-size: 0.875rem;
    }
    
    .data-table tbody tr {
        transition: background-color 0.15s ease;
    }
    
    .data-table tbody tr:hover {
        background-color: #F9FAFB;
    }
    
    /* Clean Status Badges */
    .status-badge {
        display: inline-flex;
        align-items: center;
        padding: 0.375rem 0.75rem;
        border-radius: 6px;
        font-size: 0.75rem;
        font-weight: 500;
        line-height: 1;
    }
    
    .status-badge.pending {
        background: #FEF3C7;
        color: #92400E;
    }
    
    .status-badge.completed {
        background: #D1FAE5;
        color: #065F46;
    }
    
    .status-badge.processing {
        background: #DBEAFE;
        color: #1E40AF;
    }
    
    /* Clean Layout Sections */
    .dashboard-section {
        background: white;
        border: 1px solid #E5E7EB;
        border-radius: 12px;
        padding: 1.5rem;
        margin-bottom: 1.5rem;
    }
    
    .section-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1.5rem;
        padding-bottom: 0.75rem;
        border-bottom: 1px solid #F3F4F6;
    }
    
    .section-title {
        font-size: 1.125rem;
        font-weight: 600;
        color: #111827;
    }
    
    /* Clean Quick Actions */
    .action-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 1rem;
        margin-top: 1.5rem;
    }
    
    .action-button {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 1.5rem 1rem;
        background: white;
        border: 1px solid #E5E7EB;
        border-radius: 8px;
        transition: all 0.2s ease;
        text-align: center;
        cursor: pointer;
    }
    
    .action-button:hover {
        border-color: #8BA888;
        background: #F9FAFB;
        transform: translateY(-2px);
    }
    
    .action-icon {
        width: 40px;
        height: 40px;
        border-radius: 8px;
        background: rgba(139, 168, 136, 0.1);
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 0.75rem;
    }
    
    /* Clean Progress Bars */
    .progress-bar {
        height: 6px;
        background: #E5E7EB;
        border-radius: 3px;
        overflow: hidden;
        margin-top: 0.5rem;
    }
    
    .progress-fill {
        height: 100%;
        background: #8BA888;
        border-radius: 3px;
        transition: width 0.3s ease;
    }
    
    /* Clean Empty States */
    .empty-state {
        text-align: center;
        padding: 3rem 1rem;
        color: #6B7280;
    }
    
    .empty-state-icon {
        width: 48px;
        height: 48px;
        margin: 0 auto 1rem;
        color: #D1D5DB;
    }
    
    /* Clean Scrollbar */
    .scrollable-table {
        max-height: 400px;
        overflow-y: auto;
    }
    
    .scrollable-table::-webkit-scrollbar {
        width: 6px;
    }
    
    .scrollable-table::-webkit-scrollbar-track {
        background: #F3F4F6;
        border-radius: 3px;
    }
    
    .scrollable-table::-webkit-scrollbar-thumb {
        background: #9CA3AF;
        border-radius: 3px;
    }
    
    /* Dashboard Layout Structure */
    .main-content {
        max-width: 1200px;
        margin: 0 auto;
        padding: 2rem 1rem;
    }
    
    /* Responsive Adjustments */
    @media (max-width: 640px) {
        .main-content {
            padding: 1rem 0.5rem;
        }
        
        .dashboard-section {
            padding: 1rem;
        }
        
        .section-header {
            flex-direction: column;
            align-items: flex-start;
            gap: 0.5rem;
        }
    }
</style>
@endpush

@section('content')
<!-- Dashboard Header -->
<header class="bg-white border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-4">
            <div>
                <h1 class="text-2xl font-semibold text-gray-900">Dashboard</h1>
                <p class="text-sm text-gray-600 mt-1">Selamat datang kembali, Admin</p>
            </div>
            <div class="flex items-center space-x-4">
                <div class="text-right">
                    <div class="text-sm font-medium text-gray-900">Admin</div>
                    <div class="text-xs text-gray-500">Super Admin</div>
                </div>
                <div class="w-10 h-10 bg-gradient-to-br from-sage to-wood rounded-full flex items-center justify-center">
                    <span class="text-white font-medium text-sm">A</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Dashboard Content -->
<main class="main-content">
    <!-- Stats Overview -->
    <section class="mb-8">
        <h2 class="text-lg font-semibold text-gray-900 mb-4">Overview</h2>
        <div class="dashboard-grid">
            <!-- Revenue Card -->
            <div class="stat-card">
                <div class="stat-icon">
                    <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <div class="text-2xl font-semibold text-gray-900">Rp 12.8M</div>
                <div class="text-sm text-gray-600 mt-1">Total Revenue</div>
                <div class="flex items-center mt-2">
                    <span class="text-green-600 text-sm font-medium">+12.5%</span>
                    <span class="text-gray-500 text-sm ml-2">from last month</span>
                </div>
            </div>
            
            <!-- Orders Card -->
            <div class="stat-card">
                <div class="stat-icon">
                    <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                    </svg>
                </div>
                <div class="text-2xl font-semibold text-gray-900">156</div>
                <div class="text-sm text-gray-600 mt-1">Today's Orders</div>
                <div class="flex items-center mt-2">
                    <span class="text-green-600 text-sm font-medium">+8.2%</span>
                    <span class="text-gray-500 text-sm ml-2">from yesterday</span>
                </div>
            </div>
            
            <!-- Menu Items Card -->
            <div class="stat-card">
                <div class="stat-icon">
                    <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                    </svg>
                </div>
                <div class="text-2xl font-semibold text-gray-900">42</div>
                <div class="text-sm text-gray-600 mt-1">Active Menu Items</div>
                <div class="text-gray-500 text-sm mt-2">3 new this week</div>
            </div>
            
            <!-- Customers Card -->
            <div class="stat-card">
                <div class="stat-icon">
                    <svg class="w-6 h-6 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <div class="text-2xl font-semibold text-gray-900">24</div>
                <div class="text-sm text-gray-600 mt-1">New Customers</div>
                <div class="flex items-center mt-2">
                    <span class="text-green-600 text-sm font-medium">+18%</span>
                    <span class="text-gray-500 text-sm ml-2">growth</span>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Recent Orders & Activity -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Recent Orders -->
        <div class="lg:col-span-2">
            <div class="dashboard-section">
                <div class="section-header">
                    <h2 class="section-title">Recent Orders</h2>
                    <a href="#" class="text-sm font-medium text-sage hover:text-wood">View All →</a>
                </div>
                
                <div class="scrollable-table">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Customer</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach([
                                ['id' => 'ORD-8472', 'customer' => 'Sarah Johnson', 'amount' => 'Rp 125,000', 'status' => 'completed', 'time' => '10:30 AM'],
                                ['id' => 'ORD-8471', 'customer' => 'Michael Chen', 'amount' => 'Rp 89,500', 'status' => 'processing', 'time' => '10:15 AM'],
                                ['id' => 'ORD-8470', 'customer' => 'Lisa Wang', 'amount' => 'Rp 156,000', 'status' => 'pending', 'time' => '9:45 AM'],
                                ['id' => 'ORD-8469', 'customer' => 'David Miller', 'amount' => 'Rp 67,800', 'status' => 'completed', 'time' => '9:20 AM'],
                                ['id' => 'ORD-8468', 'customer' => 'Emma Davis', 'amount' => 'Rp 98,200', 'status' => 'pending', 'time' => '8:55 AM'],
                            ] as $order)
                            <tr>
                                <td class="font-medium text-gray-900">{{ $order['id'] }}</td>
                                <td>{{ $order['customer'] }}</td>
                                <td class="font-medium">{{ $order['amount'] }}</td>
                                <td>
                                    <span class="status-badge {{ $order['status'] }}">
                                        @if($order['status'] == 'completed')
                                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                            </svg>
                                            Completed
                                        @elseif($order['status'] == 'processing')
                                            <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                                            </svg>
                                            Processing
                                        @else
                                            Pending
                                        @endif
                                    </span>
                                </td>
                                <td class="text-gray-500">{{ $order['time'] }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <!-- Quick Actions -->
        <div>
            <div class="dashboard-section">
                <h2 class="section-title mb-6">Quick Actions</h2>
                
                <div class="action-grid">
                    <button class="action-button">
                        <div class="action-icon">
                            <svg class="w-5 h-5 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                            </svg>
                        </div>
                        <span class="text-sm font-medium text-gray-900">Add Menu</span>
                        <span class="text-xs text-gray-500 mt-1">New dish</span>
                    </button>
                    
                    <button class="action-button">
                        <div class="action-icon">
                            <svg class="w-5 h-5 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <span class="text-sm font-medium text-gray-900">Upload Photo</span>
                        <span class="text-xs text-gray-500 mt-1">Gallery</span>
                    </button>
                    
                    <button class="action-button">
                        <div class="action-icon">
                            <svg class="w-5 h-5 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                            </svg>
                        </div>
                        <span class="text-sm font-medium text-gray-900">Categories</span>
                        <span class="text-xs text-gray-500 mt-1">Manage</span>
                    </button>
                    
                    <button class="action-button">
                        <div class="action-icon">
                            <svg class="w-5 h-5 text-sage" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                            </svg>
                        </div>
                        <span class="text-sm font-medium text-gray-900">Settings</span>
                        <span class="text-xs text-gray-500 mt-1">System</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- System Status & Stock -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-6">
        <!-- System Status -->
        <div class="dashboard-section">
            <h2 class="section-title mb-6">System Status</h2>
            
            <div class="space-y-4">
                @foreach([
                    ['name' => 'Website', 'status' => 'Online', 'color' => 'green'],
                    ['name' => 'Database', 'status' => 'Connected', 'color' => 'green'],
                    ['name' => 'Payment Gateway', 'status' => 'Active', 'color' => 'green'],
                    ['name' => 'Storage', 'status' => '1.2 GB / 10 GB', 'color' => 'blue', 'percentage' => 12],
                    ['name' => 'Last Backup', 'status' => '24 hours ago', 'color' => 'gray'],
                ] as $system)
                <div class="flex justify-between items-center py-2">
                    <div class="flex items-center">
                        <div class="w-2 h-2 rounded-full mr-3 
                            @if($system['color'] == 'green') bg-green-500
                            @elseif($system['color'] == 'blue') bg-blue-500
                            @else bg-gray-400
                            @endif">
                        </div>
                        <span class="text-sm text-gray-700">{{ $system['name'] }}</span>
                    </div>
                    <span class="text-sm font-medium 
                        @if($system['color'] == 'green') text-green-600
                        @elseif($system['color'] == 'blue') text-blue-600
                        @else text-gray-600
                        @endif">
                        {{ $system['status'] }}
                    </span>
                </div>
                @if(isset($system['percentage']))
                <div class="progress-bar">
                    <div class="progress-fill" style="width: {{ $system['percentage'] }}%"></div>
                </div>
                @endif
                @endforeach
            </div>
            
            <div class="mt-6 pt-4 border-t border-gray-200">
                <div class="text-xs text-gray-500">Last updated: {{ date('d M Y, H:i') }}</div>
            </div>
        </div>
        
        <!-- Stock Alerts -->
        <div class="dashboard-section">
            <div class="section-header">
                <h2 class="section-title">Stock Alerts</h2>
                <a href="#" class="text-sm font-medium text-sage hover:text-wood">Manage →</a>
            </div>
            
            <div class="space-y-4">
                @foreach([
                    ['item' => 'Coffee Beans', 'stock' => 'Low', 'percentage' => 15, 'color' => 'yellow'],
                    ['item' => 'Peanut Sauce', 'stock' => 'Critical', 'percentage' => 8, 'color' => 'red'],
                    ['item' => 'Chicken Breast', 'stock' => 'Medium', 'percentage' => 35, 'color' => 'blue'],
                    ['item' => 'Rice', 'stock' => 'Good', 'percentage' => 65, 'color' => 'green'],
                ] as $stock)
                <div>
                    <div class="flex justify-between text-sm mb-1">
                        <span class="text-gray-700">{{ $stock['item'] }}</span>
                        <span class="font-medium 
                            @if($stock['color'] == 'red') text-red-600
                            @elseif($stock['color'] == 'yellow') text-yellow-600
                            @elseif($stock['color'] == 'blue') text-blue-600
                            @else text-green-600
                            @endif">
                            {{ $stock['stock'] }}
                        </span>
                    </div>
                    <div class="progress-bar">
                        <div class="progress-fill 
                            @if($stock['color'] == 'red') bg-red-500
                            @elseif($stock['color'] == 'yellow') bg-yellow-500
                            @elseif($stock['color'] == 'blue') bg-blue-500
                            @else bg-green-500
                            @endif" 
                            style="width: {{ $stock['percentage'] }}%">
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    
    <!-- Popular Items -->
    <div class="dashboard-section mt-6">
        <div class="section-header">
            <h2 class="section-title">Popular Menu Items</h2>
            <a href="#" class="text-sm font-medium text-sage hover:text-wood">View All →</a>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            @foreach([
                ['name' => 'Lotek Perkedel', 'orders' => 156, 'color' => 'sage'],
                ['name' => 'Nasi Goreng Spesial', 'orders' => 142, 'color' => 'wood'],
                ['name' => 'Soto Ayam', 'orders' => 128, 'color' => 'accent'],
                ['name' => 'Kopi Tubruk', 'orders' => 115, 'color' => 'sage'],
            ] as $item)
            <div class="bg-gray-50 rounded-lg p-4 border border-gray-200">
                <div class="flex items-center mb-3">
                    <div class="w-10 h-10 rounded-lg mr-3 bg-{{ $item['color'] }}/10 flex items-center justify-center">
                        <svg class="w-5 h-5 text-{{ $item['color'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                        </svg>
                    </div>
                    <div class="flex-1">
                        <div class="font-medium text-gray-900">{{ $item['name'] }}</div>
                        <div class="text-sm text-gray-500">{{ $item['orders'] }} orders</div>
                    </div>
                </div>
                <div class="progress-bar">
                    <div class="progress-fill" style="width: {{ ($item['orders'] / 156) * 100 }}%"></div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</main>

<!-- Footer -->
<footer class="bg-white border-t border-gray-200 py-4">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center">
            <div class="text-sm text-gray-500">
                Café Nusantara Admin Panel v1.0
            </div>
            <div class="text-sm text-gray-500">
                © {{ date('Y') }} Café Nusantara. All rights reserved.
            </div>
        </div>
    </div>
</footer>
@endsection

@push('scripts')
<script>
    // Dashboard functionality
    document.addEventListener('DOMContentLoaded', function() {
        // Update time display
        function updateTime() {
            const timeElement = document.querySelector('.last-updated');
            if (timeElement) {
                const now = new Date();
                const options = { 
                    day: '2-digit', 
                    month: 'short', 
                    year: 'numeric',
                    hour: '2-digit',
                    minute: '2-digit'
                };
                timeElement.textContent = now.toLocaleDateString('en-US', options);
            }
        }
        
        // Initial update
        updateTime();
        
        // Update every minute
        setInterval(updateTime, 60000);
        
        // Quick actions functionality
        const actionButtons = document.querySelectorAll('.action-button');
        actionButtons.forEach(button => {
            button.addEventListener('click', function() {
                const actionName = this.querySelector('.text-gray-900').textContent;
                
                // Show loading state
                const originalHTML = this.innerHTML;
                this.innerHTML = `
                    <div class="flex items-center justify-center">
                        <div class="w-4 h-4 border-2 border-sage border-t-transparent rounded-full animate-spin"></div>
                    </div>
                `;
                
                // Simulate API call
                setTimeout(() => {
                    alert(`Opening ${actionName} feature...`);
                    this.innerHTML = originalHTML;
                }, 500);
            });
        });
        
        // Table row click functionality
        const tableRows = document.querySelectorAll('.data-table tbody tr');
        tableRows.forEach(row => {
            row.addEventListener('click', function() {
                const orderId = this.querySelector('td:first-child').textContent;
                
                // Add active state
                tableRows.forEach(r => r.classList.remove('bg-blue-50'));
                this.classList.add('bg-blue-50');
                
                // Show order details (simulated)
                setTimeout(() => {
                    console.log(`Viewing details for ${orderId}`);
                }, 100);
            });
        });
        
        // Status badge hover effects
        const statusBadges = document.querySelectorAll('.status-badge');
        statusBadges.forEach(badge => {
            badge.addEventListener('mouseenter', function() {
                this.style.transform = 'scale(1.02)';
                this.style.transition = 'transform 0.2s ease';
            });
            
            badge.addEventListener('mouseleave', function() {
                this.style.transform = 'scale(1)';
            });
        });
        
        // Simulate real-time data updates
        function simulateDataUpdates() {
            const stats = document.querySelectorAll('.stat-card .text-2xl');
            stats.forEach(stat => {
                const originalValue = parseInt(stat.textContent.replace(/[^0-9]/g, ''));
                if (Math.random() > 0.7) { // 30% chance of update
                    const newValue = originalValue + Math.floor(Math.random() * 5);
                    stat.textContent = stat.textContent.replace(originalValue, newValue);
                    
                    // Add subtle animation
                    stat.style.color = '#10B981'; // green
                    setTimeout(() => {
                        stat.style.color = '#111827'; // original color
                    }, 1000);
                }
            });
        }
        
        // Update data every 30 seconds
        setInterval(simulateDataUpdates, 30000);
        
        // Initialize tooltips (if any)
        const tooltipElements = document.querySelectorAll('[title]');
        tooltipElements.forEach(element => {
            element.addEventListener('mouseenter', function(e) {
                // Simple tooltip implementation
                const tooltip = document.createElement('div');
                tooltip.className = 'absolute z-10 px-2 py-1 text-xs bg-gray-900 text-white rounded shadow-lg';
                tooltip.textContent = this.getAttribute('title');
                tooltip.style.left = e.pageX + 'px';
                tooltip.style.top = (e.pageY - 30) + 'px';
                document.body.appendChild(tooltip);
                
                this._tooltip = tooltip;
            });
            
            element.addEventListener('mouseleave', function() {
                if (this._tooltip) {
                    this._tooltip.remove();
                    this._tooltip = null;
                }
            });
        });
    });
</script>
@endpush
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Admin Panel') - Apvr Infotech</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            min-height: 100vh;
            background-color: #13114C;
            color: white;
            padding: 20px 0;
        }
        .sidebar .nav-link {
            color: rgba(255, 255, 255, 0.8);
            padding: 12px 20px;
            transition: all 0.3s;
        }
        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            color: white;
            background-color: rgba(255, 255, 255, 0.1);
        }
        .main-content {
            padding: 30px;
        }
        .page-header {
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 2px solid #dee2e6;
        }
    </style>
    @stack('styles')
</head>
<body>
    <div class="min-h-screen bg-gray-100">
        <div class="flex">
            <!-- Sidebar -->
            <aside class="sidebar w-64 bg-[#13114C] text-white p-5 hidden md:block">
                <div class="text-center mb-6">
                    <h4 class="text-xl font-semibold">Apvr Infotech</h4>
                    <p class="text-xs text-white/70">Admin Panel</p>
                </div>
                <nav class="flex flex-col gap-2">
                    <a class="px-4 py-2 rounded hover:bg-white/10 transition {{ request()->routeIs('admin.contacts.*') ? 'bg-white/10' : '' }}" href="{{ route('admin.contacts.index') }}">
                        <i class="fas fa-envelope mr-2"></i> Contacts
                    </a>
                    <a class="px-4 py-2 rounded hover:bg-white/10 transition {{ request()->routeIs('admin.portfolios.*') ? 'bg-white/10' : '' }}" href="{{ route('admin.portfolios.index') }}">
                        <i class="fas fa-briefcase mr-2"></i> Portfolio
                    </a>
                    <a class="px-4 py-2 rounded hover:bg-white/10 transition {{ request()->routeIs('admin.careers.*') ? 'bg-white/10' : '' }}" href="{{ route('admin.careers.index') }}">
                        <i class="fas fa-user-tie mr-2"></i> Career
                    </a>
                    <a class="px-4 py-2 rounded hover:bg-white/10 transition" href="{{ url('/') }}" target="_blank">
                        <i class="fas fa-home mr-2"></i> View Site
                    </a>
                    <div class="mt-6 pt-6 border-t border-white/10">
                        <form action="{{ route('admin.logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="w-full text-left px-4 py-2 rounded hover:bg-white/10 transition">
                                <i class="fas fa-sign-out-alt mr-2"></i> Logout
                            </button>
                        </form>
                    </div>
                </nav>
            </aside>

            <!-- Main Content -->
            <main class="flex-1 p-6">
                @if(session('success'))
                    <div class="mb-4 rounded border border-green-300 bg-green-50 text-green-800 px-4 py-3">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="mb-4 rounded border border-red-300 bg-red-50 text-red-800 px-4 py-3">
                        {{ session('error') }}
                    </div>
                @endif

                @yield('content')
            </main>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    @stack('scripts')
</body>
</html>


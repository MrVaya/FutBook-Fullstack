<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Futsal Booking - Admin Dashboard</title>

    <!-- Custom fonts -->
    <link href="{{ asset('backend/fonts/themify-icons/themify-icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/css/tailwind.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/custom.css') }}" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="flex h-screen bg-gray-100">
        <!-- Sidebar -->
        <div class="hidden md:flex md:flex-shrink-0">
            <div class="flex flex-col w-64">
                <div class="flex flex-col flex-grow pt-5 overflow-y-auto bg-white border-r">
                    <div class="flex items-center flex-shrink-0 px-4">
                        <img class="h-8 w-auto" src="{{ asset('Asset/image/logo.png') }}" alt="Futsal Booking">
                        <span class="ml-2 text-xl font-semibold">Futsal Admin</span>
                    </div>
                    <div class="mt-5 flex-grow flex flex-col">
                        <nav class="flex-1 px-2 pb-4 space-y-1">
                            <a href="{{ route('dashboard') }}" class="group flex items-center px-2 py-2 text-sm font-medium rounded-md {{ request()->routeIs('dashboard') ? 'bg-gray-100 text-gray-900' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }}">
                                <i class="ti-dashboard mr-3 text-gray-400 group-hover:text-gray-500"></i>
                                Dashboard
                            </a>

                            <a href="{{ route('futsals.index') }}" class="group flex items-center px-2 py-2 text-sm font-medium rounded-md {{ request()->routeIs('futsals.*') ? 'bg-gray-100 text-gray-900' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }}">
                                <i class="ti-futbol mr-3 text-gray-400 group-hover:text-gray-500"></i>
                                Futsals
                            </a>

                            <a href="{{ route('bookings.index') }}" class="group flex items-center px-2 py-2 text-sm font-medium rounded-md {{ request()->routeIs('bookings.*') ? 'bg-gray-100 text-gray-900' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }}">
                                <i class="ti-calendar mr-3 text-gray-400 group-hover:text-gray-500"></i>
                                Bookings
                            </a>

                            <a href="{{ route('users.index') }}" class="group flex items-center px-2 py-2 text-sm font-medium rounded-md {{ request()->routeIs('users.*') ? 'bg-gray-100 text-gray-900' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }}">
                                <i class="ti-user mr-3 text-gray-400 group-hover:text-gray-500"></i>
                                Users
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <div class="flex flex-col w-0 flex-1 overflow-hidden">
            <div class="md:hidden pl-1 pt-1 sm:pl-3 sm:pt-3">
                <button type="button" class="-ml-0.5 -mt-0.5 h-12 w-12 inline-flex items-center justify-center rounded-md text-gray-500 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                    <span class="sr-only">Open sidebar</span>
                    <i class="ti-menu"></i>
                </button>
            </div>
            <main class="flex-1 relative z-0 overflow-y-auto focus:outline-none">
                <div class="py-6">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                        @yield('content')
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('backend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/js/tailwind.min.js') }}"></script>
    <script src="{{ asset('backend/js/custom.js') }}"></script>
    @stack('scripts')
</body>
</html> 
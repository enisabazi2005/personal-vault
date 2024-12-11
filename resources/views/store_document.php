<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store your Documents</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.3/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.flyonui.com/fy-assets/css/main.css" rel="stylesheet">
    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/ripple.js"></script>
    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/ripple.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../path/to/apexcharts/apexcharts.css" />
    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.21/lodash.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/ripple.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


    <!-- Font Awesome Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css" />
    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/script-name.js"></script>
    <link rel="stylesheet" href="{{ asset('node_modules/apexcharts/dist/apexcharts.css') }}" />
</head>
<body>
<script src="{{ asset('node_modules/lodash/lodash.js') }}"></script>
    <script src="{{ asset('node_modules/apexcharts/dist/apexcharts.js') }}"></script>
    <script src="{{ asset('js/apexcharts-helper.js') }}"></script>
    <section class="section-1">
        <div class="flex h-screen">
            <!-- Sidebar -->
            <aside class="fixed top-0 left-0 w-64 h-full bg-gray-800 text-white shadow-lg">
                <div class="flex flex-col h-full">
                    <!-- Logo -->
                    <div class="p-4 text-lg font-bold bg-gray-900">
                        Vaulter
                    </div>
                    <!-- Navigation -->
                    <nav class="flex-1 overflow-y-auto">
                        <ul class="space-y-2 mt-4">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-700 rounded-lg">
                                    Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-700 rounded-lg">
                                    Analytics
                                </a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-700 rounded-lg">
                                    Store Password
                                </a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-700 rounded-lg">
                                    Store Documents
                                </a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-700 rounded-lg">
                                    Store Information
                                </a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-700 rounded-lg">
                                    Store Secret Keys
                                </a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-700 rounded-lg">
                                    Store Private Address
                                </a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-700 rounded-lg">
                                    Store Bank Details
                                </a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-700 rounded-lg">
                                    Settings
                                </a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-700 rounded-lg">
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>
		<div class="flex-1 ml-64">
			        <header class="fixed top-0 right-0 left-64 h-16 bg-white shadow flex items-center justify-between px-10 mt-4 pb-4 z-10">

                    <!-- Breadcrumb or Title -->
                    <h1 class="text-xl font-semibold text-gray-800">Dashboard</h1>

                    <!-- Header Actions -->
                    <div class="flex items-center gap-4">
                        <!-- Notification Dropdown -->
                        <div class="relative">
                            <button id="notificationDropdown" class="relative w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center hover:bg-gray-200">
                                <span class="absolute top-1 right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                                <svg class="w-6 h-6 text-gray-800" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V4a2 2 0 10-4 0v1.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0a3 3 0 01-6 0m6 0H9" />
                                </svg>
                            </button>
                        </div>

                        <!-- Profile Dropdown -->
                        <div class="relative group">
                            <button id="profileDropdown" class="flex flex-col items-center gap-0 focus:outline-none">
                                <img src="https://cdn.flyonui.com/fy-assets/avatar/avatar-1.png" alt="User Avatar" class="w-10 h-10 rounded-full">
                                <p class="text-sm text-gray-700 mt-1">{{ $vaultUser->name }}</p><!-- Replace this with dynamic user name -->
                            </button>
                          
                            <!-- Dropdown Menu -->
                            <div class="absolute hidden group-hover:block bg-white text-gray-700 shadow-md border border-gray-200 rounded-lg left-[-115px] mt-[0.5px] w-48 p-2">
                                <ul class="space-y-2">
                                    <li>
                                        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100 rounded">Profile</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100 rounded">Settings</a>
                                    </li>
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit" class="block px-4 py-2 text-sm hover:bg-gray-100 rounded w-full text-left">
                                                Logout
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </header>
  <main class="mt-16 p-4">
                    <div class="bg-white shadow rounded-lg p-6 mt-5">
                        <h2 class="text-lg font-bold">Welcome to Vaulter Dashboard</h2>
                        <p class="text-gray-600 mt-2">Start managing your projects efficiently.</p>
                    </div>
			Content goes there
                </main>
		</div>
	        </div>
    </section>
 <script type="module" src="https://unpkg.com/@material-tailwind/html@latest/scripts/popover.js"></script>



    <script>
            const token = '{{ session('token') }}'; // Get token from session data passed by controller

if (token) {
    // Store the token in localStorage
    localStorage.setItem('token', token);
}

// Optional: Check if the token exists and is valid when the page loads
if (!localStorage.getItem('token')) {
    // Redirect to login if the token is missing (meaning user is logged out)
    window.location.href = '/login';
}

// Optional: Handle logout when the user manually clears localStorage
window.addEventListener('storage', function(e) {
    if (e.key === 'token' && !e.newValue) {
        // If the token is removed from localStorage, logout the user
        window.location.href = '/login'; // Redirect to login page
    }
});

// In your dashboard page, you can add a check for expiration.
const tokenTime = localStorage.getItem('tokenTime');

if (token && tokenTime && Date.now() - tokenTime > 3600000) {
    // Token expired, log out the user
    localStorage.removeItem('token');
    localStorage.removeItem('tokenTime');
    window.location.href = '/login'; // Redirect to login page
}

// Set the token time when storing the token
localStorage.setItem('tokenTime', Date.now());
    </script>
</body>
</html>
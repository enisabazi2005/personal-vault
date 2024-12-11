<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Store Password</title>
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
                        <a href="/dashboard">
                            Vaulter
                        </a>
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
                                <a href="/logout" class="block px-4 py-2 hover:bg-gray-700 rounded-lg">
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>
            <div class="flex-1 ml-64">
                <header
                    class="fixed top-0 right-0 left-64 h-16 bg-white shadow flex items-center justify-between px-10 mt-4 pb-4 z-10">

                    <!-- Breadcrumb or Title -->
                    <h1 class="text-xl font-semibold text-gray-800">Dashboard</h1>

                    <!-- Header Actions -->
                    <div class="flex items-center gap-4">
                        <!-- Notification Dropdown -->
                        <div class="relative">
                            <button id="notificationDropdown"
                                class="relative w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center hover:bg-gray-200">
                                <span class="absolute top-1 right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                                <svg class="w-6 h-6 text-gray-800" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V4a2 2 0 10-4 0v1.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0a3 3 0 01-6 0m6 0H9" />
                                </svg>
                            </button>
                        </div>

                        <!-- Profile Dropdown -->
                        <div class="relative group">
                            <button id="profileDropdown" class="flex flex-col items-center gap-0 focus:outline-none">
                                <img src="https://cdn.flyonui.com/fy-assets/avatar/avatar-1.png" alt="User Avatar"
                                    class="w-10 h-10 rounded-full">
                                <p class="text-sm text-gray-700 mt-1">{{ $vaultUser->name }}</p>
                                <!-- Replace this with dynamic user name -->
                            </button>

                            <!-- Dropdown Menu -->
                            <div
                                class="absolute hidden group-hover:block bg-white text-gray-700 shadow-md border border-gray-200 rounded-lg left-[-115px] mt-[0.5px] w-48 p-2">
                                <ul class="space-y-2">
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 text-sm hover:bg-gray-100 rounded">Profile</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 text-sm hover:bg-gray-100 rounded">Settings</a>
                                    </li>
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit"
                                                class="block px-4 py-2 text-sm hover:bg-gray-100 rounded w-full text-left">
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
                    <div class="relative pt-10">
                        <label for="modal-toggle"
                            class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 cursor-pointer">
                            Store your Password
                        </label>

                        <!-- Hidden Checkbox for Modal State -->
                        <input type="checkbox" id="modal-toggle" class="hidden peer" />

                        <!-- Modal Backdrop -->
                        <div
                            class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center opacity-0 peer-checked:opacity-100 z-10 pointer-events-none peer-checked:pointer-events-auto transition-opacity">
                            <!-- Modal Content -->
                            <div
                                class="bg-white rounded-lg shadow-lg w-full max-w-lg mx-4 p-6 transform scale-95 peer-checked:scale-100 transition-transform">
                                <!-- Modal Header -->
                                <div class="flex justify-between items-center border-b pb-3">
                                    <h3 class="text-lg font-semibold">Store your Password</h3>
                                    <!-- Close Modal -->
                                    <label for="modal-toggle" class="text-gray-500 hover:text-gray-700 cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </label>
                                </div>

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif


                                <!-- Modal Body -->
                                <form id="passwordStoreForm" method="POST" action="{{ route('storepassword') }}">
                                    @csrf
                                    <div class="space-y-4">
                                        <!-- Title of Password -->
                                        <div>
                                            <label for="passwordTitle"
                                                class="block text-sm font-medium text-gray-700">Title
                                                (optional)</label>
                                            <input type="text" id="passwordTitle" name="title"
                                                class="block w-full px-4 py-2 mt-1 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                        </div>
                                        <!-- Password -->
                                        <div>
                                            <label for="password"
                                                class="block text-sm font-medium text-gray-700">Password</label>
                                            <input type="password" id="password" name="password"
                                                class="block w-full px-4 py-2 mt-1 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                            <p id="passwordError" class="text-red-500 text-sm hidden"></p>
                                        </div>
                                        <!-- Confirm Password -->
                                        <div>
                                            <label for="confirmPassword"
                                                class="block text-sm font-medium text-gray-700">Confirm
                                                Password</label>
                                            <input type="password" id="confirmPassword" name="password_confirmation"
                                                class="block w-full px-4 py-2 mt-1 border rounded-md">
                                            <p id="confirmPasswordError" class="text-red-500 text-sm hidden"></p>
                                        </div>
                                    </div>
                                    <!-- Modal Footer -->
                                    <div class="flex justify-end mt-4 space-x-3">
                                        <label for="modal-toggle"
                                            class="bg-gray-200 text-gray-700 px-4 py-2 rounded-md hover:bg-gray-300 cursor-pointer">
                                            Close
                                        </label>
                                        <button type="submit"
                                            class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                                            Save changes
                                        </button>
                                    </div>
                                </form>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="bg-white shadow rounded-lg p-6 mt-10">
                        {{-- Check if passwords are available --}}
                        @if ($passwordStores->isEmpty())
                            <p>No Stored Passwords found</p>
                        @else
                            <div class="grid grid-cols-5 gap-10 mt-3">
                                @foreach ($passwordStores as $password)
                                    <div class="text-center w-max">
                                        <!-- Button to trigger the modal for each password -->
                                        <label for="modal-toggle-1"
                                            class="bg-blue-500 text-white px-10 py-4 rounded cursor-pointer">
                                            @if ($password->title)
                                                {{ $password->title }}
                                            @else
                                                Password-{{ $loop->index + 1 }}
                                            @endif
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>

                    {{-- Modals for each password --}}
                    @foreach ($passwordStores as $password)
                        <!-- Hidden Checkbox for Modal State -->
                        <input type="checkbox" id="modal-toggle-1" class="hidden peer" />

                        <!-- Modal Backdrop -->
                        <div
                            class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center opacity-0 peer-checked:opacity-100 z-10 pointer-events-none peer-checked:pointer-events-auto transition-opacity">
                            <!-- Modal Content -->
                            <div
                                class="bg-white rounded-lg shadow-lg w-full max-w-lg mx-4 p-6 transform scale-95 peer-checked:scale-100 transition-transform">
                                <!-- Modal Header -->
                                <div class="flex justify-between items-center border-b pb-3">
                                    <h3 class="text-lg font-semibold">
                                        {{ $password->title ?? 'Password-' . ($loop->index + 1) }}</h3>
                                    <!-- Close Modal -->
                                    <label for="modal-toggle-1"
                                        class="text-gray-500 hover:text-gray-700 cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </label>
                                </div>

                                <!-- Modal Body -->
                                <div class="space-y-4">
                                    <p><strong>Password:</strong> {{ $password->password }}</p>
                                </div>

                                <!-- Modal Footer -->
                                <div class="flex justify-end mt-4">
                                    <label for="modal-toggle-1"
                                        class="bg-gray-200 text-gray-700 px-4 py-2 rounded-md hover:bg-gray-300 cursor-pointer">
                                        Close
                                    </label>
                                </div>
                            </div>
                        </div>
                    @endforeach
            </div>

            </main>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/@material-tailwind/html@latest/scripts/popover.js"></script>

    <style>
        .border-red-500 {
            border-color: #ef4444;
        }

        .text-red-500 {
            color: #ef4444;
        }
    </style>
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
        
        document.addEventListener("DOMContentLoaded", () => {
            const form = document.getElementById("passwordStoreForm");
            const passwordInput = document.getElementById("password");
            const confirmPasswordInput = document.getElementById("confirmPassword");
            const passwordError = document.getElementById("passwordError");
            const confirmPasswordError = document.getElementById("confirmPasswordError");

            // Debug logs
            console.log("Password Input:", passwordInput);
            console.log("Confirm Password Input:", confirmPasswordInput);
            console.log("Password Error Element:", passwordError);
            console.log("Confirm Password Error Element:", confirmPasswordError);

            form.addEventListener("submit", (e) => {
                e.preventDefault();

                // Check if elements are missing
                if (!passwordInput || !confirmPasswordInput || !passwordError || !confirmPasswordError) {
                    console.error("One or more elements are missing in the DOM.");
                    return;
                }

                // Clear previous error messages
                passwordError.textContent = "";
                confirmPasswordError.textContent = "";
                passwordError.classList.add("hidden");
                confirmPasswordError.classList.add("hidden");
                passwordInput.classList.remove("border-red-500");
                confirmPasswordInput.classList.remove("border-red-500");

                // Perform validation
                let isValid = true;

                if (passwordInput.value.length < 8) {
                    passwordError.textContent = "Password must be at least 8 characters long.";
                    passwordError.classList.remove("hidden");
                    passwordInput.classList.add("border-red-500");
                    isValid = false;
                }

                if (passwordInput.value !== confirmPasswordInput.value) {
                    confirmPasswordError.textContent = "Passwords do not match.";
                    confirmPasswordError.classList.remove("hidden");
                    confirmPasswordInput.classList.add("border-red-500");
                    isValid = false;
                }

                // If valid, submit the form
                if (isValid) {
                    form.submit();
                }
            });
        });



        //         const modal = document.getElementById('modal');
        // const openModalBtn = document.getElementById('open-modal');
        // const closeModalBtns = document.querySelectorAll('#close-modal');

        // // Function to open the modal
        // function openModal() {
        //     modal.classList.remove('hidden', 'opacity-0', 'translate-y-4');
        //     modal.classList.add('flex', 'opacity-100', 'translate-y-0');
        // }

        // // Function to close the modal
        // function closeModal() {
        //     modal.classList.add('opacity-0', 'translate-y-4');
        //     modal.classList.remove('flex', 'opacity-100');
        //     setTimeout(() => modal.classList.add('hidden'), 300); // Allow transition time
        // }

        // // Add event listeners
        // openModalBtn.addEventListener('click', openModal);
        // closeModalBtns.forEach(btn => btn.addEventListener('click', closeModal));
    </script>
</body>

</html>

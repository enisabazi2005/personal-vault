<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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

    <!-- Font Awesome Link -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css" />
    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/script-name.js"></script>
    <link rel="stylesheet" href="{{ asset('node_modules/apexcharts/dist/apexcharts.css') }}" />    
</head>

<style>
    :root {
    --p: #f80b7e; /* Operational color */
    --su: #33FF57; /* Networking color */
    --er: #5733FF; /* Hiring color */
    --n: #33A1FF;  /* R&D color */
    --bc: #f0f0f0;  /* Background color */ 
}
</style>

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
                                <a href="/store_password" class="block px-4 py-2 hover:bg-gray-700 rounded-lg">
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

            <!-- Main Content Area -->
            <div class="flex-1 ml-64">
                <!-- Headerbar -->
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

                <!-- Content -->
                <main class="mt-16 p-4">
                    <div class="bg-white shadow rounded-lg p-6 mt-5">
                        <h2 class="text-lg font-bold">Welcome to Vaulter Dashboard</h2>
                        <p class="text-gray-600 mt-2">Start managing your projects efficiently.</p>
                    </div>
                    <div class="flex gap-4 mt-6 justify-center">
                        <!-- Chart 1 -->
                        <div class="basis-[45%] bg-white shadow rounded-lg p-6 w-full">
                            <div id="apex-doughnut-chart-1"></div>
                        </div>
                    
                        <!-- Chart 2 -->
                        <div class="basis-[45%] bg-white shadow rounded-lg p-6 w-full">
                            <div id="apex-radar-chart"></div>
                        </div>
                    </div>
                    <section class="lg:py-28 py-10 px-8 container mx-auto">
                        <div class="lg:mb-24 mb-10">
                          <p class="block font-sans text-blue-gray-900 mb-4 text-2xl font-bold lg:text-4xl">
                            Turn your idea into a startup
                          </p>
                          <p class="block font-sans text-xl font-normal text-gray-500 max-w-xl">
                            We're constantly trying to express ourselves and actualize our dreams. If you have the opportunity to play
                          </p>
                        </div>
                        <div class="grid gap-10 lg:grid-cols-1 lg:gap-24 xl:grid-cols-2 items-center">
                          <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 bg-gray-100/50 py-24 text-center">
                            <h1 class="block tracking-normal font-sans font-semibold text-green-500 text-5xl">
                              1,000Kg
                            </h1>
                            <h5 class="block tracking-normal font-sans text-xl text-blue-gray-900 mt-2 font-bold">
                              CO2 Emissions Offset
                            </h5>
                            <h4 class="block tracking-normal font-sans text-2xl text-blue-gray-900 mt-10 font-bold">
                              Eco Warrior Achievement
                            </h4>
                            <p class="block font-sans text-base text-gray-500 mt-1 max-w-lg mx-auto lg:w-8/12">
                              Congratulations on reaching a new milestone in environmental stewardship!
                            </p>
                          </div>
                          <div>
                            <div class="grid lg:grid-cols-2 gap-10 gap-x-20">
                              <div class="relative flex flex-col bg-clip-border rounded-xl bg-transparent text-gray-700 shadow-none">
                                <p class="block font-sans text-4xl font-bold text-blue-gray-900">
                                  15,000M
                                </p>
                                <hr class="mt-2 mb-4 max-w-sm" />
                                <h5 class="block tracking-normal font-sans text-xl text-blue-gray-900 mt-1 font-bold">
                                  Marathon Runner Progress
                                </h5>
                                <p class="block font-sans text-base text-gray-500 max-w-xs leading-7">
                                  You're racing ahead in your marathon training goals.
                                </p>
                              </div>
                              <div class="relative flex flex-col bg-clip-border rounded-xl bg-transparent text-gray-700 shadow-none">
                                <p class="block font-sans text-4xl font-bold text-blue-gray-900">
                                  $10,000+
                                </p>
                                <hr class="mt-2 mb-4 max-w-sm" />
                                <h5 class="block tracking-normal font-sans text-xl text-blue-gray-900 mt-1 font-bold">
                                  Invested
                                </h5>
                                <p class="block font-sans text-base text-gray-500 max-w-xs leading-7">
                                  Your financial acumen is paying off—literally.
                                </p>
                              </div>
                              <div class="relative flex flex-col bg-clip-border rounded-xl bg-transparent text-gray-700 shadow-none">
                                <p class="block font-sans text-4xl font-bold text-blue-gray-900">
                                  4,500+
                                </p>
                                <hr class="mt-2 mb-4 max-w-sm" />
                                <h5 class="block tracking-normal font-sans text-xl text-blue-gray-900 mt-1 font-bold">
                                  Hours of Exercise
                                </h5>
                                <p class="block font-sans text-base text-gray-500 max-w-xs leading-7">
                                  Your commitment to health is inspiring and your stats show it.
                                </p>
                              </div>
                              <div class="relative flex flex-col bg-clip-border rounded-xl bg-transparent text-gray-700 shadow-none">
                                <p class="block font-sans text-4xl font-bold text-blue-gray-900">
                                  8,200+
                                </p>
                                <hr class="mt-2 mb-4 max-w-sm" />
                                <h5 class="block tracking-normal font-sans text-xl text-blue-gray-900 mt-1 font-bold">
                                  Volunteer Hours
                                </h5>
                                <p class="block font-sans text-base text-gray-500 max-w-xs leading-7">
                                  Your contributions have made an impact in your community.
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </section>
                      <section class="container mx-auto py-20 px-8">
                        <div class="flex justify-between md:items-center">
                          <div>
                            <p class="text-base font-light text-gray-600 font-bold">
                              Overall Performance
                            </p>
                            <p class="text-sm font-light text-gray-600 md:w-full w-4/5">
                              Upward arrow indicating an increase in revenue compared to the previous period.
                            </p>
                          </div>
                          <div class="shrink-0">
                            <button
                              data-ripple-light="true"
                              data-popover-target="menu1"
                              aria-expanded="false"
                              aria-haspopup="menu"
                              class="font-bold text-xs py-3 px-6 rounded-lg border border-gray-300 text-gray-900 hover:opacity-75 focus:ring focus:ring-gray-300 active:opacity-85 flex items-center gap-1"
                              type="button"
                            >
                              last 24h
                              <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-gray-900" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                              </svg>
                            </button>
                            <ul role="menu" data-popover="menu1" data-popover-placement="bottom" class="absolute z-10 min-w-[180px] bg-white border border-blue-gray-50 rounded-md p-3 shadow-lg">
                              <li role="menuitem" class="block w-full cursor-pointer px-3 py-2 text-start transition-all hover:bg-blue-gray-50 hover:text-blue-gray-900">
                                Last 12h
                              </li>
                              <li role="menuitem" class="block w-full cursor-pointer px-3 py-2 text-start transition-all hover:bg-blue-gray-50 hover:text-blue-gray-900">
                                Last 24h
                              </li>
                              <li role="menuitem" class="block w-full cursor-pointer px-3 py-2 text-start transition-all hover:bg-blue-gray-50 hover:text-blue-gray-900">
                                Last 20h
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div class="mt-6 grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-4 md:gap-2.5">
                          <div class="relative flex flex-col bg-white text-gray-700 shadow-md rounded-lg border border-gray-200">
                            <div class="p-6">
                              <div class="flex justify-between items-center">
                                <p class="text-xs font-medium text-gray-600">Revenue</p>
                                <div class="flex items-center gap-1">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-red-500" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                                  </svg>
                                  <p class="text-xs font-medium text-red-500">12%</p>
                                </div>
                              </div>
                              <p class="text-2xl font-bold text-blue-gray-900 mt-1">$50,846.90</p>
                            </div>
                          </div>
                          <div class="relative flex flex-col bg-white text-gray-700 shadow-md rounded-lg border border-gray-200">
                            <div class="p-6">
                              <div class="flex justify-between items-center">
                                <p class="text-xs font-medium text-gray-600">Outbound Clicks</p>
                                <div class="flex items-center gap-1">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-green-500" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5"></path>
                                  </svg>
                                  <p class="text-xs font-medium text-green-500">16%</p>
                                </div>
                              </div>
                              <p class="text-2xl font-bold text-blue-gray-900 mt-1">10,342</p>
                            </div>
                          </div>
                          <div class="relative flex flex-col bg-white text-gray-700 shadow-md rounded-lg border border-gray-200">
                            <div class="p-6">
                              <div class="flex justify-between items-center">
                                <p class="text-xs font-medium text-gray-600">Total Audience</p>
                                <div class="flex items-center gap-1">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-green-500" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5"></path>
                                  </svg>
                                  <p class="text-xs font-medium text-green-500">10%</p>
                                </div>
                              </div>
                              <p class="text-2xl font-bold text-blue-gray-900 mt-1">19,720</p>
                            </div>
                          </div>
                          <div class="relative flex flex-col bg-white text-gray-700 shadow-md rounded-lg border border-gray-200">
                            <div class="p-6">
                              <div class="flex justify-between items-center">
                                <p class="text-xs font-medium text-gray-600">Event Count</p>
                                <div class="flex items-center gap-1">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-red-500" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                                  </svg>
                                  <p class="text-xs font-medium text-red-500">10%</p>
                                </div>
                              </div>
                              <p class="text-2xl font-bold text-blue-gray-900 mt-1">20,000</p>
                            </div>
                          </div>
                        </div>
                      </section>
                      
                </main>
            </div>
        </div>
    </section>
    

    <script type="module" src="https://unpkg.com/@material-tailwind/html@latest/scripts/popover.js"></script>
    <script>
        // Assuming the token is passed from the server-side to the frontend, store it in localStorage
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

        window.addEventListener("load", () => {
        // Create the Apex radar chart
        const chartOptions = {
            chart: {
                height: 350,
                type: "radar",
                toolbar: { show: false },
                dropShadow: {
                    enabled: true,
                    blur: 8,
                    left: 1,
                    top: 1,
                    opacity: 0.2
                }
            },
            legend: {
                show: true,
                position: "bottom",
                labels: {
                    useSeriesColors: true
                }
            },
            plotOptions: {
                radar: {
                    polygons: {
                        strokeColors: "#f0f0f0", /* Use a lighter color */
                        connectorColors: "#f0f0f0"
                    }
                }
            },
            yaxis: {
                show: false
            },
            series: [
                {
                    name: "iPhone 15 Pro Max",
                    data: [41, 64, 81, 60, 42, 42, 33, 23]
                },
                {
                    name: "Samsung s24 Ultra",
                    data: [65, 46, 42, 25, 58, 63, 76, 43]
                }
            ],
            colors: ["#f80b7e", "#33FF57"], /* Use brighter colors here */
            xaxis: {
                categories: ["Battery", "Brand", "Camera", "Memory", "Storage", "Display", "OS", "Price"],
                labels: {
                    show: true,
                    style: {
                        colors: "#f0f0f0", /* Set labels to lighter color */
                        fontSize: "9px"
                    }
                }
            },
            stroke: {
                show: false,
                width: 0
            },
            markers: {
                size: 0
            },
            grid: {
                show: false,
                padding: { top: -20, bottom: -20 }
            }
        };

        // Create and render the radar chart
        const chart = new ApexCharts(document.querySelector("#apex-radar-chart"), chartOptions);
        chart.render();
    });

    window.addEventListener("load", () => {
      let passwordCount = {{ $passwordCount }};

          let chartSeries = passwordCount === 0 ? [100] : [passwordCount]; // If 0, set the series to 100% (full circle)
          let chartLabels = passwordCount === 0 ? ["0"] : ["Password"]; // Display "0" in the center if count is 0
          
          
    // Radar Chart 1
    (function () {
      buildChart("#apex-radar-chart", mode => ({
        chart: {
          height: 350,
          width: "100%",
          type: "radar",
          toolbar: {
            show: false
          },
          dropShadow: {
            enabled: false,
            blur: 8,
            left: 1,
            top: 1,
            opacity: 0.2
          }
        },
        legend: {
          show: true,
          position: "bottom",
          labels: {
            useSeriesColors: true
          }
        },
        plotOptions: {
          radar: {
            polygons: {
              strokeColors: "oklch(var(--bc) / 0.4)",
              connectorColors: "oklch(var(--bc) / 0.4)"
            }
          }
        },
        yaxis: {
          show: false
        },
        series: [
          {
            name: "iPhone 15 Pro Max",
            data: [41, 64, 81, 60, 42, 42, 33, 23]
          },
          {
            name: "Samsung s24 Ultra",
            data: [65, 46, 42, 25, 58, 63, 76, 43]
          }
        ],
        // Using CSS variables for the colors
        colors: [
          "oklch(var(--p) / 0.7)", 
          "oklch(var(--su) / 0.9)", 
          "oklch(var(--er) / 0.8)", 
          "oklch(var(--n) / 0.8)", 
          "oklch(var(--bc) / 0.9)"
        ],
        xaxis: {
          categories: ["Battery", "Brand", "Camera", "Memory", "Storage", "Display", "OS", "Price"],
          labels: {
            show: true,
            style: {
              colors: "oklch(var(--bc) / 0.9)",
              fontSize: "12px"
            }
          }
        },
        stroke: {
          show: false,
          width: 0
        },
        markers: {
          size: 0
        },
        grid: {
          show: false,
          padding: {
            top: -20,
            bottom: -20
          }
        }
      }));
    })();
  });
        // Create the Apex chart
        const chartOptions = {
    chart: {
        height: 300,
        type: "donut",
    },
    plotOptions: {
        pie: {
            donut: {
                size: "45%",
                labels: {
                    show: true,
                    name: {
                        fontSize: "1rem",
                    },
                },
            },
        },
    },
    labels: ["Password", "Documents", "Information", "Secret Keys", "Private Address", "Bank Details"],
    // series: [10, 12, 8, 20, 15, 30],
    series: [{{ $passwordCount }} , 0 , 0 , 0 , 0 , 0]
};

// Create the first donut chart
const chart1 = new ApexCharts(document.querySelector("#apex-doughnut-chart-1"), chartOptions);
chart1.render();

// Create the second donut chart
const chart2 = new ApexCharts(document.querySelector("#apex-doughnut-chart-2"), chartOptions);
chart2.render();

// Create the third donut chart
const chart3 = new ApexCharts(document.querySelector("#apex-doughnut-chart-3"), chartOptions);
chart3.render();
    </script>
</body>

</html>

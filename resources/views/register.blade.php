<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.3/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.flyonui.com/fy-assets/css/main.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <section class="section-1">
        <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
              <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
              <h2 class="mt-10 text-center text-2xl font-bold tracking-tight text-gray-900">Sign up to create an account</h2>
            </div>
          
            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                <form class="space-y-6" action="{{ url('/register') }}" method="POST">
                    @csrf <!-- CSRF Token for security -->
                    
                    @if ($errors->any())
                        <div class="bg-red-500 text-white p-4 rounded-md mb-6">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-900">Name</label>
                        <div class="mt-2">
                            <input id="name" name="name" type="text" required class="block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600">
                        </div>
                    </div>
                
                    <div>
                        <label for="last_name" class="block text-sm font-medium text-gray-900">Last Name</label>
                        <div class="mt-2">
                            <input id="last_name" name="last_name" type="text" required class="block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600">
                        </div>
                    </div>
                
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-900">Email address</label>
                        <div class="mt-2">
                            <input id="email" name="email" type="email" required class="block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600">
                        </div>
                    </div>
                
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-900">Password</label>
                        <div class="mt-2">
                            <input id="password" name="password" type="password" required class="block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600">
                        </div>
                    </div>
                
                    <div>
                        <label for="confirmPassword" class="block text-sm font-medium text-gray-900">Confirm Password</label>
                        <div class="mt-2">
                            <input id="confirmPassword" name="password_confirmation" type="password" required class="block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600">
                        </div>
                    </div>
                
                    <div>
                        <button type="submit" class="w-full bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-600">
                            Register
                        </button>
                    </div>
                </form>
          
              <p class="mt-10 text-center text-sm text-gray-500">
                Already have an account?
                <a href="/login" class="font-semibold text-indigo-600 hover:text-indigo-500">Log in here</a>
              </p>
            </div>
        </div>
    </section>
</body>
</html>

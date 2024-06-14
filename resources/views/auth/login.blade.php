{{-- <x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <form method="POST" action="{{ route('login') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            
            <!-- Email Address -->
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email Address</label>
                <input id="email" type="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" autofocus required autocomplete="username">
            </div>

            <!-- Password -->
            <div class="mb-6">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                <input id="password" type="password" name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" required autocomplete="current-password">
            </div>

            <!-- Remember Me -->
            <div class="mb-6">
                <label for="remember_me" class="flex items-center">
                    <input id="remember_me" type="checkbox" name="remember" class="form-checkbox h-5 w-5 text-indigo-600"><span class="ml-2 text-gray-700 text-sm">Remember me</span>
                </label>
            </div>

            <!-- Login Button -->
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Log In
                </button>
                <a class="inline-block align-baseline font-bold text-sm text-indigo-500 hover:text-indigo-800" href="{{ route('password.request') }}">
                    Forgot Password?
                </a>
            </div>
        </form>
    </div>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100" style="background-image: url('/welcome/img/hero-img.jpg'); background-size: cover;">
    <div class="flex items-center justify-center h-screen">
        <div class="bg-white p-8 rounded shadow-md w-full sm:w-96">
            <h2 class="text-2xl font-bold mb-6 text-center">Log In</h2>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <!-- Email Address -->
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email Address</label>
                    <input id="email" type="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" autofocus required autocomplete="email">
                </div>
                <!-- Password -->
                <div class="mb-6">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                    <input id="password" type="password" name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" required autocomplete="current-password">
                </div>
                <!-- Remember Me -->
                <div class="mb-2">
                    <label for="remember_me" class="flex items-center">
                        <input id="remember_me" type="checkbox" name="remember" class="form-checkbox h-5 w-5 text-indigo-600"><span class="ml-2 text-gray-700 text-sm">Remember me</span>
                    </label>
                </div>
                <div class="mb-6">
                    <a class="inline-block align-baseline font-bold text-sm text-indigo-500 hover:text-indigo-800" href="{{ route('password.request') }}">
                        Forgot Password?
                    </a>
                </div>
                <!-- Login Button -->
                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full">
                        Log In
                    </button>
                </div>
                <!-- Register Link -->
                <div class="mt-4 text-center">
                    <p class="text-sm text-gray-600">Not registered? <a href="{{ route('register') }}" class="font-bold text-indigo-500 hover:text-indigo-800">Register here</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>



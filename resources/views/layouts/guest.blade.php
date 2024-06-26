<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js', './node_modules/preline/dist/preline.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen pt-6 sm:pt-0 bg-gray-100 dark:bg-black">
        <div class="flex items-center justify-evenly w-screen h-[90vh]">
            <div>
                <iconify-icon icon="ri:twitter-x-fill" width="350px" class="text-white"></iconify-icon>
            </div>

            <div class="">
                {{ $slot }}
            </div>
        </div>

        <div class="text-slate-600 space-x-1 text-center text-[15px]">
            <a href="" class="hover:underline">About</a>
            <a href="" class="hover:underline">Download the X app</a>
            <a href="" class="hover:underline">Help Center</a>
            <a href="" class="hover:underline">Terms of Service</a>
            <a href="" class="hover:underline">Privacy Policy</a>
            <a href="" class="hover:underline">Cookies Policy</a>
            <a href="" class="hover:underline">Accessbility</a>
            <a href="" class="hover:underline">Ads info</a>
            <a href="" class="hover:underline">Blog</a>
            <a href="" class="hover:underline">Careers</a>
            <a href="" class="hover:underline">Brand Resources</a>
            <a href="" class="hover:underline">Advertising</a>
            <a href="" class="hover:underline">Marketing</a>
            <a href="" class="hover:underline">X for Business</a>
            <a href="" class="hover:underline">Developers</a>
            <a href="" class="hover:underline">Directory</a>
            <a href="" class="hover:underline">Settings</a>
            <a>&copy;2024 X Corp.</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@2.1.0/dist/iconify-icon.min.js"></script>
</body>

</html>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <title>Toga Motorsport</title>
</head>
<body>
<!-- This example requires Tailwind CSS v2.0+ -->
<header class="bg-white">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" aria-label="Top">
        <div class="w-full py-6 flex items-center justify-between border-b lg:border-none">
            <div class="flex items-center">
                <a href="#">
                    <span class="sr-only">Workflow</span>
                    <img class="h-10 w-auto" src="{{asset('images/logo.png')}}" alt="">
                </a>
                <div class="hidden ml-10 space-x-8 lg:block">
                    <a href="#" class="text-slate-800 text-base font-medium text-white hover:text-red-700"> Solutions </a>

                    <a href="#" class="text-slate-800 text-base font-medium text-white hover:text-red-700"> Pricing </a>

                    <a href="#" class="text-slate-800 text-base font-medium text-white hover:text-red-700"> Docs </a>

                    <a href="#" class="text-slate-800 text-base font-medium text-white hover:text-red-700"> Company </a>
                </div>
            </div>
            <div class="ml-10 space-x-4">
                <a href="#" class="inline-block bg-indigo-500 py-2 px-4 border border-transparent rounded-md text-base font-medium text-white hover:bg-opacity-75">Sign in</a>
                <a href="#" class="inline-block bg-white py-2 px-4 border border-transparent rounded-md text-base font-medium text-indigo-600 hover:bg-indigo-50">Sign up</a>
            </div>
        </div>
        <div class="py-4 flex flex-wrap justify-center space-x-6 lg:hidden">
            <a href="#" class="text-base font-medium text-white hover:text-indigo-50"> Solutions </a>

            <a href="#" class="text-base font-medium text-white hover:text-indigo-50"> Pricing </a>

            <a href="#" class="text-base font-medium text-white hover:text-indigo-50"> Docs </a>

            <a href="#" class="text-base font-medium text-white hover:text-indigo-50"> Company </a>
        </div>
    </nav>
</header>

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative bg-slate-400">
    <div class="absolute inset-0">
        <img class="w-full h-full object-cover" src="{{asset('images/main_image.png')}}" alt="">
        <div class="absolute inset-0 bg-slate-400 mix-blend-multiply" aria-hidden="true"></div>
    </div>
    <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl uppercase">Welcome to Toga Motorsport</h1>
        <p class="mt-6 text-xl text-indigo-100 max-w-3xl">Mattis amet hendrerit dolor, quisque lorem pharetra. Pellentesque lacus nisi urna, arcu sociis eu. Orci vel lectus nisl eget eget ut consectetur. Sit justo viverra non adipisicing elit distinctio.</p>
    </div>
</div>
<!-- This example requires Tailwind CSS v2.0+ -->
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-white">
    <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-base font-semibold text-indigo-600 tracking-wide uppercase">Pricing</h2>
            <p class="mt-1 text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl">Take control of your team.</p>
            <p class="max-w-xl mt-5 mx-auto text-xl text-gray-500">Start building for free, then add a site plan to go live. Account plans unlock additional features.</p>
        </div>
    </div>
</div>


</body>
</html>

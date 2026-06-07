<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astrology</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link
href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600;700&display=swap"
rel="stylesheet">
</head>
<body>
 <!-- PRELOADER -->
    <div id="preloader"
         class="fixed inset-0 z-[9999] bg-black flex items-center justify-center">

        <img
            id="moon"
            src="{{ asset('assets/images/moon.avif') }}"
            alt="Moon"
            class="w-40 h-auto"
        >

    </div>


    @yield('content')

</body>
</html>
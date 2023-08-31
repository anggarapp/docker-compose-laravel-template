<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
        @yield('title')
    </title>
    <meta name="description" content="UDD PMI Bojonegoro" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <!-- Define your gradient here - use online tools to find a gradient matching your branding-->
    <style>
        .gradient {
            background: linear-gradient(90deg, #ff0900 0%, #ff6c67 100%);
        }
    </style>
    @yield('header')
    @livewireStyles
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

</head>

<body>
    @yield('navbar')
    @yield('body')
    @yield('script')
    @livewireScripts
</body>

</html>
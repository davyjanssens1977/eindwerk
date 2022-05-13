<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - VZW Wiebe Bree</title>
    <link rel="icon" type="image/x-icon" href="/img/favicon.svg">
    <script src="/js/hero.js" type="text/javascript"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <link rel="stylesheet" href="/styles/styles.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />  
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />  
</head>
<body>
    @include('layouts.includes.user-menu')
    @include('layouts.includes.nav')
    @include('layouts.includes.header')
        <div class="container-content">
            @yield('content')
        </div>
    @include('layouts.includes.footer')

    @include('layouts.includes.copyright')
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 200,
            duration: 1000
          });
      </script>
</body>
</html>
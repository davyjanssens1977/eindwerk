<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - VZW Wiebe Bree</title>
    <link rel="icon" type="image/x-icon" href="/img/favicon.svg">
    <script src="/js/hero.js" type="text/javascript"></script>
    <link rel="stylesheet" href="/styles/styles.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
</head>
<body>
   @include('layouts.includes.nav')

        <div class="container-content">
            @yield('content')
        </div>
    @include('layouts.includes.footer')

    @include('layouts.includes.copyright')

</body>
</html>
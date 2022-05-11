<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>@yield('title') - VZW Wiebe Bree</title>
        <link rel="icon" href="images/favicon.ico" />
        <script src="/js/hero.js" type="text/javascript"></script>
        <script src="//unpkg.com/alpinejs" defer></script>
        <link rel="stylesheet" href="/styles/styles.css">
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            laravel: "#ef3b2d",
                        },
                    },
                }, 
            };
        </script>
 
    </head>
    <body>

        @if(session()->has('message'))
            <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show" class="fixed top-0 left-1/2 transform -translate-x-1/2 bg-[#F79012] text-white px-48 py-3">
                <p>
                    {{ session('message') }}
                </p>
            </div>
        @endif

        @include('layouts.includes.user-menu')
        @include('layouts.includes.nav')
     
             <div class="container-content">
                 @yield('content')
             </div>

         @include('layouts.includes.footer')
     
         @include('layouts.includes.copyright')
     
     </body>
     </html>
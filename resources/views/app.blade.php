<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Aldo Arista | A Software Engineer 👨‍💻</title>

    {{-- Style --}}
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">

</head>
<body class="bg-[#151515] px-6 py-4">
    
    <x-sidebar />

    <div class= "lg:ml-[17rem]">
       
        @yield('content')
        
        {{-- Section: Contact Me --}}
        <div class="group w-full h-full bg-gradient-to-br from-zinc-700 to-transparent border-[1px] border-white/15 rounded-3xl py-12 px-8 mb-4 cursor-pointer">
            <a href="https://wa.me/6281338556780" target="_blank">
                <div class="flex justify-center items-center gap-8 animate-pulse group-hover:animate-none group-hover:scale-110 duration-300">
                    <h1 class="text-4xl text-[#CACACA] font-semibold group-hover:-translate-x-4 duration-300 group-hover:text-[#F4F4F4]">Contact Me</h1>
                    <svg class="group-hover:translate-x-4 duration-300 fill-[#CACACA] group-hover:fill-[#F4F4F4]" width="45" height="34" viewBox="0 0 45 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M44.1801 18.5411C45.0313 17.69 45.0313 16.31 44.1801 15.4589L30.3102 1.58896C29.4591 0.737837 28.0791 0.737837 27.228 1.58896C26.3769 2.44009 26.3769 3.82004 27.228 4.67117L39.5568 17L27.228 29.3288C26.3769 30.18 26.3769 31.5599 27.228 32.411C28.0791 33.2622 29.4591 33.2622 30.3102 32.411L44.1801 18.5411ZM0.361084 19.1794H42.639V14.8206H0.361084V19.1794Z"/>
                    </svg>
                </div>
            </a>
            
        </div>
        
        {{-- Section: Footer --}}
        <div class="flex items-center gap-12 text-[#CACACA] ml-4">
            <p>© Copyright 2023. All Right Reserved.</p>
            <div class="flex items-center gap-2">
                <img class="rounded-full w-8 h-auto" src="{{ asset('img/Logo Initial.png') }}" alt="Personal Brand Logo">
                <p>Made by <b>Aldo Arista</b></p>
            </div>
        </div>
    </div>
    

    {{-- Scripts --}}
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script>
        $('.owl-carousel').owlCarousel({
        loop:true,
        margin:16,
        dots:false,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    })
    </script>
</body>
</html>
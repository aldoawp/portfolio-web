@extends('app')

@section('content')

<div>

</div>
    {{-- Section: Introduction --}}
    <div class="w-full h-full bg-zinc-700 rounded-3xl py-12 px-8 mb-4">
        <h1 class="text-[#F4F4F4] text-4xl font-bold mb-12 w-full">Hello Everyone! I’m Aldo Arista 👋</h1>
        <p class="text-[#CACACA] text-lg lg:w-2/3 mb-12">A passionate UI/UX Designer & Full-Stack Engineer adept at transforming concepts into engaging, user-friendly web and mobile apps.</p>
            <div class="flex justify-between items-center">
            <svg class="mr-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.60001 10.3936C9.60001 9.75707 9.85286 9.14662 10.3029 8.69654C10.753 8.24645 11.3635 7.99359 12 7.99359C12.6365 7.99359 13.247 8.24645 13.6971 8.69654C14.1472 9.14662 14.4 9.75707 14.4 10.3936C14.4 11.0301 14.1472 11.6406 13.6971 12.0906C13.247 12.5407 12.6365 12.7936 12 12.7936C11.3635 12.7936 10.753 12.5407 10.3029 12.0906C9.85286 11.6406 9.60001 11.0301 9.60001 10.3936Z" fill="#67E9B3"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.60001 10.3936C1.60128 7.63633 2.6976 4.99244 4.64789 3.04336C6.59818 1.09427 9.24273 -0.000424431 12 1.23445e-07C17.7424 1.23445e-07 22.4 4.6544 22.4 10.3936C22.4 14.672 20.2592 18.0624 17.9648 20.3536C16.9506 21.3722 15.8139 22.2612 14.5808 23C14.0656 23.304 13.584 23.544 13.1648 23.7072C12.7696 23.864 12.3552 23.9856 12 23.9856C11.6448 23.9856 11.2304 23.864 10.8352 23.7072C10.3458 23.508 9.87242 23.2716 9.41921 23C8.18616 22.2611 7.04949 21.3722 6.03521 20.3536C3.74081 18.0624 1.60001 14.672 1.60001 10.3936ZM12 6.3952C10.9391 6.3952 9.92172 6.81663 9.17158 7.56677C8.42143 8.31692 8.00001 9.33433 8.00001 10.3952C8.00001 11.4561 8.42143 12.4735 9.17158 13.2236C9.92172 13.9738 10.9391 14.3952 12 14.3952C13.0609 14.3952 14.0783 13.9738 14.8284 13.2236C15.5786 12.4735 16 11.4561 16 10.3952C16 9.33433 15.5786 8.31692 14.8284 7.56677C14.0783 6.81663 13.0609 6.3952 12 6.3952Z" fill="#67E9B3"/>
            </svg>
            <p class="text-[#CACACA] w-60">Malang, Indonesia</p>
            <div class="w-full border-[1px] border-dashed border-[#CACACA]"></div>
            <x-button_1 :message="'More About Me'"/>
        </div>
    </div>

    {{-- Section: Projects --}}
    <div class="w-full h-full bg-zinc-700 rounded-3xl py-12 px-8 mb-4">
        <h1 class="text-[#F4F4F4] text-3xl font-bold mb-12 w-full">Recent Project</h1>
        
        {{-- Carousel --}}
        <div class="owl-carousel owl-theme mb-14">
            <div class="item">
                <x-card_1 :category="'WEB APPLICATION'" :title="'Digital Bullet Journal'" :image="'https://via.placeholder.com/238'"/>
            </div>
            <div class="item">
                <x-card_1 :category="'WEB APPLICATION'" :title="'PT Karyamega Putra Mandiri POS'" :image="'https://via.placeholder.com/562'"/>
            </div>
        </div>

        <div class="flex justify-between items-center">
            {{-- Divider --}}
            <div class="w-full h-[1px] border-[1px] border-dashed border-[#CACACA]"></div>
            <x-button_1 :message="'View All Projects'"/>
        </div>
    </div>

    {{-- Section: Tech Stack --}}
    <div class="w-full h-full bg-zinc-700 rounded-3xl py-12 px-8 mb-4">
        <h1 class="text-[#F4F4F4] text-3xl font-bold mb-12 w-full">Tech Stack</h1>

        <div class="grid grid-cols-3 gap-8 mb-14">
            <x-card_2 :techLogo="'./img/laravel_logo.png'" :techName="'Laravel'" :techField="'Full-Stack'" />
            <x-card_2 :techLogo="'./img/tailwind_logo.png'" :techName="'Tailwind'" :techField="'Front-End'" />
            <x-card_2 :techLogo="'./img/vue_logo.png'" :techName="'Vue'" :techField="'Front-End'" />
            <x-card_2 :techLogo="'https://via.placeholder.com/64'" :techName="'Python'" :techField="'Back-End'" />
            <x-card_2 :techLogo="'https://via.placeholder.com/64'" :techName="'C'" :techField="'Back-End'" />
            <x-card_2 :techLogo="'https://via.placeholder.com/64'" :techName="'Java'" :techField="'Back-End'" />
        </div>

        <div class="w-full h-[1px] border-[1px] border-dashed border-[#CACACA]"></div>
    </div>

    {{-- Section: Contact Me --}}
    <div class="group w-full h-full bg-zinc-700 rounded-3xl py-12 px-8 mb-4 cursor-pointer">
        <div class="flex justify-center items-center gap-8">
            <h1 class="text-4xl text-[#CACACA] font-semibold group-hover:-translate-x-4 duration-300 group-hover:text-[#F4F4F4]">Contact Me</h1>
            <svg class="group-hover:translate-x-4 duration-300 fill-[#CACACA] group-hover:fill-[#F4F4F4]" width="45" height="34" viewBox="0 0 45 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M44.1801 18.5411C45.0313 17.69 45.0313 16.31 44.1801 15.4589L30.3102 1.58896C29.4591 0.737837 28.0791 0.737837 27.228 1.58896C26.3769 2.44009 26.3769 3.82004 27.228 4.67117L39.5568 17L27.228 29.3288C26.3769 30.18 26.3769 31.5599 27.228 32.411C28.0791 33.2622 29.4591 33.2622 30.3102 32.411L44.1801 18.5411ZM0.361084 19.1794H42.639V14.8206H0.361084V19.1794Z"/>
            </svg>
        </div>
    </div>

    {{-- Section: Footer --}}
    <div class="flex items-center gap-12 text-[#CACACA] ml-4">
        <p>© Copyright 2023. All Right Reserved.</p>
        <div class="flex items-center gap-2">
            <img class="rounded-full w-8 h-auto" src="{{ asset('img/Logo Initial.png') }}" alt="Personal Brand Logo">
            <p>Made by <b>Aldo Arista</b></p>
        </div>
    </div>
    
        

@endsection
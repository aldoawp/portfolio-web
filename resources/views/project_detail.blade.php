@extends('app')

@section('content')
    <div class="w-full h-full bg-gradient-to-br from-zinc-700 to-transparent border-[1px] border-white/15 rounded-3xl py-6 px-8 mb-4">
        <div class="flex justify-between items-center">
            <x-button_2 :message="'Back'" :url="'/'"/>
            <div class="w-full border-[1px] border-dashed border-[#CACACA] ml-4 mr-4"></div>
            <x-button_1 :message="'Live Demo'" :url="'#'"/>
        </div>
    </div>

    <div class="w-full h-full bg-gradient-to-br from-zinc-700 to-transparent border-[1px] border-white/15 rounded-3xl py-12 px-8 mb-4">
        
        
        <h1 class="text-3xl text-[#F4F4F4] font-semibold mb-8">Judul Project</h1>
        
        {{-- Section: Additional Information --}}
        <div class="grid grid-cols-2 lg:flex lg:justify-around lg:items-center mb-8">
            {{-- Perusahaan --}}
            <div class="flex gap-2 text-[#CACACA]">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M9 7.5C9.19891 7.5 9.38968 7.42098 9.53033 7.28033C9.67098 7.13968 9.75 6.94891 9.75 6.75C9.75 6.55109 9.67098 6.36032 9.53033 6.21967C9.38968 6.07902 9.19891 6 9 6C8.80109 6 8.61032 6.07902 8.46967 6.21967C8.32902 6.36032 8.25 6.55109 8.25 6.75C8.25 6.94891 8.32902 7.13968 8.46967 7.28033C8.61032 7.42098 8.80109 7.5 9 7.5ZM9.75 10.5C9.75 10.6989 9.67098 10.8897 9.53033 11.0303C9.38968 11.171 9.19891 11.25 9 11.25C8.80109 11.25 8.61032 11.171 8.46967 11.0303C8.32902 10.8897 8.25 10.6989 8.25 10.5C8.25 10.3011 8.32902 10.1103 8.46967 9.96967C8.61032 9.82902 8.80109 9.75 9 9.75C9.19891 9.75 9.38968 9.82902 9.53033 9.96967C9.67098 10.1103 9.75 10.3011 9.75 10.5ZM9 15C9.19891 15 9.38968 14.921 9.53033 14.7803C9.67098 14.6397 9.75 14.4489 9.75 14.25C9.75 14.0511 9.67098 13.8603 9.53033 13.7197C9.38968 13.579 9.19891 13.5 9 13.5C8.80109 13.5 8.61032 13.579 8.46967 13.7197C8.32902 13.8603 8.25 14.0511 8.25 14.25C8.25 14.4489 8.32902 14.6397 8.46967 14.7803C8.61032 14.921 8.80109 15 9 15ZM12.75 6.75C12.75 6.94891 12.671 7.13968 12.5303 7.28033C12.3897 7.42098 12.1989 7.5 12 7.5C11.8011 7.5 11.6103 7.42098 11.4697 7.28033C11.329 7.13968 11.25 6.94891 11.25 6.75C11.25 6.55109 11.329 6.36032 11.4697 6.21967C11.6103 6.07902 11.8011 6 12 6C12.1989 6 12.3897 6.07902 12.5303 6.21967C12.671 6.36032 12.75 6.55109 12.75 6.75ZM12 11.25C12.1989 11.25 12.3897 11.171 12.5303 11.0303C12.671 10.8897 12.75 10.6989 12.75 10.5C12.75 10.3011 12.671 10.1103 12.5303 9.96967C12.3897 9.82902 12.1989 9.75 12 9.75C11.8011 9.75 11.6103 9.82902 11.4697 9.96967C11.329 10.1103 11.25 10.3011 11.25 10.5C11.25 10.6989 11.329 10.8897 11.4697 11.0303C11.6103 11.171 11.8011 11.25 12 11.25ZM12.75 14.25C12.75 14.4489 12.671 14.6397 12.5303 14.7803C12.3897 14.921 12.1989 15 12 15C11.8011 15 11.6103 14.921 11.4697 14.7803C11.329 14.6397 11.25 14.4489 11.25 14.25C11.25 14.0511 11.329 13.8603 11.4697 13.7197C11.6103 13.579 11.8011 13.5 12 13.5C12.1989 13.5 12.3897 13.579 12.5303 13.7197C12.671 13.8603 12.75 14.0511 12.75 14.25ZM15 15C15.1989 15 15.3897 14.921 15.5303 14.7803C15.671 14.6397 15.75 14.4489 15.75 14.25C15.75 14.0511 15.671 13.8603 15.5303 13.7197C15.3897 13.579 15.1989 13.5 15 13.5C14.8011 13.5 14.6103 13.579 14.4697 13.7197C14.329 13.8603 14.25 14.0511 14.25 14.25C14.25 14.4489 14.329 14.6397 14.4697 14.7803C14.6103 14.921 14.8011 15 15 15ZM7.5 3C6.90326 3 6.33097 3.23705 5.90901 3.65901C5.48705 4.08097 5.25 4.65326 5.25 5.25V20.25C5.25 20.4489 5.32902 20.6397 5.46967 20.7803C5.61032 20.921 5.80109 21 6 21H18C18.1989 21 18.3897 20.921 18.5303 20.7803C18.671 20.6397 18.75 20.4489 18.75 20.25V12.75C18.75 12.1533 18.5129 11.581 18.091 11.159C17.669 10.7371 17.0967 10.5 16.5 10.5H15.75V5.25C15.75 4.65326 15.5129 4.08097 15.091 3.65901C14.669 3.23705 14.0967 3 13.5 3H7.5ZM6.75 5.25C6.75 5.05109 6.82902 4.86032 6.96967 4.71967C7.11032 4.57902 7.30109 4.5 7.5 4.5H13.5C13.6989 4.5 13.8897 4.57902 14.0303 4.71967C14.171 4.86032 14.25 5.05109 14.25 5.25V11.25C14.25 11.4489 14.329 11.6397 14.4697 11.7803C14.6103 11.921 14.8011 12 15 12H16.5C16.6989 12 16.8897 12.079 17.0303 12.2197C17.171 12.3603 17.25 12.5511 17.25 12.75V19.5H15.75V17.25C15.75 17.0511 15.671 16.8603 15.5303 16.7197C15.3897 16.579 15.1989 16.5 15 16.5H9C8.80109 16.5 8.61032 16.579 8.46967 16.7197C8.32902 16.8603 8.25 17.0511 8.25 17.25V19.5H6.75V5.25ZM14.25 18V19.5H12.7545V18H14.25ZM11.2545 18V19.5H9.75V18H11.2545Z" fill="#4DE6A6"/>
                </svg>
                <p>Perusahan</p>
            </div>
            
            <div class="w-full h-[1px] border-[1px] border-dashed border-[#CACACA] mx-2 hidden lg:block"></div>
            
            {{-- Waktu --}}
            <div class="flex gap-2 text-[#CACACA]">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M12 4.5C16.1422 4.5 19.5 7.85775 19.5 12C19.5 16.1422 16.1422 19.5 12 19.5C7.85775 19.5 4.5 16.1422 4.5 12C4.5 7.85775 7.85775 4.5 12 4.5ZM12 6C10.4087 6 8.88258 6.63214 7.75736 7.75736C6.63214 8.88258 6 10.4087 6 12C6 13.5913 6.63214 15.1174 7.75736 16.2426C8.88258 17.3679 10.4087 18 12 18C13.5913 18 15.1174 17.3679 16.2426 16.2426C17.3679 15.1174 18 13.5913 18 12C18 10.4087 17.3679 8.88258 16.2426 7.75736C15.1174 6.63214 13.5913 6 12 6ZM12 7.5C12.1837 7.50002 12.361 7.56747 12.4983 7.68954C12.6356 7.81161 12.7233 7.97981 12.7448 8.16225L12.75 8.25V11.6895L14.7802 13.7198C14.9148 13.8547 14.9929 14.0358 14.9987 14.2263C15.0045 14.4167 14.9376 14.6023 14.8116 14.7452C14.6855 14.8881 14.5098 14.9777 14.3201 14.9958C14.1305 15.0139 13.941 14.9591 13.7903 14.8425L13.7198 14.7802L11.4698 12.5302C11.3532 12.4136 11.2783 12.2618 11.2567 12.0982L11.25 12V8.25C11.25 8.05109 11.329 7.86032 11.4697 7.71967C11.6103 7.57902 11.8011 7.5 12 7.5Z" fill="#4DE6A6"/>
                </svg>
                <p>Waktu</p>
            </div>
            
            <div class="w-full h-[1px] border-[1px] border-dashed border-[#CACACA] mx-2 hidden lg:block"></div>

            {{-- Pekerjaan --}}
            <div class="flex gap-2 text-[#CACACA]">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.8 20.5502C4.305 20.5502 3.8814 20.3741 3.5292 20.0219C3.177 19.6697 3.0006 19.2458 3 18.7502V8.85019C3 8.35519 3.1764 7.93159 3.5292 7.57939C3.882 7.22719 4.3056 7.05079 4.8 7.05019H8.4V5.2502C8.4 4.7552 8.5764 4.3316 8.9292 3.9794C9.282 3.6272 9.7056 3.4508 10.2 3.4502H13.8C14.295 3.4502 14.7189 3.6266 15.0717 3.9794C15.4245 4.3322 15.6006 4.7558 15.6 5.2502V7.05019H19.2C19.695 7.05019 20.1189 7.22659 20.4717 7.57939C20.8245 7.93219 21.0006 8.35579 21 8.85019V18.7502C21 19.2452 20.8239 19.6691 20.4717 20.0219C20.1195 20.3747 19.6956 20.5508 19.2 20.5502H4.8ZM4.8 18.7502H19.2V8.85019H4.8V18.7502ZM10.2 7.05019H13.8V5.2502H10.2V7.05019Z" fill="#4DE6A6"/>
                </svg>
                <p>Pekerjaan</p>
            </div>
            
            <div class="w-full h-[1px] border-[1px] border-dashed border-[#CACACA] mx-2 hidden lg:block"></div>

            {{-- Teams --}}
            <div class="flex gap-2 text-[#CACACA]">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M19.0241 16.2279C18.4609 15.6643 17.8029 15.2043 17.0801 14.8689C18.0994 14.0432 18.7496 12.7832 18.7496 11.3703C18.7496 8.87736 16.6707 6.83217 14.1777 6.87041C11.7231 6.90866 9.74536 8.90886 9.74536 11.3703C9.74536 12.7832 10.3978 14.0432 11.4148 14.8689C10.6919 15.204 10.0339 15.6641 9.47087 16.2279C8.2424 17.4586 7.54492 19.0831 7.49992 20.8155C7.49932 20.8395 7.50354 20.8634 7.51231 20.8858C7.52109 20.9081 7.53425 20.9285 7.55103 20.9457C7.5678 20.9629 7.58785 20.9766 7.60998 20.9859C7.63212 20.9952 7.6559 21 7.67992 21H8.93988C9.03663 21 9.11763 20.9235 9.11988 20.8268C9.16263 19.5218 9.69136 18.3001 10.6206 17.3731C11.0961 16.8951 11.6617 16.5161 12.2846 16.2581C12.9076 16.0001 13.5755 15.8683 14.2497 15.8702C15.6199 15.8702 16.9091 16.4034 17.8789 17.3731C18.8058 18.3001 19.3346 19.5218 19.3796 20.8268C19.3818 20.9235 19.4628 21 19.5596 21H20.8195C20.8436 21 20.8673 20.9952 20.8895 20.9859C20.9116 20.9766 20.9317 20.9629 20.9484 20.9457C20.9652 20.9285 20.9784 20.9081 20.9871 20.8858C20.9959 20.8634 21.0001 20.8395 20.9995 20.8155C20.9545 19.0831 20.2571 17.4586 19.0241 16.2279ZM14.2497 14.2502C13.4802 14.2502 12.7558 13.951 12.2135 13.4065C11.9414 13.1365 11.7265 12.8145 11.5815 12.4596C11.4365 12.1047 11.3645 11.7243 11.3698 11.341C11.3766 10.6031 11.6713 9.88983 12.1865 9.36109C12.7265 8.80761 13.4487 8.49937 14.2205 8.49037C14.9832 8.48362 15.7234 8.78061 16.2679 9.31384C16.8259 9.86058 17.1319 10.5918 17.1319 11.3703C17.1319 12.1398 16.8326 12.862 16.2882 13.4065C16.021 13.6749 15.7033 13.8877 15.3534 14.0325C15.0035 14.1773 14.6284 14.2513 14.2497 14.2502ZM8.61364 11.9643C8.59339 11.7685 8.58214 11.5705 8.58214 11.3703C8.58214 11.0125 8.61589 10.6638 8.67889 10.3241C8.69464 10.2431 8.65189 10.1598 8.57764 10.1261C8.27165 9.98882 7.99041 9.79983 7.74742 9.56134C7.46109 9.28371 7.23578 8.94945 7.08586 8.57988C6.93594 8.21031 6.8647 7.81354 6.87669 7.4149C6.89694 6.69267 7.18718 6.00644 7.69342 5.48896C8.24915 4.91972 8.99613 4.60923 9.79036 4.61823C10.5081 4.62498 11.2011 4.90172 11.7253 5.39221C11.903 5.5587 12.056 5.7432 12.1843 5.94119C12.2293 6.01094 12.317 6.04019 12.3935 6.01319C12.7895 5.87594 13.208 5.7792 13.6377 5.7342C13.7637 5.7207 13.8357 5.5857 13.7795 5.47321C13.0483 4.0265 11.5543 3.02753 9.82636 3.00053C7.33118 2.96228 5.25224 5.00747 5.25224 7.49815C5.25224 8.9111 5.90247 10.1711 6.92169 10.9968C6.20621 11.3275 5.54698 11.7843 4.9755 12.3558C3.74253 13.5865 3.04505 15.2109 3.00006 16.9456C2.99946 16.9696 3.00367 16.9935 3.01244 17.0159C3.02122 17.0382 3.03438 17.0586 3.05116 17.0758C3.06793 17.093 3.08798 17.1067 3.11011 17.116C3.13225 17.1253 3.15603 17.1301 3.18005 17.1301H4.44226C4.53901 17.1301 4.62001 17.0536 4.62226 16.9569C4.66501 15.6519 5.19374 14.4302 6.12296 13.5032C6.78445 12.8417 7.59442 12.3828 8.47865 12.16C8.56639 12.1375 8.62489 12.0543 8.61364 11.9643Z" fill="#4DE6A6"/>
                </svg>
                <p>Teams</p>
            </div>
        </div>
        {{-- End Section: Additional Information --}}
        
        <img src="https://via.placeholder.com/562" alt="Placeholder image" class="object-cover w-full h-[20remA] lg:h-[30rem] rounded-2xl mb-12">
        
        

        {{-- Section: Content --}}

        <div class="w-full text-[#F4F4F4] lg:px-16">
            <div class="flex flex-col gap-2 mb-8">
                <h2 class="text-xl font-semibold">Overview</h2>
                <p class="text-justify text-[#CACACA]">The POS system developed for PT Karyamega Putra Mandiri revolutionized their sales operations, providing an intuitive and efficient platform for managing transactions and inventory.                </p>
            </div>
            <div class="flex flex-col gap-2 mb-8">
                <h2 class="text-xl font-semibold">Challenges</h2>
                <p class="text-justify text-[#CACACA]">Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="flex flex-col gap-2 mb-8">
                <h2 class="text-xl font-semibold">Solutions</h2>
                <p class="text-justify text-[#CACACA]">Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="flex flex-col gap-2 mb-8">
                <h2 class="text-xl font-semibold">Tech Stack</h2>
                <p class="text-justify text-[#CACACA]">[ TABLES ]</p>
            </div>
            <div class="flex flex-col gap-2 mb-8">
                <h2 class="text-xl font-semibold">Performance Metrics</h2>
                <p class="text-justify text-[#CACACA]">[ SCREENSHOT ]</p>
            </div>
            <div class="flex flex-col gap-2 mb-8">
                <h2 class="text-xl font-semibold">Impact</h2>
                <p class="text-justify text-[#CACACA]">[ BULLET POINTS ]</p>
            </div>
            <div class="flex flex-col gap-2 mb-12">
                <h2 class="text-xl font-semibold">Lesson Learned</h2>
                <p class="text-justify text-[#CACACA]">Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <x-testimonial />
        </div>

        {{-- End Section: Content --}}

    </div>
@endsection

{{-- Perusahaan, Waktu, Pekerjaan, Teams --}}
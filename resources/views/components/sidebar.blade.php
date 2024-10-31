{{-- Navbar Mobile --}}
<div class="lg:hidden w-full h-16 bg-gradient-to-br from-zinc-700 to-transparent border-[1px] border-white/15 rounded-2xl mb-4">
    
</div>


{{-- Sidebar Start --}}
<div class="hidden lg:block bg-gradient-to-br from-zinc-700 to-transparent border-[1px] border-white/15 w-64 py-6 px-6 rounded-3xl h-[95%] overflow-y-scroll fixed no-scrollbar"> 
    <div class="flex justify-center items-center">
        <div class="relative w-full h-48 border-[1px] border-zinc-700 border-solid rounded-2xl">
            <img class="absolute inset-0 object-cover w-full h-full rounded-2xl" src="{{ asset('img/pp_1.png') }}" alt="Placeholder Image of Aldo Arista">
            <div class="absolute z-10 w-3 h-3 bg-[#7FFFCA] rounded-full top-3 right-3 animate-pulse"></div>
            <div class="absolute w-3 h-3 bg-[#44bb8b] rounded-full top-3 right-3 animate-ping"></div>
        </div>
    </div>

    {{-- CTA Buttons --}}
    <div class="mt-6 flex flex-col justify-center gap-2">
        <a href="https://drive.google.com/file/d/1_PaITRPN8eoMnNbO-801GEEbggxsrbOx/view?usp=sharing" class="flex gap-2 justify-center items-center bg-[#2B4C3F]/50 rounded-xl py-3 px-2 text-[#67E9B3] text-center font-semibold border-[1px] border-[#67E9B3] hover:bg-[#2B4C3F] duration-300">
            See My Resume
            <svg class="inline" width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.5 22H10.5C6.729 22 4.843 22 3.672 20.828C2.5 19.657 2.5 17.771 2.5 14V10C2.5 6.229 2.5 4.343 3.672 3.172C4.843 2 6.739 2 10.53 2C11.136 2 11.621 2 12.03 2.017C12.017 2.097 12.01 2.178 12.01 2.261L12 5.095C12 6.192 12 7.162 12.105 7.943C12.219 8.79 12.48 9.637 13.172 10.329C13.862 11.019 14.71 11.281 15.557 11.395C16.338 11.5 17.308 11.5 18.405 11.5H22.457C22.5 12.034 22.5 12.69 22.5 13.563V14C22.5 17.771 22.5 19.657 21.328 20.828C20.157 22 18.271 22 14.5 22Z" fill="#67E9B3"/>
                <path d="M19.852 7.61699L15.892 4.05399C14.765 3.03899 14.202 2.53099 13.509 2.26599L13.5 4.99999C13.5 7.35699 13.5 8.53599 14.232 9.26799C14.964 9.99999 16.143 9.99999 18.5 9.99999H22.08C21.718 9.29599 21.068 8.71199 19.852 7.61699Z" fill="#67E9B3"/>
            </svg>
        </a>
        
        <a href="https://wa.me/6281338556780" class="flex gap-2 justify-center items-center rounded-xl py-3 px-2 text-[#CACACA] text-center font-semibold border-[1px] border-[#CACACA] hover:bg-[#CACACA]/15 duration-300" target="_blank">
            Let's Connect
            <svg class="inline" width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20.5 4H4.5C3.4 4 2.51 4.9 2.51 6L2.5 18C2.5 19.1 3.4 20 4.5 20H20.5C21.6 20 22.5 19.1 22.5 18V6C22.5 4.9 21.6 4 20.5 4ZM20.1 8.25L13.03 12.67C12.71 12.87 12.29 12.87 11.97 12.67L4.9 8.25C4.79973 8.19371 4.71192 8.11766 4.64189 8.02645C4.57186 7.93525 4.52106 7.83078 4.49258 7.71937C4.46409 7.60796 4.4585 7.49194 4.47616 7.37831C4.49381 7.26468 4.53434 7.15581 4.59528 7.0583C4.65623 6.96079 4.73632 6.87666 4.83073 6.811C4.92513 6.74533 5.03187 6.69951 5.1445 6.6763C5.25712 6.65309 5.37328 6.65297 5.48595 6.67595C5.59863 6.69893 5.70546 6.74453 5.8 6.81L12.5 11L19.2 6.81C19.2945 6.74453 19.4014 6.69893 19.514 6.67595C19.6267 6.65297 19.7429 6.65309 19.8555 6.6763C19.9681 6.69951 20.0749 6.74533 20.1693 6.811C20.2637 6.87666 20.3438 6.96079 20.4047 7.0583C20.4657 7.15581 20.5062 7.26468 20.5238 7.37831C20.5415 7.49194 20.5359 7.60796 20.5074 7.71937C20.4789 7.83078 20.4281 7.93525 20.3581 8.02645C20.2881 8.11766 20.2003 8.19371 20.1 8.25Z" fill="#CACACA"/>
            </svg>
        </a>
    </div>

    {{-- Divider --}}
    <div class="mt-8 h-[1px] w-full bg-zinc-600"></div>

    {{-- Navigation Buttons --}}
    <div class="mt-8 flex flex-col justify-center gap-2">
        <a href="/" class="flex gap-4 items-center {{ Request::is('/') ? 'bg-[#F4F4F4]/15' : '' }} hover:bg-[#F4F4F4]/15 duration-300 rounded-xl py-3 px-4 text-[#F4F4F4] text-center font-semibold">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M21.743 12.331L12.743 2.331C12.364 1.909 11.636 1.909 11.257 2.331L2.25698 12.331C2.12744 12.4746 2.04241 12.6527 2.01223 12.8438C1.98205 13.0348 2.00802 13.2305 2.08698 13.407C2.24698 13.768 2.60498 14 2.99998 14H4.99998V21C4.99998 21.2652 5.10534 21.5196 5.29288 21.7071C5.48041 21.8946 5.73477 22 5.99998 22H8.99998C9.2652 22 9.51955 21.8946 9.70709 21.7071C9.89463 21.5196 9.99998 21.2652 9.99998 21V17H14V21C14 21.2652 14.1053 21.5196 14.2929 21.7071C14.4804 21.8946 14.7348 22 15 22H18C18.2652 22 18.5196 21.8946 18.7071 21.7071C18.8946 21.5196 19 21.2652 19 21V14H21C21.1937 14.0008 21.3834 13.9453 21.546 13.8401C21.7087 13.735 21.8372 13.5848 21.916 13.4079C21.9947 13.231 22.0203 13.0349 21.9896 12.8437C21.9589 12.6525 21.8732 12.4744 21.743 12.331Z" fill="#F4F4F4"/>
            </svg>
            Home
        </a>

        <a href="./about" class="flex gap-4 items-center {{ Request::is('about') ? 'bg-[#F4F4F4]/15' : '' }} hover:bg-[#F4F4F4]/15 duration-300 rounded-xl py-3 px-4 text-[#F4F4F4] text-center font-semibold">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 4C10.6008 3.99974 9.22593 4.36649 8.01273 5.06363C6.79952 5.76077 5.79038 6.76392 5.08603 7.97295C4.38168 9.18199 4.00675 10.5546 3.99868 11.9538C3.9906 13.3531 4.34966 14.7299 5.04001 15.947C5.50662 15.3406 6.10644 14.8496 6.7931 14.512C7.47975 14.1744 8.23485 13.9992 9.00001 14H15C15.7652 13.9992 16.5203 14.1744 17.2069 14.512C17.8936 14.8496 18.4934 15.3406 18.96 15.947C19.6504 14.7299 20.0094 13.3531 20.0013 11.9538C19.9933 10.5546 19.6183 9.18199 18.914 7.97295C18.2096 6.76392 17.2005 5.76077 15.9873 5.06363C14.7741 4.36649 13.3993 3.99974 12 4ZM19.943 18.076C21.28 16.333 22.0032 14.1968 22 12C22 6.477 17.523 2 12 2C6.47701 2 2.00001 6.477 2.00001 12C1.99671 14.1968 2.71992 16.333 4.05701 18.076L4.05201 18.094L4.40701 18.507C5.3449 19.6035 6.5094 20.4836 7.82024 21.0866C9.13109 21.6897 10.5571 22.0013 12 22C14.0273 22.0037 16.0074 21.3879 17.675 20.235C18.3859 19.7438 19.0306 19.163 19.593 18.507L19.948 18.094L19.943 18.076ZM12 6C11.2044 6 10.4413 6.31607 9.87869 6.87868C9.31608 7.44129 9.00001 8.20435 9.00001 9C9.00001 9.79565 9.31608 10.5587 9.87869 11.1213C10.4413 11.6839 11.2044 12 12 12C12.7957 12 13.5587 11.6839 14.1213 11.1213C14.6839 10.5587 15 9.79565 15 9C15 8.20435 14.6839 7.44129 14.1213 6.87868C13.5587 6.31607 12.7957 6 12 6Z" fill="#CACACA"/>
            </svg>
            About
        </a>

        <a href="#" class="flex gap-4 items-center duration-300 rounded-xl py-3 px-4 text-[#F4F4F4]/35 text-center font-semibold pointer-events-none">
            <svg class="fill-[#CACACA]/35" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_2082_154)">
                <path d="M19 4C19.5304 4 20.0391 4.21071 20.4142 4.58579C20.7893 4.96086 21 5.46957 21 6V18C21 18.5304 20.7893 19.0391 20.4142 19.4142C20.0391 19.7893 19.5304 20 19 20H5C4.46957 20 3.96086 19.7893 3.58579 19.4142C3.21071 19.0391 3 18.5304 3 18V6C3 5.46957 3.21071 4.96086 3.58579 4.58579C3.96086 4.21071 4.46957 4 5 4H19ZM19 10H5V17C5.00003 17.2449 5.08996 17.4813 5.25272 17.6644C5.41547 17.8474 5.63975 17.9643 5.883 17.993L6 18H18C18.2449 18 18.4813 17.91 18.6644 17.7473C18.8474 17.5845 18.9643 17.3603 18.993 17.117L19 17V10ZM6 6C5.73478 6 5.48043 6.10536 5.29289 6.29289C5.10536 6.48043 5 6.73478 5 7C5 7.26522 5.10536 7.51957 5.29289 7.70711C5.48043 7.89464 5.73478 8 6 8C6.26522 8 6.51957 7.89464 6.70711 7.70711C6.89464 7.51957 7 7.26522 7 7C7 6.73478 6.89464 6.48043 6.70711 6.29289C6.51957 6.10536 6.26522 6 6 6ZM9 6C8.73478 6 8.48043 6.10536 8.29289 6.29289C8.10536 6.48043 8 6.73478 8 7C8 7.26522 8.10536 7.51957 8.29289 7.70711C8.48043 7.89464 8.73478 8 9 8C9.26522 8 9.51957 7.89464 9.70711 7.70711C9.89464 7.51957 10 7.26522 10 7C10 6.73478 9.89464 6.48043 9.70711 6.29289C9.51957 6.10536 9.26522 6 9 6ZM12 6C11.7348 6 11.4804 6.10536 11.2929 6.29289C11.1054 6.48043 11 6.73478 11 7C11 7.26522 11.1054 7.51957 11.2929 7.70711C11.4804 7.89464 11.7348 8 12 8C12.2652 8 12.5196 7.89464 12.7071 7.70711C12.8946 7.51957 13 7.26522 13 7C13 6.73478 12.8946 6.48043 12.7071 6.29289C12.5196 6.10536 12.2652 6 12 6Z"/>
                </g>
                <defs>
                <clipPath id="clip0_2082_154">
                <rect width="24" height="24" fill="white"/>
                </clipPath>
                </defs>
            </svg>
            Projects
        </a>

        <a href="#" class="flex gap-4 items-center duration-300 rounded-xl py-3 px-4 text-[#F4F4F4]/35 text-center font-semibold pointer-events-none">
            <svg class="fill-[#CACACA]/35" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20.6249 15.8522L11.9999 20.8819L3.37493 15.8522C3.20416 15.7672 3.0074 15.7504 2.82472 15.8053C2.64203 15.8603 2.48713 15.9827 2.39156 16.1478C2.29599 16.3129 2.26692 16.5083 2.31028 16.694C2.35363 16.8798 2.46615 17.0421 2.62493 17.1478L11.6249 22.3978C11.7396 22.4647 11.87 22.4999 12.0027 22.4999C12.1355 22.4999 12.2659 22.4647 12.3806 22.3978L21.3806 17.1478C21.467 17.0989 21.5429 17.0333 21.6038 16.9549C21.6646 16.8764 21.7093 16.7866 21.7353 16.6907C21.7612 16.5949 21.7678 16.4948 21.7547 16.3963C21.7416 16.2979 21.7091 16.203 21.6591 16.1172C21.6091 16.0314 21.5425 15.9564 21.4632 15.8966C21.384 15.8367 21.2936 15.7932 21.1974 15.7685C21.1012 15.7439 21.0011 15.7386 20.9028 15.7529C20.8045 15.7673 20.7101 15.801 20.6249 15.8522Z"/>
                <path d="M20.6249 11.3522L11.9999 16.3819L3.37493 11.3522C3.20416 11.2672 3.0074 11.2504 2.82472 11.3053C2.64203 11.3603 2.48713 11.4827 2.39156 11.6478C2.29599 11.8129 2.26692 12.0083 2.31028 12.194C2.35363 12.3798 2.46615 12.5421 2.62493 12.6478L11.6249 17.8978C11.7396 17.9647 11.87 17.9999 12.0027 17.9999C12.1355 17.9999 12.2659 17.9647 12.3806 17.8978L21.3806 12.6478C21.467 12.5989 21.5429 12.5333 21.6038 12.4549C21.6646 12.3764 21.7093 12.2866 21.7353 12.1907C21.7612 12.0949 21.7678 11.9948 21.7547 11.8963C21.7416 11.7979 21.7091 11.703 21.6591 11.6172C21.6091 11.5314 21.5425 11.4564 21.4632 11.3966C21.384 11.3367 21.2936 11.2932 21.1974 11.2685C21.1012 11.2439 21.0011 11.2386 20.9028 11.2529C20.8045 11.2673 20.7101 11.301 20.6249 11.3522Z"/>
                <path d="M2.62499 8.14781L11.625 13.3978C11.7397 13.4647 11.87 13.4999 12.0028 13.4999C12.1356 13.4999 12.2659 13.4647 12.3806 13.3978L21.3806 8.14781C21.4938 8.08176 21.5878 7.98719 21.653 7.87353C21.7183 7.75987 21.7527 7.63108 21.7527 7.5C21.7527 7.36893 21.7183 7.24014 21.653 7.12648C21.5878 7.01281 21.4938 6.91824 21.3806 6.85219L12.3806 1.60219C12.2659 1.53531 12.1356 1.50008 12.0028 1.50008C11.87 1.50008 11.7397 1.53531 11.625 1.60219L2.62499 6.85219C2.51177 6.91824 2.41784 7.01281 2.35256 7.12648C2.28728 7.24014 2.25293 7.36893 2.25293 7.5C2.25293 7.63108 2.28728 7.75987 2.35256 7.87353C2.41784 7.98719 2.51177 8.08176 2.62499 8.14781Z"/>
            </svg>
            Blog
        </a>
    </div>

    {{-- Divider --}}
    <div class="mt-8 h-[1px] w-full bg-zinc-600"></div>

    {{-- Social Media --}}
    <div class="flex justify-between px-4 mt-8">
        {{-- Linkedin --}}
        <a href="https://www.linkedin.com/in/aldo-arista/" class="group" target="_blank">
            <svg class="fill-[#CACACA] group-hover:fill-[#CACACA] duration-300 hover:scale-125" width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_2082_167)">
                <path d="M21.8333 0C22.5406 0 23.2189 0.280951 23.719 0.781048C24.219 1.28115 24.5 1.95942 24.5 2.66667V21.3333C24.5 22.0406 24.219 22.7189 23.719 23.219C23.2189 23.719 22.5406 24 21.8333 24H3.16667C2.45942 24 1.78115 23.719 1.28105 23.219C0.780951 22.7189 0.5 22.0406 0.5 21.3333V2.66667C0.5 1.95942 0.780951 1.28115 1.28105 0.781048C1.78115 0.280951 2.45942 0 3.16667 0H21.8333ZM21.1667 20.6667V13.6C21.1667 12.4472 20.7087 11.3416 19.8936 10.5264C19.0784 9.71128 17.9728 9.25333 16.82 9.25333C15.6867 9.25333 14.3667 9.94667 13.7267 10.9867V9.50667H10.0067V20.6667H13.7267V14.0933C13.7267 13.0667 14.5533 12.2267 15.58 12.2267C16.0751 12.2267 16.5499 12.4233 16.8999 12.7734C17.25 13.1235 17.4467 13.5983 17.4467 14.0933V20.6667H21.1667ZM5.67333 7.41333C6.26742 7.41333 6.83717 7.17733 7.25725 6.75725C7.67733 6.33717 7.91333 5.76742 7.91333 5.17333C7.91333 3.93333 6.91333 2.92 5.67333 2.92C5.07571 2.92 4.50257 3.1574 4.07999 3.57999C3.6574 4.00257 3.42 4.57571 3.42 5.17333C3.42 6.41333 4.43333 7.41333 5.67333 7.41333ZM7.52667 20.6667V9.50667H3.83333V20.6667H7.52667Z"/>
                </g>
                <defs>
                <clipPath id="clip0_2082_167">
                <rect width="24" height="24" fill="white" transform="translate(0.5)"/>
                </clipPath>
                </defs>
            </svg>
        </a>

        {{-- Instagram --}}
        <a href="https://www.instagram.com/aldo_fse/" class="group" target="_blank">
            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="fill-[#CACACA] group-hover:fill-[#CACACA] duration-300 hover:scale-125">
                <g clip-path="url(#clip0_2082_169)">
                <path d="M13.7336 0.000244141C15.0835 0.00384396 15.7687 0.0110436 16.3603 0.0278427L16.5931 0.0362423C16.8619 0.0458418 17.127 0.0578411 17.4474 0.0722404C18.7242 0.132237 19.5953 0.333827 20.3597 0.630212C21.1516 0.934996 21.8188 1.34778 22.486 2.01374C23.0961 2.61359 23.5683 3.33918 23.8695 4.14003C24.1659 4.90439 24.3675 5.77555 24.4275 7.05348C24.4419 7.37267 24.4539 7.63785 24.4635 7.90784L24.4707 8.14063C24.4887 8.731 24.4959 9.41616 24.4983 10.7661L24.4995 11.6612V13.2332C24.5024 14.1084 24.4932 14.9836 24.4719 15.8586L24.4647 16.0914C24.4551 16.3614 24.4431 16.6266 24.4287 16.9458C24.3687 18.2237 24.1647 19.0937 23.8695 19.8592C23.5691 20.6605 23.0969 21.3863 22.486 21.9855C21.886 22.5955 21.1604 23.0676 20.3597 23.369C19.5953 23.6654 18.7242 23.867 17.4474 23.927C17.1627 23.9404 16.8779 23.9524 16.5931 23.963L16.3603 23.9702C15.7687 23.987 15.0835 23.9954 13.7336 23.9978L12.8385 23.999H11.2677C10.3921 24.002 9.51646 23.9928 8.64108 23.9714L8.40829 23.9642C8.12343 23.9534 7.83864 23.941 7.55393 23.927C6.2772 23.867 5.40604 23.6654 4.64048 23.369C3.83972 23.0683 3.11442 22.5961 2.51539 21.9855C1.90467 21.3859 1.43211 20.6603 1.13066 19.8592C0.834275 19.0949 0.632686 18.2237 0.572689 16.9458C0.55932 16.661 0.54732 16.3763 0.53669 16.0914L0.530691 15.8586C0.508579 14.9837 0.498578 14.1084 0.500692 13.2332V10.7661C0.497343 9.89086 0.506144 9.01562 0.527091 8.14063L0.535491 7.90784C0.54509 7.63785 0.557089 7.37267 0.571489 7.05348C0.631486 5.77555 0.833075 4.90559 1.12946 4.14003C1.43078 3.33836 1.90428 2.61254 2.51659 2.01374C3.11547 1.40354 3.84029 0.931381 4.64048 0.630212C5.40604 0.333827 6.276 0.132237 7.55393 0.0722404C7.87311 0.0578411 8.1395 0.0458418 8.40829 0.0362423L8.64108 0.0290426C9.51606 0.00772301 10.3913 -0.00147741 11.2665 0.00144399L13.7336 0.000244141ZM12.5001 5.99994C10.9089 5.99994 9.38281 6.63205 8.25765 7.75721C7.13249 8.88237 6.50039 10.4084 6.50039 11.9996C6.50039 13.5908 7.13249 15.1169 8.25765 16.2421C9.38281 17.3672 10.9089 17.9993 12.5001 17.9993C14.0913 17.9993 15.6173 17.3672 16.7425 16.2421C17.8677 15.1169 18.4998 13.5908 18.4998 11.9996C18.4998 10.4084 17.8677 8.88237 16.7425 7.75721C15.6173 6.63205 14.0913 5.99994 12.5001 5.99994ZM12.5001 8.39981C12.9728 8.39974 13.4409 8.49277 13.8777 8.6736C14.3145 8.85444 14.7114 9.11953 15.0457 9.45375C15.38 9.78797 15.6453 10.1848 15.8262 10.6215C16.0072 11.0582 16.1004 11.5263 16.1005 11.999C16.1006 12.4718 16.0075 12.9399 15.8267 13.3767C15.6459 13.8134 15.3808 14.2103 15.0466 14.5447C14.7123 14.879 14.3155 15.1442 13.8788 15.3252C13.4421 15.5062 12.974 15.5994 12.5013 15.5994C11.5465 15.5994 10.6309 15.2202 9.95582 14.5451C9.28073 13.87 8.90146 12.9544 8.90146 11.9996C8.90146 11.0449 9.28073 10.1293 9.95582 9.45418C10.6309 8.77908 11.5465 8.39981 12.5013 8.39981M18.801 4.20003C18.4031 4.20003 18.0216 4.35806 17.7403 4.63935C17.4591 4.92064 17.301 5.30215 17.301 5.69995C17.301 6.09776 17.4591 6.47927 17.7403 6.76056C18.0216 7.04185 18.4031 7.19988 18.801 7.19988C19.1988 7.19988 19.5803 7.04185 19.8616 6.76056C20.1429 6.47927 20.3009 6.09776 20.3009 5.69995C20.3009 5.30215 20.1429 4.92064 19.8616 4.63935C19.5803 4.35806 19.1988 4.20003 18.801 4.20003Z"/>
                </g>
                <defs>
                <clipPath id="clip0_2082_169">
                <rect width="24" height="24" fill="white" transform="translate(0.5)"/>
                </clipPath>
                </defs>
            </svg>
        </a>

        {{-- Github --}}
        <a href="https://github.com/aldoawp" class="group" target="_blank">
            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="fill-[#CACACA] group-hover:fill-[#CACACA] duration-300 hover:scale-125">
                <g clip-path="url(#clip0_2082_171)">
                <path d="M8.60938 16.75C8.65104 16.6875 8.63542 16.6198 8.5625 16.5469C8.46875 16.474 8.39583 16.4635 8.34375 16.5156C8.30208 16.5781 8.31771 16.6458 8.39062 16.7188C8.48438 16.7917 8.55729 16.8021 8.60938 16.75ZM8.17188 16.1094C8.11979 16.0365 8.05729 16.0156 7.98438 16.0469C7.92188 16.0885 7.92188 16.151 7.98438 16.2344C8.05729 16.3177 8.11979 16.3438 8.17188 16.3125C8.23438 16.2708 8.23438 16.2031 8.17188 16.1094ZM7.53125 15.4844C7.55208 15.4427 7.52604 15.401 7.45312 15.3594C7.38021 15.3385 7.33854 15.349 7.32812 15.3906C7.29688 15.4427 7.31771 15.4844 7.39062 15.5156C7.47396 15.5365 7.52083 15.526 7.53125 15.4844ZM7.85938 15.8438C7.88021 15.8333 7.88802 15.8099 7.88281 15.7734C7.8776 15.737 7.85938 15.7083 7.82812 15.6875C7.76562 15.6146 7.71354 15.599 7.67188 15.6406C7.63021 15.6823 7.63542 15.7396 7.6875 15.8125C7.75 15.875 7.80729 15.8854 7.85938 15.8438ZM9.20312 17.0156C9.22396 16.9427 9.17708 16.8854 9.0625 16.8438C8.96875 16.8125 8.90104 16.8333 8.85938 16.9062C8.83854 16.9792 8.88542 17.0365 9 17.0781C9.09375 17.1094 9.16146 17.0885 9.20312 17.0156ZM9.85938 17.0625C9.85938 16.9792 9.79688 16.9375 9.67188 16.9375C9.56771 16.9375 9.51562 16.9792 9.51562 17.0625C9.51562 17.1458 9.57292 17.1875 9.6875 17.1875C9.80208 17.1875 9.85938 17.1458 9.85938 17.0625ZM10.4688 16.9531C10.4479 16.8802 10.3802 16.8542 10.2656 16.875C10.151 16.8958 10.1042 16.9427 10.125 17.0156C10.1458 17.099 10.2083 17.1302 10.3125 17.1094C10.4167 17.0885 10.4688 17.0365 10.4688 16.9531ZM20.5 12C20.5 9.79167 19.7188 7.90625 18.1562 6.34375C16.5938 4.78125 14.7083 4 12.5 4C10.2917 4 8.40625 4.78125 6.84375 6.34375C5.28125 7.90625 4.5 9.79167 4.5 12C4.5 13.7396 5.01042 15.3047 6.03125 16.6953C7.05208 18.0859 8.36458 19.0521 9.96875 19.5938C10.1562 19.625 10.2943 19.599 10.3828 19.5156C10.4714 19.4323 10.5156 19.3281 10.5156 19.2031C10.5156 18.6615 10.5104 18.1667 10.5 17.7188C10.4375 17.7292 10.3568 17.7422 10.2578 17.7578C10.1589 17.7734 9.97396 17.7839 9.70312 17.7891C9.43229 17.7943 9.18229 17.7734 8.95312 17.7266C8.72396 17.6797 8.4974 17.5755 8.27344 17.4141C8.04948 17.2526 7.89583 17.0365 7.8125 16.7656C7.57292 16.151 7.27604 15.7656 6.92188 15.6094C6.90104 15.599 6.8776 15.5807 6.85156 15.5547L6.72656 15.4297L6.61719 15.2812L6.67969 15.1641L6.98438 15.1094C7.04688 15.1094 7.125 15.1198 7.21875 15.1406C7.3125 15.1615 7.46875 15.2422 7.6875 15.3828C7.90625 15.5234 8.07812 15.7083 8.20312 15.9375C8.36979 16.2292 8.5651 16.4479 8.78906 16.5938C9.01302 16.7396 9.23958 16.8125 9.46875 16.8125C9.69792 16.8125 9.89583 16.7943 10.0625 16.7578C10.2292 16.7214 10.3854 16.6719 10.5312 16.6094C10.6042 16.1198 10.776 15.7604 11.0469 15.5312C10.5365 15.4688 10.0885 15.3724 9.70312 15.2422C9.31771 15.112 8.9375 14.9089 8.5625 14.6328C8.1875 14.3568 7.89844 13.9609 7.69531 13.4453C7.49219 12.9297 7.39062 12.3073 7.39062 11.5781C7.39062 10.7552 7.66667 10.0417 8.21875 9.4375C7.96875 8.79167 7.99479 8.08333 8.29688 7.3125C8.49479 7.25 8.77865 7.28906 9.14844 7.42969C9.51823 7.57031 9.83333 7.72396 10.0938 7.89062L10.5 8.14062C11.1042 7.96354 11.7708 7.875 12.5 7.875C13.2292 7.875 13.8958 7.96354 14.5 8.14062C14.6146 8.06771 14.763 7.97396 14.9453 7.85938C15.1276 7.74479 15.4167 7.60938 15.8125 7.45312C16.2083 7.29688 16.5052 7.25 16.7031 7.3125C17.0052 8.08333 17.0312 8.79167 16.7812 9.4375C17.3333 10.0417 17.6094 10.7552 17.6094 11.5781C17.6094 12.1719 17.5365 12.6953 17.3906 13.1484C17.2448 13.6016 17.0599 13.9661 16.8359 14.2422C16.612 14.5182 16.3333 14.75 16 14.9375C15.6667 15.125 15.3411 15.2604 15.0234 15.3438C14.7057 15.4271 14.349 15.4896 13.9531 15.5312C14.3177 15.8542 14.5 16.349 14.5 17.0156C14.5 17.4323 14.4974 17.8958 14.4922 18.4062C14.487 18.9167 14.4844 19.1823 14.4844 19.2031C14.4844 19.3281 14.5286 19.4323 14.6172 19.5156C14.7057 19.599 14.8438 19.625 15.0312 19.5938C16.6354 19.0521 17.9479 18.0859 18.9688 16.6953C19.9896 15.3047 20.5 13.7396 20.5 12ZM24.5 4.5V19.5C24.5 20.7396 24.0599 21.7995 23.1797 22.6797C22.2995 23.5599 21.2396 24 20 24H5C3.76042 24 2.70052 23.5599 1.82031 22.6797C0.940104 21.7995 0.5 20.7396 0.5 19.5V4.5C0.5 3.26042 0.940104 2.20052 1.82031 1.32031C2.70052 0.440104 3.76042 0 5 0H20C21.2396 0 22.2995 0.440104 23.1797 1.32031C24.0599 2.20052 24.5 3.26042 24.5 4.5Z"/>
                </g>
                <defs>
                <clipPath id="clip0_2082_171">
                <rect width="24" height="24" fill="white" transform="translate(0.5)"/>
                </clipPath>
                </defs>
            </svg>
        </a>
    </div>
</div>
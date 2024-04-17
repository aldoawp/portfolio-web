@extends('app')

@section('content')
    <div class="w-full h-full bg-gradient-to-br from-zinc-700 to-transparent border-[1px] border-white/15 rounded-3xl py-12 px-8 mb-4">
        <div class="flex justify-between items-center mb-12">
            <x-button_2 :message="'Back'" :url="'/'"/>
            <div class="w-full border-[1px] border-dashed border-[#CACACA] ml-4 mr-4"></div>
            <x-button_1 :message="'Live Demo'" :url="'#'"/>
        </div>
        
        <h1 class="text-3xl text-[#F4F4F4] font-semibold mb-6">PT Karyamega Putra Mandiri POS</h1>
        <img src="https://via.placeholder.com/562" alt="Placeholder image" class="object-cover w-full h-[25rem] rounded-2xl">
    </div>
@endsection

{{-- Perusahaan, Waktu, Pekerjaan, Teams --}}
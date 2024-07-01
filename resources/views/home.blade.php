@extends('navbar')

@section('content')
<div class="w-auto h-screen py-12">
    <div class="flex flex-col lg:flex-row bg-white min-h-screen">
        <div class="flex items-center text-center lg:text-left px-8 md:px-12 lg:w-1/2 py-12">
            <div>
                <span class="text-2xl font-semibold text-gray-800 md:text-3xl">🌍 Welcome to Tour<span class="ml-2 text-blue-600"> & Travel</span> 🌍</span>
                <h1 class="py-5 text-5xl font-semibold text-gray-800 md:text-6xl">Home<span class="ml-2 text-blue-600">Dashboard</span></h1>
                <p class="mt-2 text-sm text-gray-500 md:text-lg">
                    Discover amazing destinations and travel experiences.
                </p>
            </div>
        </div>
        <div class="hidden lg:block lg:w-1/2">
            <div class="h-full object-cover" style="background-image:url('/admin_assets/img/bg-web.png')">
                <div class="h-full bg-blue-500 opacity-15"></div>
            </div>
        </div>
    </div>
</div>
@endsection

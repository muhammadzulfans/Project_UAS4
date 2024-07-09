{{-- @extends('navbar')

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
@endsection --}}




@extends('navbar')

@section('content')
<div class="w-auto h-screen py-12">
    <div class="flex flex-col lg:flex-row bg-white min-h-screen">
        <div class="flex items-center text-center lg:text-left px-8 md:px-12 lg:w-1/2 py-12">
            <div>
                <span class="text-4xl font-bold text-gray-900 md:text-5xl">Welcome to Tour<span class="text-blue-600"> & Travel</span></span>
                <h1 class="py-4 text-6xl font-bold text-gray-900 md:text-7xl">Home<span class="text-blue-600">Dashboard</span></h1>
                <p class="mt-2 text-lg text-gray-700 md:text-xl">
                    Discover amazing destinations and travel experiences.
                </p>
                <div class="mt-8">
                    <a href="#" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg shadow-lg uppercase font-semibold tracking-wide text-sm hover:bg-blue-700">Explore Destinations</a>
                </div>
            </div>
        </div>
        <div class="hidden lg:block lg:w-1/2 relative">
            <div class="h-full object-cover" style="background-image: url('/admin_assets/img/bg-web.png');">
                <div class="h-full bg-gray-600 opacity-15"></div>
            </div>
            <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-transparent"></div>
        </div>
    </div>
</div>
@endsection

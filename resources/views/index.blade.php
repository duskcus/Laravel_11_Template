@extends('layouts.layout')


{{-- @SECTION FOR THE START CONTENT --}}
@section('content')
    <!-- Hero section -->
    <section class="bg-neutral-content text-center py-10">
        <h1>Welcome to our website</h1>
        <p>This website was created using Laravel, Livewire/Alpine, Tailwind, DaisyUI and Chart.js.</p>
        <br>
        <button class="btn btn-secondary text-white ">Learn More</button>
    </section>

    <!-- Featured content section -->
    <section class="text-center py-6">
        <div class="flex flex-wrap">
            <div class="w-full md:w-1/3 px-4">
                <h2 class="text-xl font-bold">Integrated API</h2>
                <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="{{route('api')}}" class="mt-2"><button class="btn btn-secondary text-white my-6">Try Now</button></a>
            </div>
            <div class="w-full md:w-1/3 px-4">
                <h2 class="text-xl font-bold">Dashboard</h2>
                <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="{{route('dashboard')}}" class="mt-2"><button class="btn btn-secondary text-white my-6">Try Now</button></a>
            </div>
            <div class="w-full md:w-1/3 px-4">
                <h2 class="text-xl font-bold">Marketplace</h2>
                <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="" class="mt-2"><button class="btn btn-secondary text-white my-6">Try Now</button></a>
            </div>
        </div>
    </section>


    {{-- @ENDSECTION FOR THE END OF CONTENT --}}
@endsection

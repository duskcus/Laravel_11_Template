@extends('layouts.layout')


{{-- @SECTION FOR THE START CONTENT --}}
@section('content')
    <!-- Hero section -->
    <section class="bg-neutral-content text-center py-10">
        <h1>Welcome to Your Website</h1>
        <p>This is a website created using Laravel, Tailwind, DaisyUI and Chart.js.</p>
        <br>
        <button class="btn btn-secondary ">Learn More</button>
    </section>

    <!-- Featured content section -->
    <section class="text-center py-6">
        <div class="flex flex-wrap">
            <div class="w-full md:w-1/3 px-4">
                <h2 class="text-xl font-bold">Feature 1</h2>
                <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="w-full md:w-1/3 px-4">
                <h2 class="text-xl font-bold">Feature 2</h2>
                <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="w-full md:w-1/3 px-4">
                <h2 class="text-xl font-bold">Feature 3</h2>
                <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
    </section>


    {{-- @ENDSECTION FOR THE END OF CONTENT --}}
@endsection

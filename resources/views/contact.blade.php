@extends('layouts.default')


{{-- @SECTION FOR THE START CONTENT --}}
@section('content')


<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-4">Contact</h1>

    <p class="mb-4">We would love to hear from you. Please feel free to get in touch with us using the form below:</p>

    <form action="#" method="POST" class="w-full max-w-lg">
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
            <input type="text" id="name" name="name" placeholder="Your Name"
                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <div class="mb-4">
            <label for="email" class="block text-gray-700 font-bold mb-2">Email:</label>
            <input type="email" id="email" name="email" placeholder="Your Email Address"
                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <div class="mb-4">
            <label for="message" class="block text-gray-700 font-bold mb-2">Message:</label>
            <textarea id="message" name="message" placeholder="Your Message" rows="5"
                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
        </div>

        <div class="flex items-center justify-end">
            <button type="submit"
                class="bg-primary btn btn-secondary text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Send</button>
        </div>
    </form>
</div>


    {{-- @ENDSECTION FOR THE END OF CONTENT --}}
    @endsection

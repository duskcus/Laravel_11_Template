@extends('layouts.default')


{{-- @SECTION FOR THE START CONTENT --}}
@section('content')


<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-4">Products</h1>
    {{-- PRODUCT CARDS --}}
    @foreach ($products as $product)
        {{-- PRODUCT CARD CODE --}}
        <p class="font-semibold text-lg">{{ $product['name'] }} - {{ $product['amount'] }}x</p>
    @endforeach

</div>


    {{-- @ENDSECTION FOR THE END OF CONTENT --}}
    @endsection

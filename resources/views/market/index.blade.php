@extends('layouts.default')

{{-- @SECTION FOR THE START CONTENT --}}
@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-4">Market</h1>
        {{-- PRODUCT CARDS --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
            {{-- PRODUCT CARD CODE --}}
            @foreach ($products as $product)
                @if ($product['amount'] > 0)
                    <div class="bg-white p-4 rounded-lg shadow-md">
                    <h2 class="font-semibold text-xl mb-2"><a
                            href="{{ route('market.show', $product['id']) }}">{{ $product['name'] }}</a></h2>
                    <img src="https://placehold.co/300x200/FFFFFF/000000.png" class="w-full h-auto mb-2">
                    <p class="font-semibold text-lg">In stock: {{ $product['amount'] }}</p>
                </div>
                @endif

            @endforeach
        </div>
    </div>

    {{-- @ENDSECTION FOR THE END OF CONTENT --}}
@endsection

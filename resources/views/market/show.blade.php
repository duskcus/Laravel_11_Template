@extends('layouts.default')


{{-- @SECTION FOR THE START CONTENT --}}
@section('content')

    <a href="{{ route('market.index') }}"><span class="lg:hidden material-symbols-outlined pb-6">arrow_back</span></a>
    <img src="{{ $product['image'] }}" alt="{{ $product['description'] }}">
    <h1 class="capitalize text-2xl mt-3 mb-2">{{ $product['name'] }}</h1>
    <h2 class="text-lg font-semibold mb-2">€ {{ $product['price'] }}</h2>

    <div class="text-sm">
        <p>Kleur: {{ $product['color'] }}</p>
        <p>Hoogte: {{ $product['height_cm'] }} cm</p>
        <p>Breedte: {{ $product['width_cm'] }} cm</p>
        <p>Diepte: {{ $product['depth_cm'] }} cm</p>
        <p>Gewicht: {{ $product['weight_gr'] }} gram</p>
        <p class="pt-4">{{ $product['description'] }}</p>
    </div>

    <div class="flex col py-3">
        <span class="material-symbols-outlined text-[#73A589]">check</span>
        <p class="text-sm">Op voorraad</p>
    </div>

    <button class="text-center rounded-2xl">Voeg toe</button>

    {{-- @ENDSECTION FOR THE END OF CONTENT --}}
@endsection

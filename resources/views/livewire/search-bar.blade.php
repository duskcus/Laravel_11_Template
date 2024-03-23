<div class="relative">
    <input wire:model.live.debounce.200ms="search" class="p-3 rounded-sm border w-[250px]" placeholder="Type to search products...">

    @if(sizeof($products) > 0)
        <div class="absolute z-10 mt-1 text-center w-full">
            <ul class="inline-block mx-auto w-[250px]">
                @foreach ($products as $product)
                    <li class="px-4 py-2 bg-gray-100 cursor-pointer">{{ $product->name }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>

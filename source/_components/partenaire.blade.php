@props(['mode' => 'odd', 'title', 'subtitle', 'image', 'image_alt', 'link'])

<div class="relative">
    <div @if ($mode === 'odd') class="flex flex-row-reverse" @endif>
        <img class="relative max-w-772 max-h-463 @if ($mode === 'odd') right-32 @endif" src="{{ $image }}" alt="{{ $image_alt }}">
    </div>
    <div class="absolute px-9 -top-7 green-bloc5 w-300 h-533 @if ($mode === 'odd') left-20 @else right-44 @endif pt-45px">
        <div class="relative mx-auto text-3xl text-center text-white w-213 h-201 green-title pt-55px">
            <p class="m-0 font-sans">{{ $title }}</p>
            <p class="mt-0 font-script">{{ $subtitle }}</p>
            <div class="absolute h-1.4 bg-gray-700 w-15 top-95px @if ($mode === 'odd') -right-80px @else -left-80px @endif"></div>
        </div>
        <p class="-mt-5 text-sm text-center text-gray-800 font-base">
            {{ $slot }}
        </p>
    </div>
    <a href="{{ $link }}" target="_blank">
        <div class="absolute py-2 font-sans text-white bg-gray-800 -bottom-5 px-7 @if ($mode === 'odd') right-44 @else left-12 @endif">
            découvrir ce
            <span class="font-bold underline text-anis font-script">partenaire</span>
        </div>
    </a>
</div>

@extends('_layouts.master')

@section('content')
<div class="relative w-full overflow-hidden h-349">
    <div class="absolute left-0 right-0 z-10 mx-auto my-0 text-center text-white w-544 title h-514 top-80px">
        <h1 class="font-sans text-7xl" style="margin: revert;">
            {{ $page->title1 }}
            <span class="block font-script text-9xl text-anis">{{ $page->title2 }}</span>
        </h1>
    </div>
    <div class="relative z-0 w-full text-anis h-698">
        <img class="min-w-full min-h-349" src="{{ $page->title_img }}"" alt="">
    </div>
</div>

@yield('pagecontent')

@endsection

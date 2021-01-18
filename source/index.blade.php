---
title: Créa Réceptions – Traiteur événementiel – Roquevaire – Marseille
use_flickity: true
sliders: [
    {
        title1: le choix,
        title2: du goût,
        title_img: /assets/img/content/1_COVER_1380x700.png
    },
    {
        title1: prestations,
        title2: sur mesure,
        title_img: /assets/img/content/main-home.png
    },
    {
        title1: le plaisir,
        title2: des yeux,
        title_img: /assets/img/content/2_COVER_1380x700.png
    }
]
---
@extends('_layouts.master')

@section('content')
<script>
    $(document).ready(function() {
        $('.carousel').flickity({autoPlay: true,});
    });
</script>
<div id="slider" class="relative w-full overflow-hidden h-698">
    <div class="carousel flickity-enabled is-draggable">
@foreach ($page->sliders as $slider)
        <div class="absolute min-w-full carousel-cell h-683">
            <div class="absolute left-0 right-0 z-10 mx-auto my-0 text-center text-white w-544 title h-514 top-80px">
                <h1 class="font-sans text-7xl pt-100" style="margin: revert;">
                    {{ $slider->title1 }}
                    <span class="block font-script text-9xl text-anis">{{ $slider->title2 }}</span>
                </h1>
            </div>
            <div class="h-698">
                <div class="absolute w-full h-698"></div>
                <img src="{{ $page->baseUrl}}{{ $slider->title_img }}"/>
            </div>
        </div>
@endforeach
    </div>
</div>
<div id="container" class="relative mx-auto max-w-1166">
    <div class="absolute z-20 w-full top-4 grey-background h-1/2"></div>
    <div class="absolute top-auto z-20 w-1/2 grey-background -bottom-10 h-1/3"></div>
    <div class="relative mx-auto max-w-929">
        <div class="relative z-50 mt-80px">
            <div class="w-full overflow-hidden">
                <img src="{{ $page->baseUrl }}\assets\img\content\FB_IMG_15166378787131.jpg" alt="">
            <\div>
            <div></div>
        </div>
        <div></div>
        <div></div>
    </div>
</div>
@endsection

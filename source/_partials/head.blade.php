<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="referrer" content="always">
    <link rel="canonical" href="{{ $page->getUrl() }}">
    <title>{{ $page->title }}</title>
    <meta name="description" content="{{ $page->description }}">
    <link rel="icon" type="image/png" href="{{ $page->baseUrl }}/assets/img/favicon.png">
    <link rel="stylesheet" href="{{ $page->baseUrl }}{{ mix('css/main.css', 'assets/build') }}">
    <link href='https://fonts.googleapis.com/css?family=Nunito:700' rel='stylesheet' type='text/css' />
    <!-- Add jQuery library -->
@if ($page->use_fancybox || $page->use_flickity)
    <script type="text/javascript" src="{{ $page->baseUrl }}/assets/js/jquery-1.12.1.min.js"></script>
@endif
    <!-- Fancybox -->
@if($page->use_fancybox)
    <script type="text/javascript" src="{{ $page->baseUrl }}/assets/js/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
    <link rel="stylesheet" href="{{ $page->baseUrl }}/assets/js/fancybox/source/jquery.fancybox.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{ $page->baseUrl }}/assets/js/fancybox/source/helpers/jquery.fancybox-buttons3447.css?v=1.0.5" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{ $page->baseUrl }}/assets/js/fancybox/source/helpers/jquery.fancybox-thumbsf2ad.css?v=1.0.7" type="text/css" media="screen" />
    <script type="text/javascript" src="{{ $page->baseUrl }}/assets/js/fancybox/source/helpers/jquery.fancybox-buttons3447.js?v=1.0.5"></script>
    <script type="text/javascript" src="{{ $page->baseUrl }}/assets/js/fancybox/source/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="{{ $page->baseUrl }}/assets/js/fancybox/source/helpers/jquery.fancybox-mediac924.js?v=1.0.6"></script>
    <script type="text/javascript" src="{{ $page->baseUrl }}/assets/js/fancybox/source/helpers/jquery.fancybox-thumbsf2ad.js?v=1.0.7"></script>@endif
    <!-- Flickity -->
@if($page->use_flickity)
    <link rel="stylesheet" href="{{ $page->baseUrl }}/assets/css/flickity.css" type="text/css" media="screen" />
@endif
    <!-- Hamburger menu -->
@if($page->use_responsive_nav)
    <link rel="stylesheet" href="{{ $page->baseUrl }}/assets/css/responsive-nav.css" type="text/css" media="screen" />
@endif
</head>

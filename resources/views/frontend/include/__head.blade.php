<head>
    <meta name="viewport" content="width=650px"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="@yield('meta_keywords',setting('site_title','global'))">
    <meta name="description" content="@yield('meta_description',setting('site_title','global'))">
    <link rel="canonical" href="{{ url()->current() }}"/>
    <link rel="shortcut icon" href="{{ asset(setting('site_favicon','global')) }}" type="image/x-icon"/>

    <link rel="icon" href="{{ asset(setting('site_favicon','global')) }}" type="image/x-icon"/>
    <link rel="stylesheet" href="/global/css/fontawesome.min.css"/>
    <link rel="stylesheet" href="/frontend/css/vendor/bootstrap.min.css"/>
    <link rel="stylesheet" href="/frontend/css/animate.css"/>
    <link rel="stylesheet" href="/frontend/css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="/frontend/css/nice-select.css"/>
    <link rel="stylesheet" href="/global/css/datatables.min.css"/>
    @stack('style')
    @notifyCss
    @yield('style')
    <link rel="stylesheet" href="/global/css/custom.css"/>
    <link rel="stylesheet" href="/frontend/css/magnific-popup.css"/>
    @if(setting('site_animation','permission'))
        <link rel="stylesheet" href="/frontend/css/aos.css"/>
    @endif
    <link rel="stylesheet" href="/frontend/css/styles.css?var=2.1"/>

    <!-- <style>
        {{ \App\Models\CustomCss::first()->css }}
    </style> -->

    <title>{{ setting('site_title', 'global') }} - @yield('title')</title>


</head>

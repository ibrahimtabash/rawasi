<!doctype html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="{{ __('marketing.meta_description') }}">
    <title>@yield('title', __('marketing.site_name'))</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="marketing-body">
    @include('components.site-header')
    <main>@yield('content')</main>
    @include('components.site-footer')
</body>

</html>

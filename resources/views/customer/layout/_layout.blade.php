<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>{{ env('SITE_NAME') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/site.css') }}">
    <link rel="stylesheet" href="{{ asset('customer/css/layout/header.css') }}">
    <link rel="stylesheet" href="{{ asset('customer/css/layout/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('customer/css/pages/Home/aboutus.css') }}">
    <link rel="stylesheet" href="{{ asset('customer/css/pages/Cart/index.css') }}">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    @yield('css')
</head>

<body>
    <!-- $items is shared to all pages, check app/AdminController or app/AppController  -->
    @include('customer.layout.header')
    @yield('content')
    @include('customer.layout.footer')
    
    
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" 
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" 
    crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/51de929979.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
@yield('js')
@stack('script')
</html>
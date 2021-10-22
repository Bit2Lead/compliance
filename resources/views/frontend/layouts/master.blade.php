<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
        <title>Compliance Training (BD) Limited.</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Compliance" name="keywords">
        <meta content="A Dedicated Platform for Compliance Training" name="description">
        @yield('metas')
        <!-- Favicon -->
        <link href="{{ asset('assets/img/favicon.ico') }}" rel="icon">

        <!-- Google Font -->
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <!-- bootstrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">


        <link href="{{ asset('assets/lib/slick/slick.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/libs/slick/slick-theme.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/css/print.css') }}" media="print" />
        @yield('style')
</head>
<body>
	@include('frontend.layouts.header')

    @yield('content')

	@include('frontend.layouts.footer')


    @yield('script')
</body>
</html>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Picker</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>
<body>

@include('layouts/inc/admin-navbar')

<div id='layoutSidenav'>

    @include('layouts/inc/admin-sidebar')

    <div id = 'layoutsSidenav_content'>
        <Main>
            
            @yield('content')

        </Main>

    @include('layouts/inc/admin-footer')
       
    </div>

</div>

    
<!-- Required vendors -->
    <script src="{{ asset('assets/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/deznav-init.js') }}"></script>
    
   
	<script src="./vendor/owl-carousel/owl.carousel.js"></script>
	
	
	<!-- Dashboard 1 -->
    <script src="{{ asset('assets/js/dashboard/dashboard-1.js') }}"></script>
    
	
</body>
</html>
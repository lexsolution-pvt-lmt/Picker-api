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
    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

@include('layouts/inc/admin-navbar')



  

   

@include('layouts/inc/admin-footer')
       

</div>
    
<!-- Required vendors -->
    <script src="{{ asset('assets/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
	<script src="{{ asset('assets/js/custom.min.js') }}"></script>
    <script src="{{ asset('assets/js/deznav-init.js') }}"></script>
    

    
    
    <script>
        const formE1 = document.querySelector('.form');
        formE1.addEventList('submit', event => {
            event.preventDefault();

            const formData = new FormData(formE1);
            const data = Object.formEntries(formData);

            fetch('http://http://127.0.0.1:8000/api/register',{
                method: 'POST'
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            });

        })
    </script>
    
	
</body>
</html>
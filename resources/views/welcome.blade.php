<html lang="en" class="h-100"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Cover Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/">

    

    <!-- Bootstrap core CSS -->
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
  </head>
  <body class="d-flex h-100 text-center text-white bg-dark">
    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="{{ route ('login') }}">Login</a>
        <a class="nav-link" href="{{ route ('register') }}">Register</a>
      </nav>
    </div>
  </header>
  <div class="nav-header">
            <a href="{{url('admin/dashboard')}}" class="brand-logo">
                <img class="logo-abbr" src="{{ asset('assets/images/logo.png')}}" alt="">
                <img class="logo-compact" src="{{ asset('assets/images/logo-text.png')}}" alt="">
                <img class="brand-title" src="{{ asset('assets/images/logo-text.png')}}" alt="">
            </a>
        </div>

  <main class="px-3">
    
    <p class="mt-auto text-black-50">The most impressing concept of online auction system is you don’t need to anywhere offline. It’s the system where you can bid online without investing your time and bid for particular products.</p>
    <p class="mt-auto text-black-50">
      <a href="{{ route ('register') }}" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Get Started!</a>
    </p>
  </main>

  <footer class="mt-auto text-black-50">
<p>Copyright © Designed &amp; Developed by <a href="" target="_blank">Lex Solution</a> 2023</p>  </footer>
</div>


    
  

</body></html>
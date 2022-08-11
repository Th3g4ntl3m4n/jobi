
@php

$user_type= Auth::user()->type;

@endphp

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Dashboard JOBI v1.0</title>
<style>
  .containter-canvas{

    display: grid;
    grid-template-columns: 1fr 1fr;
    background: #ED3237;
    background-image:url({{url('img/banner/1.jpg')}}) ;
    background-size: cover;
    height:100vh ;
  }
  .left{
    padding-top: 200px;
    display: inline-block;
    background: #010C29;    
    place-items: center;
    justify-content: center;
    text-align: center;
    opacity: .85;

  
  }
  .left h1 {
    color: white; font-size: 50;
  }
</style>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard/">

    

    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
    <link href="{{ asset('css/facebook.css')}}" rel="stylesheet">
  </head>
  <body>

  <!-- header -->
    
  <header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="{{ route('home')}}" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <img src="{{ asset('img/logojobi.png')}}"class="bi me-2" width="120" height="64" role="img" aria-label="Bootstrap"></img>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="{{ route('home')}}" class="nav-link px-2 text-secondary">Home</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
          <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
          <li><a href="#" class="nav-link px-2 text-white">About</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-white bg-dark" placeholder="Search..." aria-label="Search">
        </form>

        <!-- switch para botones -->

     

        <div class="text-end">
        @switch($user_type)
            @case('1')
          <button type="button" class="btn btn-outline-light me-2">Dashboard</button>            
          <a href="{{ route('cvs.create')}}" type="button" class="btn btn-danger">Completa tu CV</a>
          @break
            @case('2')
           <a href="{{ route('companies.create')}}" type="button" class="btn btn-outline-light me-2">Completa tu informacion</a>            
          <a href="{{ route('Comp.create')}}" type="button" class="btn btn-warning">Publica tu oferta</a>
          @break
        @endswitch
        </div>
      </div>
    </div>
  </header>

  <!-- end header -->
<!-- start sidebar -->

<!-- switch para panel de administracion -->

                        @switch($user_type)
                            @case('0')
                                @include('dashboard.case0')
                            @break
 
                            @case('1')
                                @include('dashboard.case1')
                            @break

                            @case('2')
                                @include('dashboard.case2')
                            @break
 
                            @default
                                @include('auth.login')
                        @endswitch
                        <!-- -->

    <!-- end sidebar -->

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
   



        <!-- switch para portada del dashboad -->

      
   

        <!--
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar" class="align-text-bottom"></span>
            This week
          </button>
        </div>
        -->


      </div>

     
         @yield('content')

      <canvas class="my-4 w-100" id="myChart" width="900" height="380">

     

      </canvas>


      

    </main>
  </div>
</div>





<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

  </body>
</html>
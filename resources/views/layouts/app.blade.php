<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <script src="{{ ('js/app.js') }}" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" integrity="sha512-wnea99uKIC3TJF7v4eKk4Y+lMz2Mklv18+r4na2Gn1abDRPPOeef95xTzdwGD9e6zXJBteMIhZ1+68QC5byJZw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
 <link rel="apple-touch-icon" sizes="76x76" href="images/apple-icon.png">
        <title>
        </title>
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
        <link href="css/nucleo-icons.css" rel="stylesheet" />
        <link href="css/nucleo-svg.css" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
        <link id="pagestyle" href="css/material-dashboard.css?v=3.0.2" rel="stylesheet" />    
</head>
<body>

    <div id="app" class="min-w-full truncate h-[65rem] bg-gradient-light ">
        
         
<nav class="bg-light navbar border-box navbar-expand-lg navbar-dark ">
    <a href="{{url('/')}}" >
        <h1 class="fixed font-serif text-2xl top-1 left-5 text-stone-800 text-uppercase">Hooks Form</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="rounded-lg text-white navbar-toggler-icon bg-stone-600"></span>
    </button>
    <div class="justify-center text-lg text-stone-800 collapse navbar-collapse" id="navbarCollapse">
         <div class="navbar-nav">
                                                    <div class="truncate columns-4">

                        @guest
                            @if (Route::has('login'))
                                <div class="">
     

                                    <div>    <a href="{{ route('login') }}" class="text-black hover:font-black hover:active ">{{ __('Admin') }}</a></div>
                                    <div>    <a href="{{ route('login') }}" class="text-black hover:font-black hover:active ">{{ __('Contractor') }}</a></div>
                                    <div>    <a href="{{ route('login') }}" class="pl-5 text-black hover:font-black hover:active ">{{ __('Auditor') }}</a></div>
                                    <div>    <a href="{{ url('/') }}" class="pl-5 text-black hover:font-black hover:active ">{{ __('Home') }}</a></div>

                            @endif
                           
                           
                        @else
</div>

                                   <div class="columns-4">
                                    <div class="pt-2 pl-10 font-serif font-medium">  <a href="{{ url('/') }}" class="text-black hover:font-black hover:active">Home</a></div>
                <div class="pt-2 pl-5 font-serif font-semibold"><a href="{{ route('home') }}">{{ Auth::user()->name }}</a></div>
                <div class="pt-2 font-serif font-medium">    <a href="{{ route('login') }}">{{ __('Order') }}</a></div>

                                <div class="pt-2 ">
                                   <div> <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a></div>

                                
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                        
                                        
                                    </form>
                                </div>
                            </div>
                        @endguest

                    


    
      
            
               
                         

                </div>
               
            </div>
           
        </nav>
        <div class="h-80">
            @yield('content')
        </div> 
    </div>
        
    </div>


</nav>
<div id="Footer" >

</div>
<script src="{{ asset('js/app.js') }}" defer></script>
</div>

</body>
</html>

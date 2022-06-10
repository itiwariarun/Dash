<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>React-Laravel</title>

        
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdn.tailwindcss.com"></script>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <style>
            
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="min-h-full ">
      
         <div class="truncate">
       
<nav class="bg-stone-50 h-14 navbar border-box navbar-expand-lg navbar-dark ">
    
    <a href="{{url('/')}}" >
        <h1 class="pt-2 pl-0 font-serif text-2xl text-stone-900 text-uppercase">Hooks Form</h1>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon bg-stone-700"></span>
      </button>
    <div class="justify-center mr-40 text-black text-md collapse navbar-collapse" id="navbarCollapse">
         <div class="navbar-nav ">
           
                            @if (Route::has('login'))
                                <div class="hidden columns-4 nav-item nav-link sm:block">
                                
                                    @auth
                               <div class="text-md text-stone-900"> <div>  <a href="{{ url('/') }}" class="text-black hover:font-black hover:active">Home</a></div>
                                <div class="font-serif font-semibold"><a href="{{ route('home') }}">{{ Auth::user()->name }}</a></div>
                                <div class="font-serif font-medium ">    <a href="{{ route('login') }}">{{ __('Order') }}</a></div>
                
                                                <div class="">
                                                   <div> <a href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a></div>
                
                                                
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                        
                                                        
                                                    </form>
                                                </div>
                                    @else
                                <div>    <a href="{{ route('login') }}" class="text-black hover:font-black hover:active">Admin</a></div>
                                <div>    <a href="{{ route('login') }}" class="text-black hover:font-black hover:active">Auditor</a></div>
                                <div>    <a href="{{ route('login') }}" class="text-black hover:font-black hover:active">Contractor</a></div>

                                    <div>       <select class="text-sm font-semibold text-black hover:font-black bg-stone-100 hover:active">
                                        <option>--REPORTS--</option>    

                                    <option>Reporting</option>    
                                    <option>Timing</option>    
                                    <option>Assign</option>    

                                    </select></div>
                                     
                                    @endauth
                                </div>
                            @endif
                
               
                        </div>

        
            </nav>
            
            <div class='relative min-w-full h-[100rem]'>
                <img src="images/main.jpg" class='object-cover  w-full  h-[42rem] mix-blend-hard-light hover:bg-mix-blend-dark  opacity-50'/>
                <div class='absolute inset-x-0 top-60  h-[42rem] w-full text-8xl text-stone-5000 tracking-wide indent-10 leading-4 font-serif font-weight-8 text-center'><div class='px-20 pb-10 '><h1 class=''>Your Success <br/>Begins<span class='underline border-0 rounded-xl underline-offset-[40px] decoration-cyan-700'> W</span>ith Us</h1></div>
                <div class='container mt-10 bg-white  opacity-95 h-[22rem]  w-[50rem] '>
           <form class='px-10 text-center space-y-7'>
           <h1 class='pt-4 text-2xl fant-sans font-weight-8'>Ready to start your growth journey?</h1>
           <div class='space-x-6 text-sm columns-2'>
             <div class='font-sans text-left '>First Name
             <div class='border-b-2 border-stone-900'><input type="text"/></div> </div>
             <div class='font-sans text-left '>Last Name
             <div class='border-b-2 border-stone-900'><input type="text"/></div> </div>
           </div>
           <div>
           <div class='font-sans text-sm text-left '>Email *
           <div class='border-b-2 border-stone-900'><input type="text"/></div></div>
           </div>
           <button class=" font-sans text-xl border-2 border-black p-1 mt-8 tracking-widest indent-8 font-bold w-[33rem] bg-cyan-700 text-white ">Join Now</button>
           
           </form>
           </div>
               </div>
               <div class='h-[58rem] bg-gradient-to-l from-stone-400 min-w-full'>
               <div class='h-[10rem] min-w-full px-40 pt-[17rem] text-center  text-6xl'><h1 class='border-y-2 border-stone-900 text-stone-900 '>Our Services</h1></div>
               <div class=' columns-3 container space-x-10 h-[40rem] px-20 pt-[8rem] min-w-full '>
                 <div class='relative ml-10 hover:scale-110  h-[30rem] '><img src="images/main1.jpg" class='object-cover   w-full  h-[30rem] hover:mix-blend-hard-light opacity-100'/>
            <div class='absolute top-0 items-center justify-center w-full h-full text-center bg-black opacity-80'>  <h1 class='pt-40 pb-10 text-3xl font-bold text-cyan-700 font-weight-6'>Consulting Sessions</h1>
                <p class='px-4 font-sans text-white truncate'>"I'm a testimonial. Click to edit me and add text that</br> says something nice about you and your services. Let your</br> customers review you and tell their friends how</br> great you are.”</p></div>
            </div> 
               
            <div class='relative hover:scale-110 h-[30rem]  '><img src="images/main2.jpg" class='object-cover   w-full  h-[30rem]  hover:mix-blend-hard-light opacity-100'/>
            <div class='absolute top-0 items-center justify-center w-full h-full text-center bg-black opacity-80'>  <h1 class='pt-40 pb-10 text-3xl font-bold text-cyan-700 font-weight-6'>Consulting Sessions</h1>
                <p class='px-4 font-sans text-white truncate'>"I'm a testimonial. Click to edit me and add text that</br> says something nice about you and your services. Let your</br> customers review you and tell their friends how</br> great you are.”</p>
            </div> </div>
            <div class='relative hover:scale-110 h-[30rem]  '><img src="images/main3.jpeg" class='object-cover  w-full  h-[30rem]  hover:mix-blend-hard-light opacity-100'/>
            <div class='absolute top-0 items-center justify-center w-full h-full text-center bg-black opacity-80'>  <h1 class='pt-40 pb-10 text-3xl font-bold text-cyan-700 font-weight-6'>Consulting Sessions</h1>
            <p class='px-4 font-sans text-white truncate'>"I'm a testimonial. Click to edit me and add text that</br> says something nice about you and your services. Let your</br> customers review you and tell their friends how</br> great you are.”</p>
            </div> </div>
               
           </div>
               </div>
               </div>
               </nav>
               <div class='h-[40rem] min-full bg-stone-900'>
               <div class='h-[10rem] min-w-full px-40 pt-[5rem] text-center  text-6xl'><h1 class='border-y-2 border-stone-200 text-stone-200 '>What Our Clients Say</h1></div>
               <div class=' columns-3 container space-x-10  h-[26rem] text-center px-20 pt-[3rem] min-w-full '>
                <div class=' h-[22rem]'> <h1 class='pt-20 text-3xl font-bold text-cyan-300 font-weight-6'>Maggie Kahn</h1>
                <h1 class='pt-2 pb-10 font-sans text-xl text-cyan-300 font-weight-2'>Founder</h1>
            <p class='px-4 font-sans text-white truncate'>"I'm a testimonial. Click to edit me and add text tha</br>t says something nice about you and your services.</br> Let your customers review you and tell their </br>friends how great you are.”</p></div>
            <div class=' h-[22rem]'> <h1 class='pt-20 text-3xl font-bold text-cyan-300 font-weight-6'>Maggie Kahn</h1>
                <h1 class='pt-2 pb-10 font-sans text-xl text-cyan-300 font-weight-2'>Founder</h1>
            <p class='px-4 font-sans text-white truncate'>"I'm a testimonial. Click to edit me and add text</br> that says something nice about you and your services.</br> Let your customers review you and tell their</br> friends how great you are.”</p></div>
            <div class=' h-[22rem]'> <h1 class='pt-20 text-3xl font-bold text-cyan-300 font-weight-6'>Maggie Kahn</h1>
                <h1 class='pt-2 pb-10 font-sans text-xl text-cyan-300 font-weight-2'>Founder</h1>
            <p class='px-4 font-sans text-white truncate'>"I'm a testimonial. Click to edit me and add text that</br> says something nice about you and your services. Let your</br> customers review you and tell their friends how</br> great you are.”</p></div>
           </div>
           
               </div>
        
          
         </div>
       
        
        
         <div id="Footer" >

        </div>
        <script src="{{ asset('js/app.js') }}" defer></script>    </body>
</html>
@extends('layouts.app')
@section('main_content')
<div class="h-[15rem] w-full">
    <div class="text-stone-900 text-center pt-80 text-4xl items-left"><p>{{ Auth::user()->name }}</p> 
        <p>{{ Auth::user()->email }}</p> 
       

    </div>

</div>
@endsection
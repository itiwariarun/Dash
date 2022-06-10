@extends('layouts.app')

@section('content')
<div class="container mt-40 ">
    <div class="row justify-content-center ">
        <div class="w-[35rem]">
            <div>
            <div class="rounded-r-xl bg-stone-800 ">

                <div class=" h-[31rem] w-[30rem] bg-slate-200">
                    <div class="pt-3 font-sans text-3xl font-semibold text-center bg-slate-200 spacing-6 text-stone-800">{{ __('Login') }}</div>

                    <form method="POST" class="text-center "action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3 row">
                            <label for="email" class="pl-24 mt-1 font-serif text-sm text-gray-600 col-form-label text-md-start">{{ __('Email Address') }}</label>

                            <div class="col-md-9">
                                <input id="email" type="email" class="form-control border-2 border-black ml-20 mt-0.5  mb-1 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="password" class="pl-24 mt-1 font-serif text-sm text-gray-600 col-form-label text-md-start">{{ __('Password') }}</label>

                            <div class="col-md-9">
                                <input id="password" type="password" class="form-control border border-black form-control ml-20 mt-0.5  mb-1   @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class=" columns-2">
                            <div class="text-sm col-md-1 offset-md-4">
                                <div class="pl-1 text-xs text-gray-600 columns-2 form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}/>

                                    <label class=" form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                    
                                </div>
                                
                            </div>
                            <div class="text-sm ">
                            @if (Route::has('password.request'))
                            <span class="text-gray-600 no-underline btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot password?') }}
                            </span>
                        @endif
                            </div>
                        </div>

                        <div class="">
                            <div class="pl-8 mt-2 col-md-20">
                                <button type="submit" class="px-40 py-1 font-sans text-lg font-semibold text-white border-0 shadow-xl bg-cyan-700 shadow-gray-600 rounded-2xl ">
                                    {{ __('Login') }}
                                </button>
                                <p class="py-3">--OR--</P>
                                @if (Route::has('register'))
                                <button type="submit" class="px-40 py-1 font-sans text-lg font-semibold text-white border-0 shadow-xl bg-cyan-700 shadow-gray-600 rounded-2xl ">
                                <a href="{{ route('register') }}" >  {{ __('Register') }}</a>
                                </button>
                                @endif
                              
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

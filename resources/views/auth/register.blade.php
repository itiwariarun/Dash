@extends('layouts.app')

@section('content')
<div class="container mt-40 ">
    <div class="row justify-content-center ">
        <div class="w-[40rem]">
            <div>
            <div class="rounded-r-xl bg-stone-800 ">

                <div class=" h-[35rem] w-[35rem] bg-slate-200">
                    <div class="pt-3 font-sans text-3xl font-semibold text-center bg-slate-200 spacing-6 text-stone-800">{{ __('Register') }}</div>

                    <form method="POST" class="pt-3 text-center"action="{{ route('register') }}">
                        @csrf
                        <div class="mb-3 row">
                            <label for="name" class="pl-24 mt-0 font-serif text-sm text-gray-600 col-form-label text-md-start">{{ __('Username') }}</label>

                            <div class="col-md-9">
                                <input id="name" type="text" class="form-control border-black border border-bold ml-20 mt-0.5  mb-1 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="email" class="pl-24 mt-0 font-serif text-sm text-gray-600 col-form-label text-md-start">{{ __('Email Address') }}</label>

                            <div class="col-md-9">
                                <input id="email" type="email" class="form-control border-black border ml-20 mt-0.5  mb-1 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="password" class="pl-24 mt-0 font-serif text-sm text-gray-600 col-form-label text-md-start">{{ __('Password') }}</label>

                            <div class="col-md-9">
                                <input id="password" type="password" class="form-control border border-black form-control ml-20 mt-0.5  mb-1   @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <label for="password-confirm" class="pl-24 mt-0 font-serif text-sm text-gray-600 col-form-label text-md-start">{{ __('Confirm Password') }}</label>

                            <div class="col-md-9">
                                <input id="password-confirm" type="password" class="form-control border border-black form-control ml-20 mt-0.5  mb-1" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                      <center>  <div class="">
                        <div class="pl-8 mt-4 mr-5 col-md-20">
                            <button type="submit" class="px-40 py-1 font-sans text-lg font-semibold text-white border-0 shadow-xl bg-cyan-700 shadow-gray-600 rounded-2xl">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div></center>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

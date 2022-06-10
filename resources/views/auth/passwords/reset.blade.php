@extends('layouts.app')

@section('content')
<div class="container mt-40 ">
    <div class="row justify-content-center ">
        <div class="w-[35rem]">
            <div>
            <div class="rounded-r-xl bg-stone-800 ">

                <div class=" h-[25rem] w-[30rem] bg-white">
                    <div class="pt-3 font-sans text-3xl font-semibold text-center bg-white spacing-6 text-stone-800">{{ __('Reset password') }}</div>

                <div class="card-body">
                    <form method="POST" class="pt-10 text-center" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="mb-3 row">
                            <label for="email" class="pl-24 mt-1 font-serif text-sm text-gray-600 col-form-label text-md-start">{{ __('Email Address') }}</label>

                            <div class="col-md-9">
                                <input id="email" type="email" class="form-control ml-20 mt-0.5  mb-1 @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control form-control ml-20 mt-0.5  mb-1 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="password" class="pl-24 mt-1 font-serif text-sm text-gray-600 col-form-label text-md-start">{{ __('Confirm Password') }}</label>

                            <div class="col-md-9">
                                <input id="password" type="password" class="form-control form-control ml-20 mt-0.5  mb-1" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="">
                            <div class="pl-8 mt-2 col-md-20">
                                <button type="submit" class="px-40 py-1 font-sans text-lg font-semibold text-white border-0 shadow-xl bg-cyan-700 shadow-gray-600 rounded-2xl ">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

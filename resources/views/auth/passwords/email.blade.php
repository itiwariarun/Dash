@extends('layouts.app')

@section('content')
<div class="container mt-40 ">
    <div class="row justify-content-center ">
        <div class="w-[35rem]">
            <div>
            <div class="rounded-r-xl bg-stone-800 ">

                <div class=" h-[15rem] w-[30rem] bg-white">
                    <div class="pt-3 font-sans text-2xl font-semibold text-center bg-white spacing-6 text-stone-800">{{ __('Reset password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="mb-3 row">
                            <label for="email" class="pl-24 mt-1 font-serif text-sm text-gray-600 col-form-label text-md-start">{{ __('Email Address') }}</label>

                            <div class="col-md-9">
                                <input id="email" type="email" class="form-control ml-20 mt-0.5  mb-1 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="">
                            <div class="pl-20 mt-4 col-md-20">
                                <button type="submit" class="py-1 font-sans text-lg font-semibold text-white border-0 shadow-xl px-14 bg-cyan-700 shadow-gray-600 rounded-2xl">
                                    {{ __('Send Password Reset Link') }}
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

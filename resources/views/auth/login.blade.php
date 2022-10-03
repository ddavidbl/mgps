@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="rounded border border-1 shadow p-4">
                <div class="text-center">
                    <img src="{{asset('img/logo papua barat.png')}}" style="width: 70px" alt="">
                </div>

                @isset($url)
                    <h4 class="text-center my-4">Login Admin</h1>
                    <form action="{{url('/login/admin')}}" method="POST">
                @else
                    <form action="{{route('login')}}" method="POST">
                @endisset
                    @csrf

                    <div class="row my-4">
                        <label for="username" class="col-md-4 col-form-label text-md-end">{{ __('Username') }}</label>

                        <div class="col-md-6">
                            <input id="username" type="text" name="username" class="form-control focus @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="" autofocus>

                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row my-4">
                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-0 ">
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary col-md-3">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection

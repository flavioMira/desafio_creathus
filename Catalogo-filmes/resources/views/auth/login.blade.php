@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center ">
        
        <div class="col-md-4 mb-4 me-md-5 d-flex align-items-center">
            <img src="{{ asset('img/instituto-creathus-squarelogo.svg') }}" class="img-fluid"/>
        </div>
        
        <div class="col-md-6">
            <div class="card bg-dark border-0">
                <div class="card-header fs-5 text-warning">{{ __('Login') }}</div>

                <div class="card-body px-4 bg-dark">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class=" form-floating mb-3">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="name@example.com" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <label for="email" >{{ __('Email') }}</label>
                            
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-floating mb-3">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="******" name="password" required autocomplete="current-password">
                                <label for="password">{{ __('Senha') }}</label>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <div class="form-check text-warning">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Lembrar-me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col">
                                <button type="submit" class="btn btn-warning">
                                    {{ __('Entrar') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link text-secondary" href="{{ route('password.request') }}">
                                        {{ __('Esqueceu a sua senha?') }}
                                    </a>
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

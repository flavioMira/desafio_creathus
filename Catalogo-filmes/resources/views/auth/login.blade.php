@extends('welcome')

@section('title')
Login
@endsection

@section('content')
<div class="grid grid-cols-1">
    <div class="p-6 ">
        <div class="flex items-center">
            <img src="{{ asset('img/login.svg') }}" class="w-5 h-5 text-gray-500" />
            <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Entrar</div>
        </div>

        <div class="">
            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class=" form-floating mb-3">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="name@example.com" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <label for="email">{{ __('Email') }}</label>

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
                            <div class="form-check text-orange">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Lembrar-me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col">
                            <button type="submit" class="btn btn-lg btn-orange">
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
        <hr class="text-secondary">
        <div class="flex items-center">
            <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Não tem conta? <a href="{{ route('register') }}" class="underline text-orange">Registre-se</a></div>
        </div>
    </div>






</div>
</div>
@endsection
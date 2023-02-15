@extends('welcome')

@section('title')
Redefinição de senha
@endsection

@section('content')
<div class="grid grid-cols-1">
    <div class="p-6 ">
        <div class="flex items-center">
            <img src="{{ asset('img/login.svg') }}" class="w-5 h-5 text-gray-500" />
            <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Redefinir senha</div>
        </div>

        <div class="">
            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
            @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        


                        <div class="row mb-3">
                            

                            <div class=" form-floating ">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="name@example.com" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <label for="email">{{ __('Digite seu Email') }}</label>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0 justify-content-center">
                            <div class="col-md-6 d-flex justify-content-center">
                                <button type="submit" class="btn btn-lg btn-orange">
                                    {{ __('Enviar link por e-mail') }}
                                </button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
        <hr class="text-secondary">
        <div class="flex items-center">
            <div class="ml-4  leading-7 text-gray-900 dark:text-white">Lembrou a senha? Faça <a href="{{ route('login') }}" class="underline text-orange">Login</a></div>
        </div>
        <hr class="text-secondary">
        <div class="flex items-center">
            <div class="ml-4 leading-7 text-gray-900 dark:text-white">Não tem conta? <a href="{{ route('register') }}" class="underline text-orange">Registre-se</a></div>
        </div>
    </div>






</div>
</div>
@endsection
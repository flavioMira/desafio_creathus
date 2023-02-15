@extends('welcome')

@section('title') 
Login
@endsection

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6 ">
                        <div class="flex items-center">
                        <img src="{{ asset('img/login.svg') }}" class="w-5 h-5 text-gray-500"/>
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
                                            <button type="submit" class="btn btn-orange">
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

                    <div class="p-6 ">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold"><span class=" text-gray-900 dark:text-white">Ainda não tem conta?</span></div>
                        </div>

                        <div class="">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Não perca tempo! Cadastre-se.
                            </div>
                        </div>

                        <div class="d-flex p-6">
                            <a href="{{ route('register') }}" class="btn btn-orange btn-block btn-lg">Registre-se</a>
                        </div>
                    </div>



                    
                </div>
            </div>
@endsection

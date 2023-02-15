@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        
        <div class="col-md-4 mb-4 me-md-5 d-flex align-items-center">
            <img src="{{ asset('img/instituto-creathus-squarelogo.svg') }}" class="img-fluid"/>

            
            @if ($errors->any())    
    <ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
    </ul>
@endif


        </div>
        
        
        <div class="col-md-6">
            <div class="card bg-dark border-0">
                <div class="card-header fs-5 text-warning">{{ __('Registre-se') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">

                            <div class="col-lg-6 mb-3 mb-lg-0">
                                <div class="form-floating">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    <label for="name">{{ __('Nome') }}</label>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-floating">
                                    <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" placeholder="surname" name="surname" value="{{ old('surname') }}" required autocomplete="surname">
                                    <label for="surname">{{ __('Sobrenome') }}</label>

                                    @error('surname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <div class="row mb-3">
                            
                            <div class="col-lg-6 mb-3 mb-lg-0">
                                <div class="form-floating">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="example@mail.com" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    <label for="email" >{{ __('Email') }}</label>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-floating">
                                    <input id="telphone" type="telphone" class="form-control @error('telphone') is-invalid @enderror" placeholder="99999999999" name="telphone" value="{{ old('telphone') }}" required autocomplete="telphone">
                                    <label for="telphone" >{{ __('telefone') }}</label>

                                    @error('telphone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <div class="row mb-3">

                            <div class="col-lg-6 mb-3 mb-lg-0">
                                <div class="form-floating">
                                    <input id="birth_date" type="date" class="form-control @error('birth_date') is-invalid @enderror" name="birth_date" value="{{ old('birth_date') }}" required autocomplete="birth_date" autofocus>
                                    <label for="birth_date">{{ __('Data de Nascimento') }}</label>

                                    @error('birth_date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-floating">
                                    <select id="sex" class="form-select @error('sex') is-invalid @enderror" aria-label="outro" name="sex" required autocomplete="sex">
                                        <option value="M">Masculino</option>
                                        <option value="F">Feminino</option>
                                        <option value="F" selected>Neutro</option>
                                    </select>
                                    <label for="sex">{{ __('Gênero') }}</label>

                                    @error('sex')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <div class="row mb-3">
                            
                            <div class="col-lg-6 mb-3 mb-lg-0">
                                <div class="form-floating">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="******" name="password" required autocomplete="new-password">
                                    <label for="password">{{ __('Senha') }}</label>

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">                                
                                <div class="form-floating">
                                    <input id="password-confirm" type="password" class="form-control" placeholder="******" name="password_confirmation" required autocomplete="new-password">
                                    <label for="password-confirm">{{ __('Confirmar Senha') }}</label>
                                </div>
                            </div>

                        </div>

                        <input id="level" type="hidden" class="form-control" value="1" name="level" required autocomplete="level">

                        <div class="row mb-0 justify-content-center">
                            <div class="col-md-6 d-flex justify-content-center">
                                <button type="submit" class="btn btn-warning">
                                    {{ __('Registrar') }}
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

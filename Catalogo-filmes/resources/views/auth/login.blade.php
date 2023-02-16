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

        <login-component csrf_token="{{ @Csrf_token() }}" login="{{ route('login') }}" register="{{ route('register') }}" forgot="{{ route('password.request') }}"></login-component>
       
    </div>
</div>
</div>
@endsection
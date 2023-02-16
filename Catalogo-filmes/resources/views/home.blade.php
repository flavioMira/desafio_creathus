@extends('layouts.app')

@section('title')
Últimos filmes adicionados
@endsection

@section('content')
<div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
    @if (session('status'))
    <div class="" role="alert">
        {{ session('status') }}
    </div>
    @endif

    {{ __('You are logged in!') }}
</div>
@endsection
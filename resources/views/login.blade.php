@extends('master')

@section('header-intro')
<h2>Login</h2>
<p>Faça o login abaixo</p>
@endsection


@section('main')

<div class="text-center">

    @if (session()->has('error_login'))
        {{ session()->get('error_login') }}
    @endif

    @if (auth()->guest())
    <form action="{{ route('login') }}" method="post">
        @csrf
        {{ $errors->first('email') }}
        <input type="text" name="email" placeholder="email">
        {{ $errors->first('password') }}
        <input type="password" name="password" placeholder="senha">

        <button type="submit">Logar</button>
    </form>
    @else
        <h2>Você já está logado</h2>
    @endif

</div>
@endsection

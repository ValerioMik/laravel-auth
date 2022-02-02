@extends('layouts.main-layout')
@section('content')

    @auth
    <h1>{{ Auth::user() -> name }}</h1>
    <a class="btn btn-secondary" href="{{ route('logout') }}">LOGOUT</a>
    @else
    <h1>per andare avanti inscriviti o Loggati</h1>
    @endauth
    

   <h1>per andare avanti inscriviti</h1>
   <form method="POST" action="{{ route('register') }}" method="POST">
    @method('POST')
    @csrf

    <label for="name">Nome</label>
    <input type="text" name="name"><br>

    <label for="email">E-mail</label>
    <input type="email" name="email"><br>

    <label for="password">Password</label>
    <input type="password" name="password"><br>

    <label for="password_confirmation">Conferma Password</label>
    <input type="password" name="password_confirmation"><br>

    <input type="submit" value="REGISTRATI">

    <br><hr><br>


    </form>>


   <h2>per accedere alla tua area loggati</h2>
   <form method="POST" action="{{ route('login') }}" method="POST">
    @method('POST')
    @csrf

    <label for="email">E-mail</label>
    <input type="email" name="email"><br>

    <label for="password">Password</label>
    <input type="password" name="password"><br>

    <input type="submit" value="LOGIN">


    </form>>

@endsection
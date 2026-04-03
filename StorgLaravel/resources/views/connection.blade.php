@extends('layouts.base')

@section('title', 'Connexion')

@section('content')
<form method="POST" action="/connection">
    @csrf
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Mot de passe">
    <button type="submit">Connexion</button>
</form>

<a href="/">Créer un compte</a>
@endsection
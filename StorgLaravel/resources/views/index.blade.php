@extends('layouts.base')

@section('title', 'Inscription')

@section('content')
<form method="POST" action="/">
    @csrf
    <input type="text" name="username" placeholder="Nom utilisateur">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Mot de passe">
    <button type="submit">Créer</button>
</form>

<a href="/connection">J'ai déjà un compte</a>
@endsection
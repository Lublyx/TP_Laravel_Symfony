@extends('layouts.base')

@section('title', 'Fichiers')

@section('content')

@if(empty($fileList))
<p>Aucun fichier</p>
@else
<ul>
@foreach($fileList as $file)
    <a href="/download/{{ $file }}">
        <li>{{ $file }}</li>
    </a>
@endforeach
</ul>
@endif

<form action="/upload" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file">
    <button type="submit">Uploader</button>
</form>

<form action="/file" method="POST">
    @csrf
    <button type="submit">Déconnexion</button>
</form>

@endsection
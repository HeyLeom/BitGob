@extends('layout')

@section('content')
    <h1>POSTS</h1>
    <a href="{{ route('post.create')}}">Nuevo Post</a>


    @forelse ($post as $postItem)
            <li>Titutlo: {{$postItem->titulo}}</li>
            <p>Cuerpo: {{ $postItem->cuerpo }}</p>
            @foreach($usuario as $usuarioItem)
            @if($usuarioItem->id == $postItem->user_id)
            <p>Publicado por: {{$usuarioItem->email}}</p>
            <br>
            @endif
            @endforeach
        @empty
            <li>No hay Usuarios para mostrar</li>
    @endforelse

@endsection

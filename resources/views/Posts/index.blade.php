@extends('layout')

@section('content')
    <h1>POSTS</h1>
    <a href="{{ route('post.create')}}">Nuevo Post</a>
    <br>


    @forelse ($post as $postItem)
            <li>Titutlo: {{$postItem->titulo}} <a href="{{ route('post.edit',$postItem)}}">Editar</a></li>
            <p>Cuerpo: {{ $postItem->cuerpo }}</p>
            @foreach($usuario as $usuarioItem)
            @if($usuarioItem->id == $postItem->user_id)
            <p>Publicado por: {{$usuarioItem->email}}</p>
            <br>
            @endif

            @endforeach
            <a href="{{ route('post.addPhoto',$postItem)}}">Añadir o cambiar foto</a>
            @foreach($imagen as $imagenItem)
        @if($postItem->id == $imagenItem->post_id)
        <img src="{{$imagenItem->url}}" width=100 height="100">
        @endif
        @endforeach
        @empty
            <li>No hay Posts para mostrar</li>

    @endforelse

@endsection

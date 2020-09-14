@extends('layout')

@section('content')
<h1>Editar Post</h1>

<form method="POST" action="{{ route('post.update', compact('post'))}}">
    @csrf @method("PATCH")
    <br>
    <input type="hidden" name="user_id" value="{{$post->user_id}}">
    <label>
        Titulo <br>
    <input type="text" name="titulo" value="{{$post->titulo}}">
    </label>
    <br>
    <label>
        Cuerpo <br>
        <textarea name="cuerpo" >{{$post->cuerpo}}</textarea>
    </label>
    <br>
    <button>Actualizar</button>
</form>



@endsection

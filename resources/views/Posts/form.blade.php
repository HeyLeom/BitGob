@extends('layout')

@section('content')
<h1>Crear Post</h1>

<form method="POST" action="{{ route('post.store')}}">
    @csrf
    <label>
        Titulo <br>
    <input type="text" name="titulo">
    </label>
    <br>
    <label>
        Cuerpo <br>
        <textarea name="cuerpo"></textarea>
    </label>
    <br>
    <button>Guardar</button>
</form>



@endsection

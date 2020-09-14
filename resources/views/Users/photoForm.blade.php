@extends('layout')

@section('content')
<h1>Añade una foto a tu perfil</h1>

<form method="POST" action="{{ route('image.store')}}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" value="{{$usuario->id}}" name="user_id">
    <label>Ingresa la URL de tu imagen</label>
                <input id="url" type="url" name="url">
    <br>

    <button>Guardar</button>
</form>



@endsection

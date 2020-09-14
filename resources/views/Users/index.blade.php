@extends('layout')

@section('content')
<h1>Usuarios</h1>

<ul>
    @forelse ($usuario as $usuarioItem)
        <li>Nombre: {{$usuarioItem->name}}     <a href="{{ route('user.addPhoto',$usuarioItem)}}">Añadir o cambiar foto</a></li>
        <p>Correo: {{ $usuarioItem->email }}</p>
        @foreach($imagen as $imagenItem)
        @if($usuarioItem->id == $imagenItem->user_id)
        <img src="{{$imagenItem->url}}" width=100 height="100">
        @endif
      @endforeach
    @empty
        <li>No hay Usuarios para mostrar</li>
    @endforelse


</ul>

@endsection

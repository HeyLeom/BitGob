@extends('layout')

@section('content')
<h1>Usuarios</h1>

<ul>
    @forelse ($usuario as $usuarioItem)
        <li>{{ $usuarioItem->email }} <a href="{{ route('user.addPhoto')}}">Añadir Foto</a></li>
    @empty
        <li>No hay proyectos para mostrar</li>
    @endforelse

</ul>

@endsection

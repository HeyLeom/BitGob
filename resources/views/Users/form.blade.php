@extends('layout')

@section('content')
<h1>Crear usuario</h1>

<form method="POST" action="{{ route('user.store')}}">
    @csrf
    <label>
        Email <br>
    <input type="email" name="email">
    </label>
    <br>
    <label>
        Password <br>
        <input type="password" name="password">
    </label>
    <br>
    <button>Guardar</button>
</form>



@endsection

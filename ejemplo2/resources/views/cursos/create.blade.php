@extends('layout.plantilla')

@section('title', 'Cursos')
    
@section('content')
    <h1>Bienvenido a la página de crear cursos</h1>
    <form action="{{route('cursos.store')}}" method="POST">

        @csrf
        <label>
            Nombre:<br>
            <input type="text" name="name">
        </label>
        <br>
        <label>
            Descripcion:<br>
            <textarea name="description" rows="5"></textarea>
        </label>
        <br>
        <label>
            Categoria:<br>
            <input type="text" name="category">
        </label>
        <br>
        <input type="submit" name="Enviar">
    </form>
@endsection
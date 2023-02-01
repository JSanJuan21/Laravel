@extends('layout.plantilla')

@section('title', 'Cursos edit')
    
@section('content')
    <h1>Bienvenido a la página de editar cursos</h1>
    <form action="{{route('cursos.update', $curso)}}" method="POST">

        @csrf

        @method('PUT')
        <label>
            Nombre:<br>
            <input type="text" name="name" value="{{$curso->name}}">
        </label>
        <br>
        <label>
            Descripcion:<br>
            <textarea name="description" rows="5">{{$curso->description}}</textarea>
        </label>
        <br>
        <label>
            Categoria:<br>
            <input type="text" name="category" value="{{$curso->category}}">
        </label>
        <br>
        <input type="submit" name="Enviar">
    </form>
@endsection
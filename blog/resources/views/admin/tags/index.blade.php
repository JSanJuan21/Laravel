@extends('adminlte::page')

@section('title', 'Blog Laravel')

@section('content_header')

    <a class="btn btn-secondary btn-sm float-right" href="{{route('admin.tags.create')}}">Nueva Etiqueta</a>

    <h1>Mostrar listado de etiquetas</h1>
@stop

@section('content')
    <div class="card">
        @if (session('create'))
    <div class="alert alert-success">
        <strong>{{session('create')}}</strong>
    </div>
    @endif

    <div class="card">
        @if (session('delete'))
        <div class="alert alert-danger">
            <strong>{{session('delete')}}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($tags as $tag)
                        <tr>
                            <td>{{$tag->id}}</td>
                            <td>{{$tag->name}}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.tags.edit', $tag)}}">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{route('admin.tags.destroy', $tag)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

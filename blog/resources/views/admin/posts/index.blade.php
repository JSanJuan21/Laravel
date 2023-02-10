@extends('adminlte::page')

@section('title', 'Blog Laravel')

@section('content_header')

    <a class="btn btn-secondary btm-sm float-right" href="{{route('admin.posts.create')}}">Nuevo Post</a>

    <h1>Listado de Posts</h1>
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
    @livewire('admin.posts-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
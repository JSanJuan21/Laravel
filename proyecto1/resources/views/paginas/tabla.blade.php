@extends('layout.plantilla')
@section('title', 'Tabla')
    
@section('content')
    <nav class="navbar navbar-expand-md py-0">
        <div class="container-fluid fondoMenu">
            <a class="d-md-block d-none navbar-brand" href="/"><img src="../img/logo.png"></a>     
            <ul class="col-md-2 navbar-nav offset-1">
                <li class="nav-item">
                    <a class="nav-link active text-dark" aria-current="page" href="/paginas/formulario">Formulario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">Tabla</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-outline-dark" type="submit">Buscar</button>
            </form>
        </div>
    </nav>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <table class="table table-striped table-dark">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Usuario</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Jorge</td>
                        <td>San Juan</td>
                        <td>@jorgesanjuan</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Fernando</td>
                        <td>Alonso</td>
                        <td>@elNano</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Max</td>
                        <td>Verstappen</td>
                        <td>@superMax</td>
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td>Charles</td>
                        <td>Leclerc</td>
                        <td>@ilPredestinato</td>
                      </tr>
                      <tr>
                        <th scope="row">5</th>
                        <td>Antonio</td>
                        <td>Lobato</td>
                        <td>@calvo</td>
                      </tr>
                      <tr>
                        <th scope="row">6</th>
                        <td>Pedro</td>
                        <td>De La Rosa</td>
                        <td>@pactoDeCaballeros</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../script/validacion.js"></script>
@endsection
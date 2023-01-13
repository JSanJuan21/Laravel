@extends('layout.plantilla')

@section('title', 'Carousel')
    
@section('content')
    <nav class="navbar navbar-expand-md py-0">
        <div class="container-fluid fondoMenu">
            <a class="d-md-block d-none navbar-brand"><img src="img/logo.png"></a>     
            <ul class="col-md-2 navbar-nav offset-1">
                <li class="nav-item">
                    <a class="nav-link active text-dark" aria-current="page" href="paginas/formulario">Formulario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="paginas/tabla">Tabla</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-outline-dark" type="submit">Buscar</button>
            </form>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row mt-5 mt-md-0">
            <div class="col-md-2"></div>
            <div class="col-12 col-md-8">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="img/gow.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="img/tw3.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="img/u4.jpeg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
            <div class="col-md-2"></div>
        </div>
        <footer>
            <div class="row">   
                <div class="col-md-12 bg-secondary">
                    <p>Página Responsive con Bootstrap</p>
                    <p>2º DAW</p>
                    <p>Jorge San Juan</p>
                </div>
            </div>
        </footer>
    </div>
    
@endsection
@extends('layout.plantilla')

@section('title', 'Formulario')
    

@section('content')
    

  <nav class="navbar navbar-expand-md py-0">
    <div class="container-fluid fondoMenu">
        <a class="d-md-block d-none navbar-brand" href="/"><img src="../img/logo.png"></a>     
        <ul class="col-md-2 navbar-nav offset-1">
            <li class="nav-item">
                <a class="nav-link active text-dark" aria-current="page" href="#">Formulario</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/paginas/tabla">Tabla</a>
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
            <div class="col-2 col-md-2"></div>
            <div class="col-8 col-md-8 border border-2 border-dark py-5">
                <form class="row g-3 needs-validation" novalidate>
                    <div class="col-md-4">
                      <label for="nombre" class="form-label">Nombre</label>
                      <div class="input-group has-validation">
                        <input type="text" class="form-control" id="nombre" autocomplete="off" required>
                        <div class="invalid-feedback">Por favor, escriba su nombre</div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <label for="apellido" class="form-label">Apellido</label>
                      <div class="input-group has-validation">
                        <input type="text" class="form-control" id="apellido" autocomplete="off" required>
                        <div class="invalid-feedback">Por favor, escriba su apellido</div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <label for="usuario" class="form-label">Usuario</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" class="form-control" id="usuario" autocomplete="off" required>
                        <div class="invalid-feedback">
                          Por favor, elija un nombre de Usuario
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <label for="ciudad" class="form-label">Ciudad</label>
                      <input type="text" class="form-control" id="ciudad" autocomplete="off" required>
                      <div class="invalid-feedback">Por favor, escriba una ciudad</div>
                    </div>
                    <div class="col-md-3">
                      <label for="pais" class="form-label">País</label>
                      <select class="form-select" id="pais" required>
                        <option selected disabled value="">Elige...</option>
                      </select>
                      <div class="invalid-feedback">
                        Por favor, selecciona un país.
                      </div>
                    </div>
                    <div class="col-md-6">
                      <label for="archivo" class="form-label">Archivo</label>
                      <input type="file" class="form-control" id="archivo" required>
                      <div class="invalid-feedback">
                        Por favor, selecciona un archivo.
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check" required>
                        <label class="form-check-label" for="check">
                          Acepto los términos y condiciones.
                        </label>
                        <div class="invalid-feedback">
                          Debes aceptar los términos y condiciones antes de continuar.
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-success" type="submit">Enviar</button>
                    </div>
                  </form>
            </div>
            <div class="col-2 col-md-2"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../script/validacion.js"></script>
    @endsection
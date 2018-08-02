@extends('layouts.app')

<style>
    footer{
   background-color: #424558;
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    height: 35px;
    text-align: center;
    color: #CCC;
}

footer p {
    padding: 10.5px;
    margin: 0px;
    line-height: 100%;
}

body{
background: url(https://images.alphacoders.com/741/74183.jpg) no-repeat center center fixed;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
}
</style>

@section('content')
<body style="background-color: white;">
    @guest
    <div class="col-12" style="background-color: #2D9F93; margin-top: 25px;">
        <div class="row">
            <div class="col-3">
                <center>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQofgN37w7urXYMbiOVbxp6f8qn1WzBIkmX-4-rQ4AvhI0lAqlJ" width="128" height="128">
                </center>
            </div>

            <div class="col-9" align="center">
                <h1 style="margin-top: 25px;">Nombre Pagina!</h1>
                <h3>slogan pagina.</h3>
            </div>
        </div>
    </div> <br><br>

    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Lista de artículos') }}</div>

                <div class="card-body">
                    @foreach($posts as $post)
                    <section class="my-5">
                        <div class="row">
                            <div class="col-lg-5 col-xl-4">
                              <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
                                <img class="img-fluid" src="images/{{$post->imagen}}" alt="Sample image">
                                <a>
                                  <div class="mask rgba-white-slight"></div>
                                </a>
                              </div>
                            </div>
                            <div class="col-lg-7 col-xl-8">

                                <h3 class="font-weight-bold mb-3"><strong>{{$post->titulo}}</strong></h3>
                                <p class="dark-grey-text">{{$post->resumen}}</p>
                                <p>Escrito por <a class="font-weight-bold">Jessica Clark</a>, 19/04/2018</p>
                                <a href="#" class="btn btn-primary btn-md">Leer más</a>
                            </div>
                        </div>
                    </section>
                    <hr class="my-5">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div> <br><br>
    
        <!-- VISTA PARA ADMINISTRADORES -->
        @else
        @if (Auth::user()->role == 'Administrador')
        <br><br>
            <div class="col-12" align="center">
                <div class="jumbotron jumbotron-fluid">
                  <div class="container">
                    <h1 class="display-4">Bienvenido al Panel Administrador.</h1>
                    <p class="lead">Usted a iniciado sesión como: {{ Auth::user()->name }}.</p>
                  </div>
                </div>
                <a href="{{route('Posts2.index')}}" type="button" class="btn btn-primary btn-lg">Ver Artículos</a>
            </div>
        @endif
        @if (Auth::user()->role == 'Docente')
        <br><br>
            <div class="col-12" align="center">
                <div class="jumbotron jumbotron-fluid">
                  <div class="container">
                    <h1 class="display-4">Bienvenido al Panel Docente.</h1>
                    <p class="lead">Usted a iniciado sesión como: {{ Auth::user()->name }}.</p>
                  </div>
                </div>
                <a href="{{route('Posts.create')}}" type="button" class="btn btn-primary btn-lg">Crear Nuevo Artículo</a>
            </div>
        @endif
    @endguest
</body>

<footer>
    <p>© 2018<a style="color:#0a93a6; text-decoration:none;" href="#"> KingSoft Gold</a>, Todos los derechos reservados.</p>
</footer>
@endsection
@extends('layouts.app')

@section('content')<br><br>

<div class="col-12" align="center">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <div class="row">
                <div class="col-6" align="center">
                    <h1><span class="badge badge-secondary">Mis Articulos</span></h1>
                </div>
            </div>
            <div class="col-6" align="center">
                <a class="btn btn-sn btn-success pull-right" href="{{route('Posts.create')}}" role="button">
                Nuevo artículo</a>
            </div>
        </ol>
    </nav>
</div>
    
<div class="col-12">
    <table class="table table-bordered table-dark" style="border: 1px solid black;">
      <thead class="thead-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Título</th>
          <th scope="col">Resumen</th>
          <th scope="col">Opciones</th>
        </tr>
      </thead>
  <tbody>
    @foreach($posts as $post)
    <tr>
      <th scope="row">{{$post->id}}</th>
      <td>{{$post->titulo}}</td>
      <td>{{$post->resumen}}</td>
      <td>@mdo</td>
    </tr>
    @endforeach
  </tbody>
</table>
{{$posts->render()}}

</div>
@endsection

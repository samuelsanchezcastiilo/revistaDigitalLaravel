@extends('layouts.app')

@section('content')<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                	Artículo
            	</div>
                
				<div class="card-body" align="center">
                    <div>
                        <h1><strong>{{ $post->titulo }}</strong></h1>
                        <p><strong>{{ $post->subtitulo }}</strong></p>
                        <hr><br>
                        <h3><strong>Introducción</strong><br>{{ $post->introduccion }}</h3>
                        <hr><br>
                        <h3><strong>Resumen</strong><br>{{ $post->resumen }}</h3>
                        <img src="images/{{$post->imagen}}" class="ima-fluid">
                        <hr><br>
                        <h3><strong>Abstracto</strong><br>{{ $post->abstracto }}</h3>
                        <hr><br>
                        <h3><strong>Conclusión</strong><br>{{ $post->conclusión }}</h3>
                        <hr><br>
                        <h3><strong>Referencias</strong><br>{{ $post->referencias }}</h3>
                    <div>
            	</div>
            </div>
        </div>
    </div>
</div>
@endsection

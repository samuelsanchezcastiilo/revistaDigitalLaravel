@extends('layouts.app')

@section('content')<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                	Nuevo Artículo
                    <a href="#" class="btn btn-danger float-right">Cancelar</a>
            	</div>
                
				<div class="card-body">
                    {!! Form::open(['route' => 'Posts.store', 'enctype' => 'multipart/form-data']) !!}
                        
                        @include('Docente.Posts.Partials.form')

                    {!! Form::close() !!}
                    
            	</div>
            </div>
        </div>
    </div>
</div>
@endsection
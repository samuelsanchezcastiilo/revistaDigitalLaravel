@extends('layouts.app')

@section('content')<br><br>
<div class="container">
	<center>
		<h1><span class="badge badge-secondary">Lista de artículos</span></h1>
	</center>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
				<div class="card-body">
                    <table class="table table striped table hover">
                    	<thead>
                    		<tr>
                    			<th>ID</th>
                    			<th>Título</th>
                                <th>Usuario autor</th>
                    			<th colspan="3">Opciones</th>
                    		</tr>
                    	</thead>

                    	<tbody>
                    		@foreach($posts as $post)
                    		<tr>
                    			<td>{{ $post->id }}</td>
                    			<td>{{ $post->titulo }}</td>
                                <td>{{ $post->user->name }}</td>
                                <td width="10px">
                                    <a class="btn btn-sn btn-primary" href="{{ route('Posts2.edit', $post->id) }}" role="button">
                                    Publicar
                                    </a>
                                </td>
                    			<td width="10px">
                                    <a class="btn btn-sn btn-danger" href="{{ route('Posts2.show', $post->id) }}" role="button">
                                    Exportar
                                    </a>
                                </td>
                    		</tr>
                    		@endforeach
                    	</tbody>
                    </table>
                    {{$posts->render()}}
            	</div>
            </div>
        </div>
    </div>
</div>
@endsection

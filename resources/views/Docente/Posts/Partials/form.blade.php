{{ Form::hidden('user_id', auth()->user()->id) }}

<div class="form-group">
	{{ Form::label('category_id', 'Categoría') }}
	{{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('titulo', 'Título artículo') }}
    {{ Form::text('titulo', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
    {{ Form::label('slug', 'Url') }}
    {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}
</div>
<div class="form-group">
    {{ Form::label('name', 'Sub título') }}
    {{ Form::text('subtitulo', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('body', 'Introduccíon') }}
    {{ Form::textarea('introduccion', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('body', 'Resumen') }}
    {{ Form::textarea('resumen', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('body', 'Abstracto') }}
    {{ Form::textarea('abstracto', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('body', 'Conclusión') }}
    {{ Form::textarea('conclusion', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('body', 'Referencias') }}
    {{ Form::textarea('referencias', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('imagen', 'Imagen') }}
    {{ Form::file('imagen') }}
</div>
<div class="form-group">
	{{ Form::label('slug', 'Estado') }}
	<label>
		{{ Form::radio('status', 'PUBLISHED') }} Publicado
	</label>
	<label>
		{{ Form::radio('status', 'DRAFT') }} Borrador
	</label>
</div>
<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-success']) }}
</div>

@section('scripts')
<script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
<script>
    $(document).ready(function(){
        $("#name, #slug").stringToSlug({
            callback: function(text){
                $('#slug').val(text);
            }
        });

        CKEDITOR.config.height = 400;
        CKEDITOR.config.width  = 'auto';

        CKEDITOR.replace('abstracto');
    });
</script>
@endsection

@extends('layouts.repo', $response)

@section('titulo', 'Resumen')
@section('subtitulo', 'Información del repositorio')

@section('html')
{!! Form::open(['url' => 'foo/bar']) !!}
	<div class="field">
		{!! Form::label('nombre', 'Nombre', ['class' => 'label']); !!}
		<div class="control">			
			{!! Form::text('nombre', $response['name'] , ['class' => 'input']); !!}
		</div>
	</div>
    
{!! Form::close() !!}

{{-- json_encode($branches, true) --}}

@endsection
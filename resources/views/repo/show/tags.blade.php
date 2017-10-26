@extends('layouts.repo')

@section('html')
    @section('titulo', 'Etiquetas')
    @section('subtitulo', 'Etiquetas marcadas en el repositorio')
    
    <table class="table  is-narrow is-fullwidth">
    	@foreach ($tags['values'] as $tag)
    	<tr>
    		<td>
    			{{ $tag['name'] }}
    		</td>
    	</tr>
    	@endforeach
    </table>
    @include('components.pagination', ['rows' => $tags])
@endsection
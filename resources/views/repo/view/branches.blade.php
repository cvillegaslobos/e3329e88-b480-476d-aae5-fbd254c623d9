@extends('layouts.repo')

@section('html')
    @section('titulo', 'Ramas')
    @section('subtitulo', 'Ramas pertenecientes a repositorio')
    
    <table class="table is-bordered is-striped is-narrow is-fullwidth">
    	@foreach ($branches['values'] as $branch)
    	<tr>
    		<td>
    			{{ $branch['name'] }}
    		</td>
    	</tr>
    	@endforeach
    </table>
@endsection
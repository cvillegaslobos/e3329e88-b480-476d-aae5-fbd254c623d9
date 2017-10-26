@extends('layouts.repo')

@section('html')
    @section('titulo', 'Ramas')
    
    @section('subtitulo', 'Ramas pertenecientes a repositorio')
    
    @include('components.toolbar')
    
    <table class="table is-narrow is-fullwidth">
    	@foreach ($branches['values'] as $branch)
    	<tr>
    		<td>
    			{{ $branch['name'] }}
    		</td>
    	</tr>
    	@endforeach
    </table>
    @include('components.pagination', ['rows' => $branches])
@endsection

@extends('layouts.repo')

@section('html')
    @section('titulo', 'Commits')
    
    @section('subtitulo', 'Commits pertenecientes a repositorio')
    
    @include('components.toolbar')
    
    <table class="table is-narrow is-fullwidth is-hoverable">
    	@foreach ($commits['values'] as $commit)
    	
    	@if(strpos($commit['message'], 'Merge') !== false)
    	<tr class="merge">
    	@else
    	<tr>
    	@endif
    	    <td class="hash-cell">
    	        <a class="hash" href="">{{ substr($commit['hash'], 0, 8) }}</a>
    	    </td>
    		<td class="ellipsis">
    			    {{ explode("\n", $commit['message'])[0] }}
    			    <span class="secondary">
    			        {{ str_replace(explode("\n", $commit['message'])[0], '', $commit['message']) }} 
    			    </span>
    			</span>
    		</td>
    		
    		
    	</tr>
    	@endforeach
    </table>
    {{-- @include('components.pagination', ['rows' => $commits]) --}}
@endsection

<style>

    table {
        white-space: nowrap;
            table-layout: fixed;
    }
    
    table td.hash-cell{
        vertical-align: middle !important;
        width: 80px;
    }
        
    .ellipsis{
        overflow: hidden;
        text-overflow: ellipsis;
    
    }
    
    .secondary{
        color:silver;
    }
    
    .merge{
        opacity: 0.3;
    }
    
    td a{
        color: black;   
    }
    
    .hash{
        font-family: monospace;
    }
    
</style>
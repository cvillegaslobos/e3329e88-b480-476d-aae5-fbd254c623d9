@extends('layouts.master')

@section('content')

{!! Form::open(['url' => 'foo/bar']) !!}
	<div class="field">
		{!! Form::label('nombre', 'Nombre', ['class' => 'label']); !!}
		<div class="control">			
			{!! Form::text('nombre', $response['name'] , ['class' => 'input']); !!}
		</div>
	</div>
    
{!! Form::close() !!}

<hr>
{{-- json_encode($branches, true) --}}

<div class="label">Ramas</div>
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
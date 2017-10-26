{{-- dd($rows)--}}
@php
	$hasPrevious = array_key_exists('previous', $rows);
	$previous = ($hasPrevious) ? parse_url($rows['previous'], PHP_URL_QUERY) : '';
	
	$hasNext = array_key_exists('next', $rows);
	$next = ($hasNext) ? parse_url($rows['next'], PHP_URL_QUERY) : '';
	
	$last = (array_key_exists('size', $rows)) ? ceil($rows['size'] / $rows['pagelen']): 1;
	
	$actual = $rows['page'];
	
	function selected($i, $actual){
		return ($i == $actual) ? 'is-current': 's';
	}

@endphp



<nav class="pagination" role="navigation" aria-label="pagination">
	@if($last > 1)
		@if($hasPrevious)
			<a class="pagination-previous" href="?{{ $previous }}">Anterior</a>
		@else
			<a class="pagination-previous" title="Primera página" disabled>Anterior</a>
		@endif
		
		@if($hasNext)
			<a class="pagination-next" href="?{{ $next }}">Siguiente</a>
		@else
			<a class="pagination-next" title="Última página" disabled>Siguiente</a>
		@endif
	@endif
	
	
	@if($last > 10)
		<ul class="pagination-list">
			<li>
				<a class="pagination-link {{ selected(1, $actual) }}" aria-label="Goto page 1" href="?page=1">1</a>
			</li>
			<li>
				<span class="pagination-ellipsis">&hellip;</span>
			</li>
			
			@if($actual > 1 && $actual < $last)
			
				<li>
					<a class="pagination-link {{ selected( $actual -1, $actual) }}" aria-label="Goto page 45" href="?page={{ $actual -1 }}" >{{ $actual -1}}</a>
				</li>
				<li>
					<a class="pagination-link {{ selected($actual, $actual) }}" aria-label="Goto page 45" href="?page={{ $actual }}">{{ $actual }}</a>
				</li>
				<li>
					<a class="pagination-link {{ selected($actual +1 , $actual) }}" aria-label="Goto page 45" href="?page={{ $actual +1 }}">{{ $actual +1 }}</a>
				</li>
				
			@else
				
				<li>
					<a class="pagination-link {{ selected(ceil($last/2)-1, $actual) }}" aria-label="Goto page 45" href="?page={{ ceil($last/2) -1 }}">{{ ceil($last/2) -1 }}</a>
				</li>
				<li>
					<a class="pagination-link {{ selected(ceil($last/2), $actual) }}" aria-label="Goto page 45" href="?page={{ ceil($last/2) }}">{{ ceil($last/2) }}</a>
				</li>
				<li>
					<a class="pagination-link {{ selected(ceil($last/2)+1, $actual) }}" aria-label="Goto page 45" href="?page={{ ceil($last/2) +1 }}">{{ ceil($last/2) +1 }}</a>
				</li>
				
			
			@endif
			
			<li>
				<span class="pagination-ellipsis">&hellip;</span>
			</li>
			<li>
				<a class="pagination-link {{ selected($last, $actual) }}" aria-label="Ir a {{ $last }}" href="?page={{ $last }}">{{ $last }}</a>
			</li>
		</ul>
	@else
	
		<ul class="pagination-list">
			@for($i = 1; $i <= $last; $i++)
				<li>
					<a class="pagination-link {{ selected($i, $actual) }}"  aria-label="Goto page 1" href="?page={{ $i }}"> {{ $i }}</a>
				</li>
			@endfor
		</ul>	
	
	@endif
</nav>
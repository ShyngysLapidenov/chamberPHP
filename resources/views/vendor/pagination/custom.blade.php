@if ($paginator->hasPages())
			<ul class="nav nav-tabs" id="page-tab">
				@for($i=1; $i <= $paginator->lastPage(); $i++)
				<li class="nav-item" role="presentation">
					<a class="page-link @if($paginator->currentPage() === $i) active @endif" id="list-tab{{ $i }}" href="?page={{ $i }}" type="button" role="tab" aria-controls="list1" aria-selected="true">{{ $i }}</a>
				</li>
				@endfor
			</ul>
@endif

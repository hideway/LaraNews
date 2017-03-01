@if ($paginator->lastPage() > 1)
<nav>
	<ul class="pager">
    	<li class="{{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">
    		<a href="{{ $paginator->url(1) }}">Previous</a>
    	</li>
        <li class="{{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
        	<a href="{{ $paginator->url($paginator->currentPage()+1) }}">Next</a>
        </li>
    </ul>
</nav>
@endif



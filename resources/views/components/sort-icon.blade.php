@props(['sortBy' ,'sortAsc', 'sortField'])

@if($sortBy == $sortField)
@if(!$sortAsc)
<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
	class="w-4 h-4 ml-2">
	<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
</svg>
@endif

@if($sortAsc)
<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
	class="w-4 h-4 ml-2">
	<path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
</svg>
@endif
@endif
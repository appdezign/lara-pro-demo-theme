<article class="card border-0 shadow-sm h-100">
	<div class="position-relative">
		@if($obj->hasFeatured())
			@include('_img.lazy', ['lzobj' => $obj->getFeatured(), 'lzw' => 1280, 'lzh' => 960, 'ar' => '4x3', 'cl' => 'card-img-top'])
		@else
			@include('_img.placeholder', ['phw' => 800, 'phh' => 600, 'phar' => '4x3', 'phbg' => 'e8ecf0', 'phcol' => 'd4d8dc'])
		@endif
		<a href="{{ route($activeroute->getActiveRoute() . '.show', $obj->routeVars) }}"
		   class="position-absolute top-0 start-0 w-100 h-100"
		   aria-label="Read more"></a>
	</div>
	<div class="card-body text-center pb-24">

		{!! _header('list', $obj->title, 'h5 mb-0', $data->htag->listTag, $data->htag->id, route($activeroute->getActiveRoute() . '.show', $obj->routeVars)) !!}

	</div>
</article>

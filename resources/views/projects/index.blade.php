@extends('layout.layout')

@section('content')

<div class="portfolio-gallary pb-4">

	<div class="portfolio-heading-block">
		<h2 class="text-center hdln_2">Projects</h2>
		<div class="seperator-triangle"></div>
	</div>

	<div class="container">
			
		@include('sections.projects')

	</div>

</div>

@endsection
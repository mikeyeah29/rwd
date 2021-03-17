@extends('layout.layout')

@section('content')

<div class="portfolio-item">

	<div class="portfolio-hero">
		<h1 class="text-center hdln_2">{{ $project['name'] }}</h1>
		<img class="portfolio-hero__img" src="" />
	</div>

	<div class="portfolio-item__content">

		<div class="info-bar">
			@foreach($project['tags'] as $tag)
				<div class="tag">{{ $tag }}</div>
			@endforeach
		</div>

		<h2>{{ $project['name'] }}</h2>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec egestas mauris quam. Nullam lorem felis, bibendum quis egestas non, sodales sit amet tortor.
		</p>
		<p>
			Quisque gravida vel magna non hendrerit. Praesent eget augue vestibulum justo pulvinar sollicitudin sit amet ac ipsum. Vivamus maximus, augue a ultrices condimentum, augue odio sagittis purus, a consectetur quam turpis a mauris. 
		</p>
		<p>
			Proin ac commodo nisi, id sodales diam. Vestibulum efficitur tellus augue, id venenatis dui posuere vitae. Mauris massa justo, mollis id volutpat at, aliquam vitae eros. Morbi sollicitudin nulla eu lacus blandit semper.
		</p>
	</div>

</div>

@endsection
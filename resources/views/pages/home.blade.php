@extends('layout.layout')

@section('content')

<div class="portfolio-gallary pb-4">

	<div class="portfolio-heading-block">
		<h2 class="text-center hdln_2">Things I've Done</h2>
		<div class="seperator-triangle"></div>
	</div>

	<div class="container">
		
		@include('sections.projects')

		<div class="text-center mt-4">
			<a href="{{ url('/projects') }}" class="button-style-1">View more projects</a>
		</div>

	</div>

</div>

<div class="portfolio-skills pb-4">

	<div class="portfolio-heading-block">
		<h2 class="text-center hdln_2 txt-color-dark">Things I know</h2>
		<div class="seperator-triangle"></div>
	</div>

	<div class="container">

		@foreach($skillTree as $key => $skills)

			<div class="portfolio-skills__tree">

				<h3>{{ $key }}</h3>

				<div class="portfolio-skill-grid">

					@foreach($levels as $key => $level)
						
						<div class="portfolio-skill-grid__level level-{{ $key }}">
							<div>
								<span>{{ $level }}</span>
							</div>							
						</div>

					@endforeach
				
				</div>

				@foreach($skills as $key => $value)

					<div class="portfolio-skill d-flex">
						<span class="portfolio-skill__key">{{ $key }}</span>
						<div class="portfolio-skill__bar">
							<div class="portfolio-skill__inner-bar portfolio-skill--{{ $key }}" 
								 data-skill="{{ $key }}"
								 data-level="{{ $value }}"></div>
						</div>
					</div>

				@endforeach

			</div>

		@endforeach
	
	</div>
</div>
<div class="portfolio-contact pb-5" id="contact">

	<div class="portfolio-heading-block">
		<h2 class="text-center hdln_2">Contact Me</h2>
		<div class="seperator-triangle"></div>
	</div>

	<div class="container text-center">

		<img src="img/me.jpg" class="avatar avatar--md" />
		<p></p>

		<form class="form form-bubbles">
			<input class="form-control mb-2" placeholder="Name..." />
			<input class="form-control mb-2" placeholder="Email..." />
			<textarea class="form-control mb-2" placeholder="Message..."></textarea>
			<button class="form-control form-bubbles__button">Submit</button>
		</form>

	</div>

</div>

@endsection
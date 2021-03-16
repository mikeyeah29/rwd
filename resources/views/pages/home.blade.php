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

		
	<div class="portfolio-skills__tree">

		<h3>Frontend</h3>

		<div class="portfolio-skill-grid">

						
				<div class="portfolio-skill-grid__level level-0">
					<div>
						<span>basic</span>
					</div>
					
				</div>
						
				<div class="portfolio-skill-grid__level level-1">
					<div>
						<span>confident</span>
					</div>
					
				</div>
						
				<div class="portfolio-skill-grid__level level-2">
					<div>
						<span>nailed it</span>
					</div>
					
				</div>
						
				<div class="portfolio-skill-grid__level level-3">
					<div>
						<span>god like</span>
					</div>
					
				</div>
			
		</div>

					
			<div class="portfolio-skill d-flex">
				<span class="portfolio-skill__key">html</span>
				<div class="portfolio-skill__bar">
					<div class="portfolio-skill__inner-bar portfolio-skill--html" 
						 data-skill="html"
						 data-level="95"></div>
				</div>
			</div>

					
			<div class="portfolio-skill d-flex">
				<span class="portfolio-skill__key">css/sass</span>
				<div class="portfolio-skill__bar">
					<div class="portfolio-skill__inner-bar portfolio-skill--css-sass" 
						 data-skill="css/sass"
						 data-level="95"></div>
				</div>
			</div>

					
			<div class="portfolio-skill d-flex">
				<span class="portfolio-skill__key">JavaScript</span>
				<div class="portfolio-skill__bar">
					<div class="portfolio-skill__inner-bar portfolio-skill--JavaScript" 
						 data-skill="JavaScript"
						 data-level="80"></div>
				</div>
			</div>

					
			<div class="portfolio-skill d-flex">
				<span class="portfolio-skill__key">jQuery</span>
				<div class="portfolio-skill__bar">
					<div class="portfolio-skill__inner-bar portfolio-skill--jQuery" 
						 data-skill="jQuery"
						 data-level="90"></div>
				</div>
			</div>

					
			<div class="portfolio-skill d-flex">
				<span class="portfolio-skill__key">VueJs</span>
				<div class="portfolio-skill__bar">
					<div class="portfolio-skill__inner-bar portfolio-skill--VueJs" 
						 data-skill="VueJs"
						 data-level="70"></div>
				</div>
			</div>

					
			<div class="portfolio-skill d-flex">
				<span class="portfolio-skill__key">React</span>
				<div class="portfolio-skill__bar">
					<div class="portfolio-skill__inner-bar portfolio-skill--React" 
						 data-skill="React"
						 data-level="20"></div>
				</div>
			</div>

		
	</div>

	
	<div class="portfolio-skills__tree">

		<h3>Backend</h3>

		<div class="portfolio-skill-grid">

						
				<div class="portfolio-skill-grid__level level-0">
					<div>
						<span>basic</span>
					</div>
					
				</div>
						
				<div class="portfolio-skill-grid__level level-1">
					<div>
						<span>confident</span>
					</div>
					
				</div>
						
				<div class="portfolio-skill-grid__level level-2">
					<div>
						<span>nailed it</span>
					</div>
					
				</div>
						
				<div class="portfolio-skill-grid__level level-3">
					<div>
						<span>god like</span>
					</div>
					
				</div>
			
		</div>

					
			<div class="portfolio-skill d-flex">
				<span class="portfolio-skill__key">php</span>
				<div class="portfolio-skill__bar">
					<div class="portfolio-skill__inner-bar portfolio-skill--php" 
						 data-skill="php"
						 data-level="80"></div>
				</div>
			</div>

					
			<div class="portfolio-skill d-flex">
				<span class="portfolio-skill__key">node</span>
				<div class="portfolio-skill__bar">
					<div class="portfolio-skill__inner-bar portfolio-skill--node" 
						 data-skill="node"
						 data-level="60"></div>
				</div>
			</div>

		
	</div>

	
	<div class="portfolio-skills__tree">

		<h3>Framewords</h3>

		<div class="portfolio-skill-grid">

						
				<div class="portfolio-skill-grid__level level-0">
					<div>
						<span>basic</span>
					</div>
					
				</div>
						
				<div class="portfolio-skill-grid__level level-1">
					<div>
						<span>confident</span>
					</div>
					
				</div>
						
				<div class="portfolio-skill-grid__level level-2">
					<div>
						<span>nailed it</span>
					</div>
					
				</div>
						
				<div class="portfolio-skill-grid__level level-3">
					<div>
						<span>god like</span>
					</div>
					
				</div>
			
		</div>

					
			<div class="portfolio-skill d-flex">
				<span class="portfolio-skill__key">laravel</span>
				<div class="portfolio-skill__bar">
					<div class="portfolio-skill__inner-bar portfolio-skill--laravel" 
						 data-skill="laravel"
						 data-level="68"></div>
				</div>
			</div>

					
			<div class="portfolio-skill d-flex">
				<span class="portfolio-skill__key">WordPress</span>
				<div class="portfolio-skill__bar">
					<div class="portfolio-skill__inner-bar portfolio-skill--WordPress" 
						 data-skill="WordPress"
						 data-level="80"></div>
				</div>
			</div>

		
	</div>

	
	<div class="portfolio-skills__tree">

		<h3>Other</h3>

		<div class="portfolio-skill-grid">

						
				<div class="portfolio-skill-grid__level level-0">
					<div>
						<span>basic</span>
					</div>
					
				</div>
						
				<div class="portfolio-skill-grid__level level-1">
					<div>
						<span>confident</span>
					</div>
					
				</div>
						
				<div class="portfolio-skill-grid__level level-2">
					<div>
						<span>nailed it</span>
					</div>
					
				</div>
						
				<div class="portfolio-skill-grid__level level-3">
					<div>
						<span>god like</span>
					</div>
					
				</div>
			
		</div>

					
			<div class="portfolio-skill d-flex">
				<span class="portfolio-skill__key">Command Line</span>
				<div class="portfolio-skill__bar">
					<div class="portfolio-skill__inner-bar portfolio-skill--Command Line" 
						 data-skill="Command Line"
						 data-level="50"></div>
				</div>
			</div>

		
	</div>

	
	</div>
</div>
<div class="portfolio-contact pb-5">

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
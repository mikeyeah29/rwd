<!DOCTYPE html>
<html>
	
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>{{ $title }}</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="{{ url('/css/main.css') }}">
	</head>

	<body>

		<div class="portfolio-header bg-color-dark-grey">
			<div class="container-fluid">

				<div class="overflow-hidden">
					<div class="socials"></div>

					<div class="burger burger-squeeze">
						<div class="burger-lines"></div>
					</div>
				</div>

				<img src="{{ url('img/logowhite.png') }}" class="portfolio-header__logo" />

			</div>
		</div>

		<nav class="portfolio-nav">
			<ul>	
				<li>
					<a href="/">Projects</a>
				</li>				
				<li>
					<a href="/articles">Skills</a>
				</li>			
				<li>
					<a href="/contact">Contact</a>
				</li>
			</ul>
		</nav>

		@yield('content')

		<footer class="portfolio-footer bg-color-primary text-center p-4">
			<div class="rwd_wide">
				<div class="logo"><img src="{{ url('img/logowhite.png') }}"></div>
				<hr>
				<p>Rockett Web Development &copy; <?php echo Date('Y'); ?></p>
			</div>
		</footer>

		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		<script src="{{ url('js/main.js') }}"></script>

	</body>
</html>
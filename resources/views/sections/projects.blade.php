<div class="d-flex flex-wrap justify-content-center">
	
	<?php foreach ($projects as $slug => $project) { ?>
		
		<a class="portfolio-square" href="{{ url('/projects/' . $slug) }}">
			<img src="img/road.jpg" />
			<span class="portfolio-square__title">{{ $project['name'] }}</span>
		</a>

	<?php } ?>

</div>
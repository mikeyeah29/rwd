<div class="d-flex flex-wrap justify-content-center">
	
	<?php foreach ($projects as $project) { ?>
		
		<div class="portfolio-square">
			<img src="img/road.jpg" />
			<span class="portfolio-square__title">{{ $project['name'] }}</span>
		</div>

	<?php } ?>

</div>
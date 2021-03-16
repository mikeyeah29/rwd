(function() {

	// burgers

	var burger = $('.burger');
	var menu = $('.portfolio-nav');

	burger.on('click', function() {
		
		if(burger.hasClass('is-open')) {
			burger.removeClass('is-open');
			menu.removeClass('is-open');
		}else{
			burger.addClass('is-open');
			menu.addClass('is-open');
		}

	});

	function loadSkillBars() {
		var skillBars = $('.portfolio-skill__inner-bar');
		skillBars.each(function() {
			var level = $(this).data('level');
			$(this).css('width', level + '%');
		});
	}

	// TODO: load when scroll reaches skills
	loadSkillBars();

})();
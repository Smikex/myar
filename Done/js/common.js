 $(document).ready(function(){	

	var id = window.location.search.replace( '?', '');
	$("#"+id).addClass('active').find(".blockService__description").slideToggle();

	/*________ pageServices ________*/
	var titleService = $(".blockService");
	titleService.on('click',  function(event) {
		event.preventDefault();
		$(this).toggleClass('active');
		$(this).find(".blockService__description").slideToggle();
	});
	/*________ End .pageServices ________*/
});

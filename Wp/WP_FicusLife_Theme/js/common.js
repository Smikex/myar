 $(document).ready(function(){	

	var a = window.location;
	console.log(a);


	if (window.location.href.indexOf("title=0") > -1) 
	{ console.log("URL contains utm_medium"); } 


	/*________ pageServices ________*/
	var titleService = $(".blockService");
	titleService.on('click',  function(event) {
		event.preventDefault();
		$(this).toggleClass('active');
		$(this).find(".blockService__description").slideToggle();
	});
	/*________ End .pageServices ________*/
});

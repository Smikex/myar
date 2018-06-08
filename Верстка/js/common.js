var mobileBtn = $("#mobileBtn");
mobileBtn.on('click',  function(event) {
	event.preventDefault();
	$(this).toggleClass('active');
	$(".menuTop").toggleClass('active');
});

var sliderServices = $(".sliderServices");
sliderServices.slick({
	slidesToShow: 4,
	arrows: true,
	dots: false,
	speed: 1000,
	autoplaySpeed: 4000,
	infinite: false,
	nextArrow: '<div class="icon-arrow icon-arrow-next"><img src="img/arrow_slider_next.png" alt="" /></div>',
	prevArrow: '<div class="icon-arrow icon-arrow-prev"><img src="img/arrow_slider_prev.png" alt="" /></div>',
	appendArrows: $(".sliderServices__nav"),
	responsive: [
		{
			breakpoint: 1200,
			settings: {
				slidesToShow: 3,
			}
		},

		{
			breakpoint: 992,
			settings: {
				slidesToShow: 2,
			}
		},
		{
			breakpoint: 651,
			settings: {
				slidesToShow: 1,
			}
		},

	],
});

// var sliderReality = $(".sliderReality");
// sliderReality.slick({
// 	slidesToShow: 4,
// 	arrows: true,
// 	dots: false,
// 	speed: 1000,
// 	autoplaySpeed: 4000,
// 	infinite: false,
// 	nextArrow: '<div class="icon-arrow icon-arrow-next"><img src="img/arrow_slider_next.png" alt="" /></div>',
// 	prevArrow: '<div class="icon-arrow icon-arrow-prev"><img src="img/arrow_slider_prev.png" alt="" /></div>',
// 	appendArrows: $(".sliderReality__nav"),
// 	responsive: [
// 		{
// 			breakpoint: 1200,
// 			settings: {
// 				slidesToShow: 3,
// 			}
// 		},

// 		{
// 			breakpoint: 992,
// 			settings: {
// 				slidesToShow: 2,
// 			}
// 		},
// 		{
// 			breakpoint: 651,
// 			settings: {
// 				slidesToShow: 1,
// 			}
// 		},

// 	],
// });

/*________ Mask ________*/
$("input[type='tel']").mask("+99-999-999-99-9?9");
/*________End ________*/
// $(document).ready(function(){	
// });
$(window).load(function() {
        $('#slider').nivoSlider({
        	effect: 'random',                 // Specify sets like: 'fold,fade,sliceDown'
		    slices: 10,                     // For slice animations
		    animSpeed: 500,                 // Slide transition speed
		    pauseTime: 3000,                 // How long each slide will show
		    startSlide: 0,                     // Set starting Slide (0 index)
		    directionNav: true,             // Next & Prev navigation
		    controlNav: true,                 // 1,2,3... navigation
		    controlNavThumbs: false,         // Use thumbnails for Control Nav
		    pauseOnHover: true,             // Stop animation while hovering
		    manualAdvance: false,             // Force manual transitions
		    prevText: 'Prev',                 // Prev directionNav text
		    nextText: 'Next',                 // Next directionNav text
		    randomStart: false,             // Start on a random slide
		    beforeChange: function(){},     // Triggers before a slide transition
		    afterChange: function(){},         // Triggers after a slide transition
		    slideshowEnd: function(){},     // Triggers after all slides have been shown
		    lastSlide: function(){},         // Triggers when last slide is shown
		    afterLoad: function(){}         // Triggers when slider has loaded
        });
		
		owlCarousel_FunFact();		
		galleryImages ();	
	
	
		$(".dropdown-link").on('click', function(){
			$(".mobile-dropdown").slideToggle("fast");
		});
		
		$(".menu-name").on('click', function(){
			$(".sub-menu").toggleClass('open-sub');
			// $(".mobile-dropdown").slideToggle("fast");
		});
		
});

function galleryImages () {
	$('.bxslider').bxSlider({
	  pagerCustom: '#bx-pager'
	});
}
// OwlCarousel FunFact Section
function owlCarousel_FunFact() {
	var owl = $(".owl-carousel");
		owl.owlCarousel({
			loop:true,
			autoWidth:true,
			autoplay: true,
			items:5,
			margin:15,
			responsiveClass:true,
			animateOut: 'fadeOut',
			navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
			responsive:{
				0:{
					items:1,
					nav:true
				},
				600:{
					items:3,
					nav:false
				},
				1000:{
					items:4,
					nav:true,
					loop:false
				}
			}
		});
};
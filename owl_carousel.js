//Our Services/ More Services
$('.owl-one').owlCarousel({
		loop:true,
		margin:10,
		autoplay:true,
		autoplayTimeout:3000,
		stagePadding: 50,
		nav: true,
		navText: ['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'],
		dots: false,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:3
			},
			1000:{
				items:4
			}
		}
	});

//Testimonials
$('.owl-two').owlCarousel({
		loop:true,
		margin:10,
		autoplay:true,
		autoplayTimeout:4000,
		stagePadding: 20,
		nav: false,
		dots: false,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:3
			},
			1000:{
				items:4
			}
		}
	});

//Clientele
$('.owl-four').owlCarousel({
		loop:true,
		margin:20,
		autoplay:true,
		autoplayTimeout:3000,
		stagePadding: 50,
		nav: true,
		navText: ['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'],
		dots: false,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:3
			},
			1000:{
				items:5
			}
		}
	});
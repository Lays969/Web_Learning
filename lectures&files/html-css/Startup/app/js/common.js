$(function() {

	$('.slider').slick({
	  	infinite: true,
  		slidesToShow: 4,
  		slidesToScroll: 1,
  		prevArrow: '<button class="prev arrow"><i class="fa fa-angle-left fa-2x arrow-icons" aria-hidden="true"></i></button>',
  		nextArrow: '<button class="next arrow"><i class="fa fa-angle-right fa-2x arrow-icons" aria-hidden="true"></i></button>',
		responsive: [
    		{
    		  breakpoint: 1024,
    		  settings: {
    		    slidesToShow: 2,
    		    slidesToScroll: 2,
    		    infinite: true,
    		  }
    		},
    		{
    		  breakpoint: 600,
    		  settings: {
    		    slidesToShow: 2,
    		    slidesToScroll: 2
    		  }
    		},
    		{
    		  breakpoint: 480,
    		  settings: {
    		    slidesToShow: 1,
    		    slidesToScroll: 1
    		  }
    		}
  		]
	});

	$('.main-partners-comment').slick({
    	arrows : false,
    	autoplay: true,
    	dots: true,
        dotsClass: 'custom-dots', //slick generates this <ul.custom-dots> within the appendDots container
          
  	});	


});

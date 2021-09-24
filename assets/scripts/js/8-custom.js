jQuery( document ).ready(function($) {
	
	var _app = window._app || {};
		
	_app.emptyParentLinks = function() {
			
		$('.menu li a[href="#"]').click(function(e) {
		    e.preventDefault ? e.preventDefault() : e.returnValue = false;
		});	
		
	};
	
	_app.mobile_nav = function() {
		$(document).on('click', 'a#menu-toggle', function(){
			
			if ( $(this).hasClass('clicked') ) {
				$(this).removeClass('clicked');
				$('#off-canvas').fadeOut(200);
			
			} else {
			
				$(this).addClass('clicked');
				$('#off-canvas').fadeIn(200);
			
			}
			
		});
	}
	
	_app.towns_dropdown = function() {
		if($('#towns-dropdown').length ) {
			
			var setWidth = function() {
				buttonWidth = $('.button.dropdown-btn').outerWidth();
				$('#towns-dropdown').css('width', buttonWidth);
			};
			setWidth();
			
			$(window).resize(function() {
				setWidth();
			});
			
		}
	}
	
	_app.has_scrolled = function() {

		// Fixed nav trigger
		$(window).on("load scroll resize", function(e) {
			var header_height = 1;
			var delay_height = 0;

			if ($(this).scrollTop() > (header_height + delay_height)) {
				$('body').addClass('has-scrolled');
			} else {
				$('body').removeClass('has-scrolled');
			}

		});

	};
	
	_app.overflow_slider = function() {
		if($('.overflow-slider').length ) {
			$('.overflow-slider').slick({
				infinite: true,
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: true,
				dots: false,
				rows: 0,
				variableWidth: true,
				prevArrow: $('.slick-prev'),			
				nextArrow: $('.slick-next'),
			});
		}
	}
	
	_app.cubes = function() {
		if($('.cube').length ) {
			
			$(window).on("load resize", function() {
		
				$('.cube').each(function(){
					var $cube = $(this);			
					var $elementHeight = $($cube).outerHeight();
					var $elementWidth = $($cube).outerWidth();
									
					if( $elementHeight < $elementWidth ) {
						$($cube).css('min-height', $elementWidth);
					} else {
						$($cube).css('min-height', 0);
					}			
	
				});				
			
			});
			
		}
		
	}
	
	_app.cta_bottom_height = function() {
		if( $('.cube').length && $('.cta-bottom').length ) {
			
			$(window).on("load resize", function() {

				$('.cta-bottom').each(function(){
					var $cube = $(this).closest('.cta-element').parent().siblings().find('.cube');
													
					var $cubeHeight = $($cube).outerHeight();
									
					$(this).css('min-height', $cubeHeight);			
	
				});				
			
			});
			
		}	
	}
	
	_app.dot_slider = function() {
		if($('.dot-slider').length ) {
					
			$('.dot-slider').each(function(){

				var $slider = $(this);
				var $slide = $slider.find('.link-wrap');
				
				var divs = $($slide);
					for(var i = 0; i < divs.length; i+=3) {
					divs.slice(i, i+3).wrapAll("<div class='single-slide'></div>");
				}
				
				$slider.slick({
					infinite: true,
					slidesToShow: 1,
					slidesToScroll: 1,
					arrows: false,
					dots: true,
				});
				
			});

			
		}
	}	
	
	_app.block_hacks = function() {
		$('.wp-block-button__link').addClass('button');
		$('.wp-block-button__link').addClass('banner-btn');
	}
	
	_app.trail_animation = function() {
		
		
		gsap.to( 'g#Group_814 g.scale-up', { scale:0.5, x: '25%', y: '25%', autoAlpha:0 });
		
		gsap.to( 'g#Group_814 g.move-down', { y: -70, autoAlpha:0 });
		
		var trailIconsWrap = $('.trail-icons-wrap');
		
		var $tickGroup1 = $('g.g-1 > g');
		var $tickGroup2 = $('g.g-2 > g');
		var $tickGroup3 = $('g.g-3 > g');
		var $tickGroup4 = $('g.g-4 > g');		
		var $pa = $('g#pa');
		var $beer = $('g#beer');
		var $pin = $('g#pin');
		var $car = $('g#car');
		var $ped = $('g#ped');
		
		var $fadeDuration = .2;
		var $tickStagger = .07;
		
		var tl = gsap.timeline({
			    scrollTrigger: {
		      trigger: trailIconsWrap,
		      start: "bottom bottom",
		    }
		});

		tl.to( $tickGroup1, 0, {
			autoAlpha: 1,
			stagger: {
				each: $tickStagger,
				ammount: 0
			}	
		});
				
		tl.to($pa, {autoAlpha: 1, duration: $fadeDuration}, .6);
		tl.to($pa, {scale:1, x: 0, y: 0, duration: 1, ease: "back.out(2.5)"}, "<");
		
		tl.to( $tickGroup2, 0, {
			autoAlpha: 1,
			stagger: {
				each: $tickStagger,
				ammount: 0
			}
		}, "-=.8");
		
		tl.to($beer, {autoAlpha: 1, duration: $fadeDuration}, 1.4);
		tl.to($beer, {scale:1, x: 0, y: 0, duration: 1, ease: "back.out(2.5)"}, "<");

		tl.to($pin, {autoAlpha: 1, duration: 2}, 1.4);
		tl.to($pin, {y: 0, duration: 1, ease: "bounce.out"}, "<");
		
		tl.to( $tickGroup3, 0, {
			autoAlpha: 1,
			stagger: {
				each: $tickStagger,
				ammount: 0
			}
		}, "-=1.9");
				
		tl.to($car, {autoAlpha: 1, duration: $fadeDuration}, 2.2);
		tl.to($car, {scale:1, x: 0, y: 0, duration: 1, ease: "back.out(2.5)"}, "<");
		
		tl.to( $tickGroup4, 0, {
			autoAlpha: 1,
			stagger: {
				each: $tickStagger,
				ammount: 0
			}
		}, "-=1.1");

		tl.to($ped, {autoAlpha: 1, duration:  $fadeDuration}, 3);
		tl.to($ped, {scale:1, x: 0, y: 0, duration: 1, ease: "back.out(2.5)"}, "<");


	}
			
	_app.init = function() {
		
		// Standard Functions
		_app.emptyParentLinks();
		_app.mobile_nav();
		_app.towns_dropdown();
		_app.has_scrolled();
		_app.overflow_slider();
		_app.cubes();
		_app.cta_bottom_height();
		_app.dot_slider();
		_app.block_hacks();
		_app.trail_animation();
	}


	// initialize functions on load
	$(function() {
		_app.init();
	});

});
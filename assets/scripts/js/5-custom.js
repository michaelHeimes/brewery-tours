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
	}


	// initialize functions on load
	$(function() {
		_app.init();
	});

});
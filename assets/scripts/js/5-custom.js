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
		if($('#towns-dropdown').length ){
			
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
			
	_app.init = function() {
		
		// Standard Functions
		_app.emptyParentLinks();
		_app.mobile_nav();
		_app.towns_dropdown();
	}


	// initialize functions on load
	$(function() {
		_app.init();
	});

});
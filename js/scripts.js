jQuery(document).ready(function() {

	var navOffset, scrollPos = 0;

	jQuery("nav").wrap('<div class="nav-placeholder"></div>');
	jQuery("nav").wrapInner('<div class="nav-inner"></div>');
	jQuery(".nav-inner").wrapInner('<div class="nav-inner-most"></div>');

	function stickyUtility() {

		if (!jQuery("nav").hasClass("fixed")) {
			navOffset = jQuery("nav").offset().top;
		}

		jQuery(".nav-placeholder").height(jQuery("nav").outerHeight());

	}

	stickyUtility();

	jQuery(window).resize(function() {
		stickyUtility();
	});

	jQuery(window).scroll(function() {

		scrollPos = jQuery(window).scrollTop();

		if (scrollPos >= navOffset) {
			jQuery("nav").addClass("navbar-fixed-top");
		} else {
			jQuery("nav").removeClass("navbar-fixed-top");
		}

	});

});

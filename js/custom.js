
(function($) {
	"use strict";
	
	/* === Toggle === */

	 $(".navbar-toggle").on("click", function() {
        $(this).toggleClass("active");
        $("#header").toggleClass("head-add");
    });
	
	/* === fixed-menu === */
		$(window).on('scroll', function () {
			if ($(window).scrollTop() > 50) {
				$('.top-head').addClass('fixed-menu');
			} else {
				$('.top-head').removeClass('fixed-menu');
			}
		});
		

	$('.selectpicker').selectpicker();


	/* === select2 === */
	if ($(".select2").length > 0){
		$(".select2").select2();
		console.log("(y)");
	}
	
	
	

})(jQuery);



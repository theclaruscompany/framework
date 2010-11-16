/*
 * jQuery Cycle Plugin (with Transition Definitions)
*/
$(document).ready(function() {
	$("#gallery_output img").not(":first").hide();
 
	$("#gallery a").click(function() {
		if ( $("#" + this.rel).is(":hidden") ) {
			$("#gallery_output img").slideUp();
			$("#" + this.rel).slideDown();
		}
	});
});
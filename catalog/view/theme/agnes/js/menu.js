$(document).ready(function(){
	$("#menu ul li, #full-menu ul li, #switcher ul li, #links ul li").hover(function () {
		$(this).children('div').stop(true, true).slideDown('fast', function() {
		// Animation complete.
		});

	;}, 
	function () {
	$(this).children('div').stop(true, true).slideUp('fast', function() {
		// Animation complete.
		});
	});
});
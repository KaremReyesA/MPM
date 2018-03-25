$(document).ready(function(){
	$(".ihover:not(.images)").hover(function () {
		$(this).animate({opacity: .7}, 'fast')}, function () {
		$(this).animate({opacity: 1}, 'fast')
	});
		
	$(".video").hover(function () {
		$(this).animate({opacity: .7}, 'fast')}, function () {
		$(this).animate({opacity: 1}, 'fast')
	});

});
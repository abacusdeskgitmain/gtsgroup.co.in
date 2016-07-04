$(document).ready(function () {
	//kwicks begin
	$('.kwicks').kwicks({
		max : 754,
		spacing : 0,
		sticky : true,  
		event : 'click'
	});
	
	//rss begin
	$(".rss img").hover(function(){
		$(this).stop().animate({top:"0"}, "fast")									 
	}, function (){
		$(this).stop().animate({top:"-39"}, "medium")
	});
});
$(document).ready(function () {
	
	//header background
	var withbg = $('.proj-featured').offset().top;
	var withoutbg = $('.video-container').offset().top;
	$(document).scroll(function(){
		if($(this).scrollTop() > withoutbg) 
		{
			$('header').css({"background":"none"});
		}
		if($(this).scrollTop() > withbg - 50) 
		{
			$('header').css({"background":"#333333"});
		}
		
	});


})
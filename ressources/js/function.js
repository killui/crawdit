$(document).ready(function () {
	
	//header background
	var withbg = $('.proj-featured').offset().top;
	var withoutbg = $('.video-container').offset().top;
	$(document).scroll(function(){
		if($(this).scrollTop() > withoutbg) 
		{
			$('header').css({"background":"none","border-bottom":"none"});
			$('header nav div , header nav ul li').css({"border-left":"none","border-bottom":"none","border-right":"none"});
			$('#search-bar input').css({"border":"1px solid #333","background":"none"})
		}
		if($(this).scrollTop() > withbg - 50) 
		{
			$('header').css({"background":"#333333","border-bottom":"#454545 solid 1px"});
			$('header nav div, header nav ul li').css({"border-bottom":"1px solid #252525","border-left":"#424242 solid 1px","border-right":"#252525 solid 1px"});
			$('header nav div').first().css({"border-bottom":"none","border-left":"none","border-right":"#252525 solid 1px"});
			$('header nav div').last().css({"border-bottom":"none","border-left":"#424242 1px solid","border-right":"none"});
			$('#search-bar input').css({"border":"none","background":"#252525"})
		}
		
	});


})
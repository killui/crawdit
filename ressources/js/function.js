$(document).ready(function () {

	/***MORE BUTTON***/
/*		function showNewProj(){*/

	$('#connect-btn').click(function(){

		var signHeight = $('.signin').height();

			if(signHeight<3){
		$('.signin').animate({'height':'300px'},'slow');
			}else{
				$('.signin').animate({'height':'0px'},'slow');
			}

	});

		$('.more-proj-btn').click(function(){
			console.log('gaga');
			$('.proj-new').animate({"height":"420px","overflow":"auto"},'slow');



		});

		$('.proj-featured-list video, .proj-list video').mouseover(function(e){
			var player = this;
			console.log('fefe');
			player.play();
			player.muted = true;
		});

			$('.proj-featured-list video, .proj-list video').mouseout(function(e){
			var player = this;
			player.pause()
			player.load();
		});



		$('.video-container>div>hr').animate({'width':'777px'},'slow');
		$('.project-featured-list').click(function(){

			

		});





/*		showNewProj();


	}*/
	

	var height = $(".desc-proj").load().height();

	$(".desc-proj aside").height(height);
	

	/*** Perks checked ***/
	
	$('.perks,.choice').on('click',function(){
		$("input").prop("checked",false);

		$("input",this).prop("checked",true);
	});
	

	/**** Video mode cinema ***/
	var videoproj = $('.video-proj');
	var infoproj = $('.info-proj');

	$('.need-proj video, .play').on('click',function(){
		
		$(document).scrollTo(videoproj,500);
		$('.cine-mode').fadeIn(500);
		$('.play').fadeOut(500);
		$(".video-proj").animate({
			"height":"600px"			

		},{
			queue:true,
			duration:500
		});
	})

	$('.hide-cine-mode').on('click',function(){
		$('.cine-mode').fadeOut(1500);
		$('.play').fadeIn(1000);
		$('.video-proj').animate({
			"height":"300px"
			
		},{
			queue:true,
			duration:1000
		});
		
		$(document).scrollTo(infoproj,1000);
	})

	/***HEADER BACKGROUND***/
	/*var withbg = $('.proj-featured').offset().top;
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
		
	});*/

	/*$(document).scroll(function(){
		var withbg = $('.proj-featured').offset().top;
		var withoutbg = $('.video-container').offset().top;
		if($(this).scrollTop() > withoutbg) 
		{
			$('header').css({"position":"fixed"});
		
		}
		if($(this).scrollTop() > withbg - 50) 
		{
			$('header').animate({"top":"-100px"});
		}
		if($(this).scrollTop() > - 10){
		$('header').animate({"top":"0px"});	
		}
		
	});*/
/*$('.more-square').mouseover(function(e){
e.stopPropagation();

});*/

var morePropag = 0;
$('.more-square img').mouseover(function(e){
	
	$('.more-line').animate({'width':'900px'},'fast');
	


});
$('.more-square img').mouseout(function(e){
	
	$('.more-line').animate({'width':'450px'},'fast');


});



	//Avancement don
	var pledged = 10000;
	//console.log(pledged);
	var funded = $('.avancement').width();
	//console.log(funded);

	$('.input-don').keyup(function(){
		var don = $(this).val();
		//console.log(don);

		var widthdon =(958*(don/100))/100;
		$('.don').fadeIn(200);
		$('.don').animate({
			"width":widthdon,
			"margin-left":funded
		},500);
	})


})
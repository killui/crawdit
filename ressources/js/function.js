$(document).ready(function () {
	
	// Masonry
	$('.container').masonry({
		// options
		columnWidth: 300,
		gutterWidth: 0,
		isAnimated: false,
		isFitWidth: true,
		itemSelector: '.fiche'
	})
	


	/***Anim Intro Home page***/

	$('#intro-freelance-content').animate({'right':'0','opacity':'1'},1600);
	$('#intro-project-content').animate({'left':'0','opacity':'1'},1600);
	$('.intro').animate({'width':'960px'},1500);

	/***MORE BUTTON***/

	$('#connect-btn').click(function(){

		var signHeight = $('.signin').height();

			if(signHeight<3){
		$('.signin').animate({'height':'90px'},'slow');
			}else{
				$('.signin').animate({'height':'0px'},'slow');
			}

	});


	$('.proj-featured-list').on('mouseover',function(){
		 $('.proj-list-cta', this).show();


	}).on('mouseout',function(){

		  $('.proj-list-cta', this).hide();
	  
	   
	});


	$('.proj-list-cta a').on('mouseover',function(){

		var player = $(this).closest('.proj-featured-list').children()[0];
		console.log(player);
		player.play();
	 	player.muted = true;


		}).on('mouseout',function(){

		var player = $(this).closest('.proj-featured-list').children()[0];


		console.log('out');
	 	player.pause();
	    player.load();

		
	});

	$('.freelance-featured-list').on('mouseover',function(){
		$('.freelance-list-cta', this).show();
	}).on('mouseout',function(){
		$('.freelance-list-cta', this).hide();
	});



	$('.freelance-list-cta a').on('mouseover',function(){

		var zoomFreelancer = $($(this).closest('.freelance-featured-list').children()[0]).children();

		zoomFreelancer.stop().animate({'width':'105%'},'slow');

	}).on('mouseout',function(){

		var zoomFreelancer = $($(this).closest('.freelance-featured-list').children()[0]).children();

		zoomFreelancer.stop().animate({'width':'100%'},'slow');

	});

	

	/***MORE BUTTON***/

	

		var gaga;
		
		$('.more-square').click(function(){
			var scrollNewProj = scrollY + 400;
			var scrollNewProjReverse = scrollY - 400;
			if(gaga == 0 || gaga == undefined){
			
	$('html, body').animate({scrollTop:scrollNewProj},700);
				$('.proj-new').animate({"height":"420px","overflow":"auto"},'slow');
				$(this).children().attr('src','ressources/images/croix-2.png')
				console.log('tr')
				gaga = 1;
				console.log(gaga);

			}else if(gaga = 1){
				$('html, body').animate({scrollTop:-scrollNewProjReverse},700);
				$('.proj-new').animate({"height":"0px","overflow":"hidden"},'slow');
				$(this).children().attr('src','ressources/images/croix.png')
				gaga = 0;
			}


		});

		var fafa;
		
		$('.more-freelance-square').click(function(){
			var scrollNewProj = scrollY + 400;
			var scrollNewProjReverse = scrollY - 400;

			if(fafa == 0 || fafa == undefined){
				$('html, body').animate({scrollTop:scrollNewProj},700);
				$('.freelance-new').animate({"height":"420px","overflow":"auto"},'slow');
				$(this).children().attr('src','ressources/images/croix-2.png')


				fafa = 1;

			}else if(fafa = 1){
				$('html, body').animate({scrollTop:scrollNewProjReverse},700);
				$('.freelance-new').animate({"height":"0px","overflow":"hidden"},'slow');
				$(this).children().attr('src','ressources/images/croix.png')
				fafa = 0;
			}


		});


	$('.more-square img').mouseover(function(e){
		
		$('.more-line').stop().animate({'width':'900px'},'fast');
		


	});
	$('.more-square img').mouseout(function(e){
		
		$('.more-line').stop().animate({'width':'450px'},'fast');
	});




});

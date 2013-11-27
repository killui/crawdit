$(document).ready(function () {

	/***Anim Intro Home page***/

	$('#intro-freelance-content').animate({'right':'0','opacity':'1'},1600);
	$('#intro-project-content').animate({'left':'0','opacity':'1'},1600);
	$('.intro').animate({'width':'960px'},1500);

	/***MORE BUTTON***/

	$('#connect-btn').click(function(){

		var signHeight = $('.signin').height();

			if(signHeight<3){
		$('.signin').animate({'height':'300px'},'slow');
			}else{
				$('.signin').animate({'height':'0px'},'slow');
			}

	});


		var gaga;
		
		$('.more-square').click(function(){
			if(gaga == 0 || gaga == undefined){
			$('.proj-new').animate({"height":"420px","overflow":"auto"},'slow');
			$(this).children().attr('src','ressources/images/croix-2.png')
			console.log('tr')
			gaga = 1;
			console.log(gaga);
		}else if(gaga = 1){
			$('.proj-new').animate({"height":"0px","overflow":"hidden"},'slow');
			$(this).children().attr('src','ressources/images/croix.png')
			gaga = 0;
		}


		});

		$('.proj-featured-list').bind("mouseover", function(e){

				console.log(e.relatedTarget);
			var player = $(this);
			player.children()[0].play();
			player.children()[0].muted = true;

			$('.proj-list-cta', this).show();

		}).bind('mouseout', function(){

			var player = $(this);
			player.children()[0].pause()
			player.children()[0].load();
			$('.proj-list-cta', this).hide();
		});


		$('.video-container>div>hr').animate({'width':'777px'},'slow');
	

	var height = $(".desc-proj").load().height();

	$(".desc-proj aside").height(height);
	

	/*** Perks checked ***/
	
	$('.choice').on('click',function(){
		$("input").prop("checked",false);


		$("input",this).prop("checked",true);
		$('.choice').removeClass('checked');
		$(this).addClass('checked');
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

	var morePropag = 0;
	$('.more-square img').mouseover(function(e){
		
		$('.more-line').animate({'width':'900px'},'fast');
		


	});
	$('.more-square img').mouseout(function(e){
		
		$('.more-line').animate({'width':'450px'},'fast');


	});

	/*$('.more-square img').attr('src')*/




	//Avancement don
	var pledged = 10000;
	//console.log(pledged);
	var funded = (838/pledged)*4000;
	var widthfunded = $('.avancement').width(funded);
	console.log(funded);

	$('.input-don').stop().keyup(function(){
		var don = $(this).val();
		console.log(don);

		var widthdon = (838/pledged)*don;
		$('.don').fadeIn(200);
		$('.don').animate({
			"width":widthdon,
			"margin-left":funded
		},500);
	})

	//POPUP CLOSE
	$('.close').on('click',function(){
		$('.popup-mode').fadeOut(500);
		$('.popups').fadeOut(500);
	})
	//Popup
	$('.back_project').on('click',function(){
		$('.popup-mode').fadeIn(500);
		$('.popups,.donate').fadeIn(500);
	})
	//POPUP STEP
	$('.next').on('click',function(){
		$('.donate').fadeOut(500);

		$('.payement').fadeIn(800);
	})
	


})
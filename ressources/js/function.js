$(document).ready(function () {

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

				var fafa;
		
		$('.more-freelance-square').click(function(){
			if(fafa == 0 || fafa == undefined){
			$('.freelance-new').animate({"height":"420px","overflow":"auto"},'slow');
			$(this).children().attr('src','ressources/images/croix-2.png')
			console.log('tr')
			fafa = 1;
			console.log(fafa);
		}else if(fafa = 1){
			$('.freelance-new').animate({"height":"0px","overflow":"hidden"},'slow');
			$(this).children().attr('src','ressources/images/croix.png')
			fafa = 0;
		}


		});
/*			test=0;
		$('.proj-featured-list').bind("mouseover", function(e){
			if(test == 0){

			console.log('a= '+test);

			var player = $(this);

			player.find('a').mouseover(function(){
				test=0;
				e.stopPropagation();
				test=0;
			}).mouseout(function(){
				test=1;
				e.stopPropagation();
				test=1;
			})
			if(test == 0){
			player.children()[0].play();
			player.children()[0].muted = true;
			test = 1;
			$('.proj-list-cta', this).show();
		}
		if(test == 1){
			test == 0;

		}

		}

		}).bind('mouseout', function(e){
			console.log('b= '+test);
			var player = $(this);
			if(test == 1){
			player.children()[0].pause()
			player.children()[0].load();
			$('.proj-list-cta', this).hide();
			}
		if(test == 1){
			console.log('bouya');
			test = 0;
		}
			
	
			
		});*/






$('.proj-featured-list').on('mouseover',function(){
 $('.proj-list-cta', this).show();

 var player = $('video',this)[0];
 player.play();
 player.muted = true;

	}).on('mouseout',function(){

  $('.proj-list-cta', this).hide();
   var player = $('video', this)[0]; 
   player.pause();
    //player.load();
   
 });

$('.freelance-featured-list').on('mouseover',function(){
 $('.freelance-list-cta', this).show();
	}).on('mouseout',function(){
  $('.freelance-list-cta', this).hide();
 });




















/*		$('.proj-featured-list').bind("mouseover", function(e){

			e = e || window.event;
			var relatedTarget = e.relatedTarget || e.fromElement;
			var player = $(this);
			var playerNoHerit = player.children()[0];
			console.log('relatedTargetOne= '+ relatedTarget);
			while(relatedTarget != player && relatedTarget.nodeName != 'DIV' && relatedTarget != document){
				relatedTarget = relatedTarget.parentNode;
				console.log('while = '+relatedTarget);
			}

			if(relatedTarget != player && relatedTarget.nodeName != 'a'){
				console.log('a   '+relatedTarget.nodeName);
				console.log('if= '+relatedTarget);
			playerNoHerit.play();
			playerNoHerit.muted = true;
			$('.proj-list-cta', this).show();
			}

			


		}).bind('mouseout', function(e){
			e = e || window.event;
			var relatedTarget = e.relatedTarget || e.toElement;
			console.log('out');
			var player = $(this);
			var playerNoHerit = player.children()[0];

				while(relatedTarget != player && relatedTarget.nodeName != 'DIV' && relatedTarget != document){
				relatedTarget = relatedTarget.parentNode;
				console.log('while = '+relatedTarget);
			}

			if(relatedTarget != player){

			playerNoHerit.pause()
			playerNoHerit.load();
			$('.proj-list-cta', this).hide();

			}
			
			
		});*/
	/*	test = 1;
		$('.proj-featured-list').bind("mouseover", function(e){
			var player = $(this);
			console.log(test);
			if(test != 1){
				return false;
			}

			
			player.children()[0].play();
			player.children()[0].muted = true;

			$('.proj-list-cta', this).show();
			test = 0;

		}).bind('mouseout', function(e){
			if(test == 1){
			var player = $(this);
			player.children()[0].pause()
			player.children()[0].load();
			$('.proj-list-cta', this).hide();
		}
			
		});
		*/
	/*	$('.proj-featured-list video,.proj-list-cta,.proj-featured-list div proj-featured-list img, proj-featured-list span, proj-featured-list p, proj-featured-list h3, .proj-featured-list a').mouseover(function(e){
			e.stopPropagation();
		}).mouseout(function(){
			e.stopPropagation();
		});*/
	/*	$('.proj-featured-list a').bind("mouseover", function(e){
			e.stopPropagation();
		}).bind("mouseout",function(){
			e.stopPropagation();
		});*/

/*		$('.proj-featured-list').bind("mouseover", function(e){
			console.log(e.bubbles);
		
			var player = $(this);		
			player.children()[0].play();
			player.children()[0].muted = true;

			$('.proj-list-cta', this).show();
	

		}).bind('mouseout', function(e){
			/*if(currentTarget !=){}*/
			/*var player = $(this);
			player.children()[0].pause()
			player.children()[0].load();
			$('.proj-list-cta', this).hide();

			
		});*/
		/*function gaga(){
				var player = $(this);	
				console.log('fuck')	
			player.children()[0].play();
			player.children()[0].muted = true;

			$('.proj-list-cta', this).show();
		}

		function gogo(){

			var player = $(this);
			player.children()[0].pause()
			player.children()[0].load();
			$('.proj-list-cta', this).hide();

		}
	
		$('.proj-featured-list')[0].addEventListener("mouseover", gaga);
		$('.proj-featured-list')[0].addEventListener("mouseout", gogo);

		$($('.proj-featured-list')[0]).find('a')[0].addEventListener('mouseover',gaga, false);
		$($('.proj-featured-list')[0]).find('a')[0].addEventListener('mouseout',gogo, false);*/

/*		$('.video-container>div>hr').animate({'width':'777px'},'slow');*/
	

	var height = $(".desc-proj").load().height();

	$(".desc-proj aside").height(height);
	

	
	

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
			"height":"90px"
			
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

	/*** Perks checked ***/
	
	$('.choice').on('click',function(){
		$("input").prop("checked",false);


		$("input",this).prop("checked",true);
		$('.choice').removeClass('checked');
		$(this).addClass('checked');
	});
	
	


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


		if(don == $('.radio').val()){
			$('choice',this).addClass('checked');
		}
	})


	//POPUP CLOSE
	$('.close').on('click',function(){
		$('.popup-mode').fadeOut(500);
		$('.popups, .donate, .payement, .confirmation').fadeOut(500);
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


		$('.proj-featured-list').bind('mouseover',function(){
			$('.proj-list-cta', this).show();
			var player = $('video',this)[0];
			player.play();
			player.muted = true;
			//console.log(e.relatedTarget);
			//var player = $(this);
			//player.children()[0].play();
			//player.children()[0].muted = true;

		}).bind('mouseout',function(){
			$('.proj-list-cta', this).hide();
			var player = $('video',this)[0];
			var pauseTime = player.currentTime;
			player.pause();
			//player.load();
			//var player = $(this);
			//player.children()[0].pause()
			//player.children()[0].load();
			
		});


		$('.video-container>div>hr').animate({'width':'777px'},'slow');
	

	var height = $(".desc-proj").load().height();

	$(".desc-proj aside").height(height);
	

	
	

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

	/*** Perks checked ***/
	
	$('.choice').on('click',function(){
		$("input").prop("checked",false);


		$("input",this).prop("checked",true);
		$('.choice').removeClass('checked');
		$(this).addClass('checked');
	});
	
	//Avancement don
	var pledged = 10000;
	//console.log(pledged);
	var funded = (838/pledged)*4000;
	var widthfunded = $('.avancement').width(funded);
	//console.log(funded);
	var value = $('.choice input[type=radio]').each(function(){ $(this).prop('defaultValue');});
	var arrayvalue = $.makeArray(value);
	
	
	console.log(value);

	$('.input-don').keyup(function(event){
		var don = $(this).val();

		if(don == 5){
			$("input").val(don).prop("checked",true);
			$('.choice').addClass('checked');
		}
		// for (i=0;i<arrayvalue.length;i++) {
		// 	console.log('success for'+i);
		// 	console.log(don);
		// 	console.log('array='+arrayvalue[i]);
		// 	if(don == arrayvalue[i]){
		// 		console.log('success while'+i);
		// 		$("input").val(don).prop("checked",true);
		// 		$('.choice').addClass('checked');

		// 	}
		// };

		
		//var findperk = arrayvalue.find(don);
		var widthdon = (838/pledged)*don;
		$('.don').fadeIn(200);
		$('.don').animate({
			"width":widthdon,
			"margin-left":funded
		},500);

	})


	//POPUP CLOSE
	$('.close,.finish').on('click',function(){
		$('.popup-mode').fadeOut(500);
		$('.popups, .donate, .payement, .confirmation').fadeOut(500);
	})
	//Popup
	$('.back_project').on('click',function(){
		 $('.popup-mode').fadeIn(500);
		 $('.popups').fadeIn(500);
	})
	//POPUP STEP
	$('.next').on('click',function(){
		$('.donate').fadeOut(500);

		$('.payement').fadeIn(800);
	})
	

	// JOBS scroll
	var scroll = 0;
	var fmjobs = $('#jobs li').first();
	var lmjobs = $('#jobs li').last();
	$('.more-jobs').bind('click',function(){
		$('#jobs').scrollTo(lmjobs,300);
		$('.more-jobs .icon').removeClass('arrow-down').addClass('arrow-up');	
	})
	$('.arrow-up').bind('click', function(){
		$('#jobs').scrollTo(fmjobs,300);
		$('.more-jobs .icon').removeClass('arrow-up').addClass('arrow-down');		
	})
})
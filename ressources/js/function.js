$(document).ready(function () {

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
			console.log(gaga);
		}


		});

		$('.proj-featured-list video, .proj-list video').mouseover(function(e){
			var player = this;
			player.play();
			player.muted = true;
		});

			$('.proj-featured-list video, .proj-list video').mouseout(function(e){
			var player = this;
			player.pause()
			player.load();
		});



		$('.video-container>div>hr').animate({'width':'777px'},'slow');
	

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
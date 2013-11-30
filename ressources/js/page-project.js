$(document).ready(function(){
	

	// JOBS scroll
	var firstjobs = $('#jobs .job').first();
	//console.log(firstjobs);
	var lastjobs = $('#jobs .job').last();
	//console.log(lastjobs);
	var jobs = $('.job').length;
	//console.log(jobs);
	
	
	if(jobs > 9){
		
		$('.more-jobs').addClass('down').html('<i class="icon arrow-down"></i>');
		
		//Scroll up
		$('.more-jobs.up').bind('click', function(){
			console.log('sucess up');
			$('#jobs').scrollTo(firstjobs,400);
			$('.more-jobs .icon').removeClass('arrow-up').addClass('arrow-down');
			$('.more-jobs').removeClass('up').addClass('down');
		});
		//Scroll down
		$('.more-jobs.down').bind('click', function(){
			//console.log('sucess down');
			$('#jobs').scrollTo(lastjobs,400);
			$('.more-jobs .icon').removeClass('arrow-down').addClass('arrow-up');
			$('.more-jobs').removeClass('down').addClass('up');
		});
		
	}
	
	
	

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
	});

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
	});

})
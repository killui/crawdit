$(document).ready(function () {


	//POPUP CLOSE
	$('.close,.finish').on('click',function(){
		$('.popup-mode').fadeOut(500);
		$('.popups, .donate, .payement, .confirmation').fadeOut(500);
	})
	//Popup
	

	$('.back_project').on('click',function(){
		$('.popup-mode').fadeIn(500);
		$('.popups,.donate').fadeIn(500);
	})
	
	var don = $('.input-don').val();

    $('.next').on('click',function (){
        
        if(don >= 1){
            //console.log(don);
            $('#form-donate').submit();
            $('.donate').fadeOut(500);
			$('.payement').fadeIn(800);
        } else {
            alert('Please pledge at least $1!');
        }
    });

    //Avancement don
	var pledged = 10000;
	//console.log(pledged);
	var funded = (838/pledged)*4000;
	var widthfunded = $('.avancement').width(funded);
	//console.log(funded);
	//var array = new Array();
	var array = [];
	var value = $('input[type=radio]').each(function(){ var arr = $(this).val(); array.push(arr); });
	//var arrayvalue = $.makeArray(value);
	//console.log(array);

	//GET the closest value in the array
	Array.prototype.closest = function(t) {
		
		var res = 1;
 	  	for (i = 0; i < array[i]; i++) {
	 	   	
	 	   	if (array[i] >= res && array[i] <= t) res = array[i];
	 	}
	 	
	 	console.log(res);
	 	return res;
	};
	//console.log(value);
    //console.log(array);

	$('.input-don').stop().keyup(function(){
		//unchecked perks
		var uncheck = $('.choice');
		uncheck.removeClass('checked');
		$("input[type=radio]").prop("checked",false);

		var don = $(this).val();
		console.log(don);
		var numb = array.closest(don);
		console.log('closest to '+don+' = '+numb);

		//checked perks
		$("input[type=radio]").attr("checked",false);
		var getchoice = $("input[value="+numb+"]").parents('.choice');
		//console.log(getchoice);
		$("input[value="+numb+"]").attr("checked",true);
		getchoice.addClass('checked');
		
		//Bar avancement
		avancement();
		

	});

	function avancement(){
		var don = $('.input-don').val();
		var widthdon = (838/pledged)*don;
		$('.don').fadeIn(200);
		$('.don').animate({
			"width":widthdon,
			"margin-left":funded
		},500);
	};

	/*** Perks checked ***/
	
	$('.choice').on('click',function(){

		var getvalperk = $('input[type=radio]',this).val();
		console.log(getvalperk);

		$('.input-don').val(getvalperk);

		$("input").attr("checked",false);


		$("input",this).attr("checked",true);
		$('.choice').removeClass('checked');
		$(this).addClass('checked');

		avancement();
	});

});
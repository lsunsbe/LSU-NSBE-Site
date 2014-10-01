/*jslint browser: true*/
/*global $, jQuery*/

$(document).ready(function(){ 
	$('.arrow').rotate(90);
	$('.start').find('.body').slideToggle();
	$('.start').find('.arrow').rotate(0, 'slow');
	$('.head').click( function (e) {

	if (!($(this).is('#headstylepast'))){
		if ($(this).parent().hasClass('active')){
			$(this).next().slideToggle();
			$(this).parent().removeClass("active");
			$(this).find('.arrow').rotate(90, 'slow');
		}
		else{
			//if row is inactive
			//close active row if exists
			$(this).parent().parent().find('.active').find('.body').slideToggle();
			$(this).parent().parent().find('.active').find('.arrow').rotate(90, 'slow');
			$(this).parent().parent().find('.active').removeClass('active');
			
			//open row and make acive id
			$(this).next().slideToggle();
			$(this).find('.arrow').rotate(0, 'slow');
			$(this).parent().addClass("active");
		}

		}
	});
});
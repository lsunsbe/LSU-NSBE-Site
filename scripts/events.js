/*jslint browser: true*/
/*global $, jQuery*/

$(document).ready(function(){ 
	$('table').find('.content').toggle();
	$('.head').click( function (e){
		$('table').animate({height: '-1'}, 500, 'linear');
		if ($(this).attr('id') == 'active'){
			$(this).parent().find('.content').slideToggle();
			$(this).attr('id', '');
		}
		else {
			console.log($('table').find('.head').filter('#active'))
			var actives = $('table').find('.head').filter('#active')
			$(actives).next().find('p').hide();
			$(actives).siblings('.content').slideToggle(); //should be only one
			$(this).attr('id', 'active');
			$(this).parent().find('tr').eq(1).slideToggle();
			$(actives).attr('id', '');
		}
	});

});
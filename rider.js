/*jslint browser: true*/
/*global $, jQuery*/

$(document).ready(function(){  
	$('.head').click( function (e){
		if ($(this).attr('id') == 'active'){
			$(this).parent().find('tr').eq(1).toggle('fast');
			$(this).attr('id', '');
		}
		else {
			var actives = $('table').find('.head').filter('#active'); //should be only one
			$(actives).parent().find('tr').eq(1).toggle('fast');
			$(this).attr('id', 'active');
			$(this).parent().find('tr').eq(1).toggle('fast');
			$(actives).attr('id', '');
		}
	});
});

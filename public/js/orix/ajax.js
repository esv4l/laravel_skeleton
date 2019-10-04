jQuery(function($){
	console.log('Cargo orix/ajax.js');

	//Ejemplo de cómo recuperar una vista y meterla en un elemento de otra vista. :)
	$(document).ready(function(){
		$.get(_BASE_PATH, {
			//'userName' : $('#userName').val()
		}, function(data) {
			//$('form').html(data);
			return 'OK';
	    });

	});
});

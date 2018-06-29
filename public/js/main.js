$(document).ready(function(){
	$('.validar').on('click', function(){
		swal({
		  	type: 'error',
		  	title: 'Oops...',
		  	text: $error 
		})
	});
});
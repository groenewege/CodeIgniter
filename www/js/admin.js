$(function() {

	$('#codeigniter_profiler').hide();
	$('#toggleButton').click(function(e) {
  		$('#codeigniter_profiler').toggle();
  		e.preventDefault();
	});
	$('.alert-message').hide().fadeIn(); 
	setTimeout(function() {
  		$(".success").fadeOut();
	}, 3000); 

});

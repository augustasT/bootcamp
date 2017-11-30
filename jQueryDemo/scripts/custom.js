$(document).ready(function(){
	$('.vacation').on('click', 'button', function(){
		var vacation = $(this).closest('.vacation');
		var amount = vacation.data('price');
		var price = $('<p>From $' +amount+'</p>');
		vacation.append(price);
		$(this).remove();
	});
	
	
	// $('button').on('click', function(){
		// var tour = $(this).closest('.tour');
		// var discount = tour.data('discount');
		// var message = $('<span>Call 1-555-jquery-air for a $' + discount+ ' discount');
		// tour.append(message);
		// $(this).remove();
	// });
	
	// $('button').on('click', function(){
		// var message = $('<span>Call 1-555-jquery-air to book this tour</span>');
		// $('usa').append(message);
		// $(this).remove();
	// });
	$('.filters').on('click', '.on-sale', function(){
		$('.highlighted').removeClass('.highlighted');
		$('.tour').filter('.on-sale').addClass('highlighted');
		
		$('.highlighted').css({'color': 'green'});
	});
	$('button').on('click', function(){
		var discount = $(this).closest('.tour').data('discount');
		$(this).closest('.tour').append(discount);
	});
	
	$( "#clickme" ).click(function() {
		$( ".menu" ).toggle( "slow", function() {
		// Animation complete.
	});
	});
	
	//NAVBARAS
	$('.menu').css('display', 'none');
	
	$('.expand').toggle();
	$('.expand').on('click', function(){
		$(this).addClass('subtract');
		$(this).removeClass('expand');
		$('.menu').css('display', 'block');
		
	});
	
	$('.subtract').on('click',function(){
		$('.menu').css('display', 'none');
	});
	
});







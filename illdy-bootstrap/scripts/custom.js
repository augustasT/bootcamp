




jQuery(document).ready(function(){
	//START OF NAVBAR
	
	$( ".navbar-toggle" ).on('click',function() {
		$( ".navbar-nav" ).toggle( "slow", function() {});
	});
	//END OF NAVBAR
	
	// START OF CAROUSEL
	$('.owl-carousel').owlCarousel({
    margin:10,
    loop:true,
    center:true,
    items:1
})
// END OF CAROUSEL

//START OF COUNTER
var counter = document.getElementById('counter');
var projects = document.getElementById('number-roll-projects');
var clients = document.getElementById('number-roll-clients');
var coffees = document.getElementById('number-roll-coffees');
	                    

var waypoint = new Waypoint({
  element: document.getElementById('counter'),
  handler: function(direction) {
    rollNumbers();
  },
  offset: 'bottom-in-view'
})

var i = 0; 
var numOfProjects = 260;
var numOfClients = 120;
function rollNumbers () {          
   setTimeout(function () {                    
      if (i <= numOfProjects) {    
		projects.innerHTML = i;;   
		if(i<=numOfClients){
			clients.innerHTML = i;
		}
		coffees.innerHTML = i;
		i++;     	  
        rollNumbers();             
      }                        
   }, 10)
}
// END OF COUNTER

// START OF FORM VALIDATION
$(document).ready(function(){
		$('#submit').click(function(){
			$.ajax({
				type: 'post',
				url: 'php/ajax.php',
				data: {
					request: true, 
					name: $('#name').val(), 
					email: $('#email').val(),
					subject: $('#subject').val(),
					message: $('#message').val()
				},
					success: function(msg){				
						formValidation($.parseJSON(msg));
					}
			});
		});
});

function formValidation(errors){
		
	if(errors['nameFieldEmpty'] || errors['emailFieldEmpty'] || errors['emailFieldInvalid']){
		$('.errors').text("One or more fields have an error. Please check and try again.");
		$('.errors').addClass('error-border-yellow');
		if(errors['nameFieldEmpty']){
			$('.nameFieldError').text("Please enter name");
			$('.post-name .input, .post-email .input').addClass('error-border');
			
		}
		if(errors['emailFieldEmpty']){
			$('.emailFieldError').text("Please enter email");
		}
		else if(errors['emailFieldInvalid']){
			$('.emailFieldError').text("Please enter valid email");
		}
	}
	else if(errors['logSaved']){
		$('.nameFieldError').text("");
		$('.emailFieldError').text("");
		$('.emailFieldError').text("");
		$('.errors').addClass('success-border');
		$('.errors').text("Message has been sent!");
	}

}

 // END OF FORM VALIDATION
});


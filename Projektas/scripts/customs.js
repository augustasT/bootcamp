alert("kjslkf");
$(document).ready(function() {
	//navbar smooth scrolling
	var retroNavHeight = $('.header').outerHeight();
		$('.slide-section').click(function(e) {
			var linkHref = $(this).attr('href');
			$('html, body').animate({
				scrollTop: $(linkHref).offset().top - retroNavHeight
			}, 1000);
			e.preventDefault();
		});
	
$('#send').click(function() {
				alert("hello!");
				$.ajax({
					url: "php/message.php",
					type: "post",
					data: {
						request: true, 
						name: $('#name').val(), 
						email: $('#email').val(), 
						subject: $('#subject').val(), 
						sendMessage: $('#message').val()
					},

				success: function(msg) {
				alert(msg);                 

			} 
		});
	});


	var slideIndex = 1;
	showSlides(slideIndex);

	function plusSlides(n) {
	  showSlides(slideIndex += n);
	}

	function currentSlide(n) {
	  showSlides(slideIndex = n);
	}

	function showSlides(n) {
	  var i;
	  var slides = document.getElementsByClassName("mySlides");
	  var dots = document.getElementsByClassName("dot");
	  if (n > slides.length) {slideIndex = 1} 
	  if (n < 1) {slideIndex = slides.length}
	  for (i = 0; i < slides.length; i++) {
		  slides[i].style.display = "none"; 
	  }
	  for (i = 0; i < dots.length; i++) {
		  dots[i].className = dots[i].className.replace(" active", "");
	  }
	  slides[slideIndex-1].style.display = "block"; 
	  dots[slideIndex-1].className += " active";
	}
	

});
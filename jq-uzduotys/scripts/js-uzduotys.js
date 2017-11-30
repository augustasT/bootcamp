$(document).ready(function(){	
	$('ul').prepend('<li><a href="#">Augustas</a></li><li><a href="#">augustas</a></li>');
	
	
	
	$('ul li').click(function(){
		if($(this).hasClass('closed')){
			$(this).removeClass('closed');
			
		}
		else{
			$(this).addClass('closed');			
		}
	});
	$('ul li').dblclick(function(){		
		if($(this).hasClass('alt')){
			$(this).removeClass('alt');			
		}
		else{
			$(this).addClass('alt');
			
		}
	});
	
});
	
	
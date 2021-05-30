$(document).ready(function(){
	
	$('body').addClass('light');
	
	$('ul.menu li').mouseover(function(){
		$('body').addClass('dark').removeClass('light');
	});
	
	$('ul.menu li').mouseout(function(){
		$('body').addClass('light').removeClass('dark');
	});
  
})
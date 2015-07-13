$(document).ready(function(){

	$('.menu').bind('mouseover', openSubMenu)
	function openSubMenu(){
		$(this).find('.menu-list').css('visibility', 'visible');
	};
	
	$(".menu").bind('mouseout', closeSubMenu);
	function closeSubMenu(){
		$(this).find('.menu-list').css('visibility','hidden');
	};

});
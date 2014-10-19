jQuery(document).ready(function($) {
	
	// Add has-children class to nested menu
	$('ul.menu li').has('ul').addClass('menu-children');
	
	// Search input text
	var textInputs = $('.search-input');
	var mainSearch = $('.search-form .search-input');
	var mainSearchDefault = 'Type and press enter';
	textInputs.focus(function(e){
		$(this).addClass('active');
	});
	textInputs.blur(function(e){
		$(this).removeClass('active');
	});
	mainSearch.focus(function(){
		if($(this).attr('value') == mainSearchDefault) $(this).attr('value', '');
	});
	mainSearch.blur(function(){
		if($(this).attr('value') == '') $(this).attr('value', mainSearchDefault);
	});
	
	// Every nth child of the secondary thumbnails
	$('.front-page .secondary-post:nth-child(2n+1)').addClass('right-edge');
	$('.back-page .secondary-post:nth-child(2n), .search-page .secondary-post:nth-child(2n)').addClass('right-edge');

	// Masonry
	$('#bottom .grid-12').masonry({ singleMode: true });
	
});

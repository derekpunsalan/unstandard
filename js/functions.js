jQuery(document).ready(function($) {
	// Menu
	//open the lateral panel
	$('.cd-btn').on('click', function(event){
		event.preventDefault();
		$('.cd-panel').addClass('is-visible');
	});
	//clode the lateral panel
	$('.cd-panel').on('click', function(event){
		if( $(event.target).is('.cd-panel') || $(event.target).is('.cd-panel-close') ) {
			$('.cd-panel').removeClass('is-visible');
			event.preventDefault();
		}
	});

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


	// Masonry
	$('#bottom .grid-12').masonry({ singleMode: true });

});

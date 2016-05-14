$(document).ready(function() 
 {
    
	$( '.dropdown-toggle' ).click(function(e) {
		e.preventDefault();
		$(this).next('.dropdown-menu').slideToggle(300);
	});

	// $( '.drop-trigger' ).click(function(e) {
	// 	e.preventDefault();
	// 	if ( $(this).hasClass("olx-news") ) {
	// 		$('.features-drop').slideUp(300);
	// 		$('.yaman-lifestyle-drop').slideUp(300);
	// 		$('.search-drop').slideUp(300);
	// 		$('.olx-news-drop').slideToggle(300);
	// 	} else if ( $(this).hasClass("features") ) {
	// 		$('.olx-news-drop').slideUp(300);
	// 		$('.yaman-lifestyle-drop').slideUp(300);
	// 		$('.search-drop').slideUp(300);
	// 		$('.features-drop').slideToggle(300);
	// 	} else if ( $(this).hasClass("yaman-lifestyle") ) {
	// 		$('.olx-news-drop').slideUp(300);
	// 		$('.features-drop').slideUp(300);
	// 		$('.search-drop').slideUp(300);
	// 		$('.yaman-lifestyle-drop').slideToggle(300);
	// 	} else if ( $(this).hasClass("drop-search") ) {
	// 		$('.olx-news-drop').slideUp(300);
	// 		$('.features-drop').slideUp(300);
	// 		$('.yaman-lifestyle-drop').slideUp(300);
	// 		$('.search-drop').slideToggle(300);
	// 	}
	// });


 });  
// A $( document ).ready() block.
/*$( document ).ready(function() {
    console.log( "ready!" );
});*/

function scrollToElement(el) {;
	$('html, body').animate({
		 scrollTop: $(el).offset().top
	}, 1000);
}
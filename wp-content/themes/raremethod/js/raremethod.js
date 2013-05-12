$ = jQuery;


$(function(){
	$('<input>').attr({
		    type: 'button',
		    id: 'background-toggle',
		    name: 'background-toggle',
		    value: 'BACKGROUND',
		}).prependTo('body').css({'position':'absolute'});

	$('#background-toggle').one('click',function(event){
		bodyClass('bg-triangles-left', 'bg-triangles-right');
		// rightBodyClass('bg-triangles-right');

		$(this).one('click',function(event){
			bodyClass('bg-square-left', 'bg-square-right');
			// rightBodyClass('bg-square-right');

			$(this).one('click',function(event){
				bodyClass('bg-3dsquares-left', 'bg-3dsquares-right');
				// rightBodyClass('bg-3dsquares-right');

				$(this).one('click',function(event){
					bodyClass('bg-scales-left', 'bg-scales-right');
					// rightBodyClass('bg-scales-right');

					$(this).one('click',function(event){
						bodyClass('bg-dots-left', 'bg-dots-right');
						// rightBodyClass('bg-dots-right');
					});
				});
			});
		});
	});


	// $('<input>').attr({
	// 	    type: 'button',
	// 	    id: 'content-toggle',
	// 	    name: 'content-toggle',
	// 	    value: 'CONTENT',
	// 	}).prependTo('body').css({'position':'absolute', 'left': '100px'});

	// $('#section2, #section3').hide();
	// $('#content-toggle').one('click',function(event){
	// 	content('#section2');

	// 	$(this).one('click',function(event){
	// 		content('#section3');

	// 	});

	// });

	// $('ul li:last-child').each(function(){
	// 	$(this).addClass('last');
	// });

});
function bodyClass(left, right){
	$('body').removeClass().addClass(left);
	$('#right-body').removeClass().addClass(right);
}
// function content(section){
// 	$('section').hide();
// 	$(section).show();
// }


function archivesTogle(){
	$('#flexo-archives-2 > ul > li > a').click(function(){
		$(this).toggleClass('expanded');
	});
}
function addingNumbersToNav(){
	$('#nav li').each(function(e){
		number = e + 1;
		$('<div>' + number + '</div>').prependTo(this);
	});
}
function calculatingContentMargin(){

}

$(document).ready(function(){
	archivesTogle();
	addingNumbersToNav();

});

$(window).on('resize ready', function(){
	height = $('#masthead').height();
	console.log(height);
	$('#main').css({'margin-top': height});
});
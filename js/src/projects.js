

var set_project_photo_height = function(){
	var project_width = $('.project-photo:first').width();
	console.log( project_width );
	$('.project-photo').height( project_width );
};

$(function(){

	set_project_photo_height();

	$(window).resize( set_project_photo_height );

});


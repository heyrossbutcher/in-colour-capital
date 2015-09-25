$(function(){

var app = {};


$('.client_container').mouseover(function(){
	clearInterval(app.timeOut);
	//
	app.openUp = $(this).find('.client_writeup');
	app.showOn = app.openUp.find('.write_up');
	//
	app.openUp.addClass('scale-it-up');
	//
	app.timeIn = setTimeout(function(){
		app.showOn.addClass('fade-in');
  		// $(that).addClass('scaled');
	},500);
	//
	});
});
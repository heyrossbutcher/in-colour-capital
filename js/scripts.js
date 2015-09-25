$(function(){

	var app = {};


	////////////////////////////////////////////
	//SMOOTH SCROLLING
	///////////////////////////////////////////
	app.smoothScroller = function(){
		$(".nav-wrapper a").smoothScroll({ offset: -50 });
	}



	////////////////////////////////////////////
	//CLIENT DESCRIPTION
	///////////////////////////////////////////
	app.openDescription = function(clickable){
		//GRAD THE CLASSES
		app.openUp = clickable.find('.client_writeup');
		app.showOn = app.openUp.find('.write_up');
		//REMOVE DEFAULT HIDE CLASS
		app.openUp.removeClass('hide-desript-box');
		app.showOn.removeClass('take-descript-off');
		//ADD SHOW CLASSES
		app.openUp.addClass('scale-it-up');
		app.showOn.addClass('fade-in');
	};
	app.closeDescription = function(clickable){
		clickable.mouseleave(function(){

		});
	}

	$('.client_container').mouseenter(function(){
		clickable = $(this);
		//ON MOUSE ENTER SHOW DESCRIPTION
		app.openDescription(clickable);
		
		//ON MOUSE LEAVE HIDE DESCRIPTION
		clickable.mouseleave(function(){
			//ADD HIDE CLASSES
			app.openUp.addClass('hide-desript-box');
			app.showOn.addClass('take-descript-off');
			//REMOVE SHOW CLASSES
			app.openUp.removeClass('scale-it-up');
			app.showOn.removeClass('fade-in');
		});

	});


	app.smoothScroller();

});
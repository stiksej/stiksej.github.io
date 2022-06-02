$(document).ready(function(){
	var imgItems = $('.slider li').length; // numery slajdow
	var imgPos = 1;



	$('.slider li').hide(); // ukrywanie slajdu
	$('.slider li:first').show(); // pokazanie pierwszego slajdu
	$('.pagination li:first').css({'color': '#CD6E2E'}); // style do pierwszego

	// wykonanie funkcji
	$('.pagination li').click(pagination);
	$('.right span').click(nextSlider);
	$('.left span').click(prevSlider);


	setInterval(function(){
		nextSlider();
	}, 2000);

	// FUNKCJE =========================================================

	function pagination(){
		var paginationPos = $(this).index() + 1; // pozycja slajdu

		$('.slider li').hide(); // ukrywanie slajdu
		$('.slider li:nth-child('+ paginationPos +')').fadeIn(); // pokazanie slajdu

		// style
		$('.pagination li').css({'color': '#858585'});
		$(this).css({'color': '#CD6E2E'});

		imgPos = paginationPos;

	}

	function nextSlider(){
		if( imgPos >= imgItems){imgPos = 1;} 
		else {imgPos++;}

		$('.pagination li').css({'color': '#858585'});
		$('.pagination li:nth-child(' + imgPos +')').css({'color': '#CD6E2E'});

		$('.slider li').hide(); // ukrywanie slajdu
		$('.slider li:nth-child('+ imgPos +')').fadeIn(); // pokazanie slajdu

	}

	function prevSlider(){
		if( imgPos <= 1){imgPos = imgItems;} 
		else {imgPos--;}

		$('.pagination li').css({'color': '#858585'});
		$('.pagination li:nth-child(' + imgPos +')').css({'color': '#CD6E2E'});

		$('.slider li').hide(); // ukrywanie slajdu
		$('.slider li:nth-child('+ imgPos +')').fadeIn(); // pokazanie slajdu
	}

});
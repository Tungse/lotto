$(function()
{
	$('.wrapper').fadeIn(200);

	$(document).on('click', '.layer, .button-close-popup', function()
	{
		$('.layer, .popup').fadeOut(0);
	});

	$(document).on('click', '.button-to-popup', function()
	{
		var popup = $(this).attr('id');

		$('.popup').fadeOut(0);
		$('.layer, .'+popup).fadeIn(0);
		
		$('html, body').animate({scrollTop: 0}, 200);
	});

	$(document).on('click', '.button-to-no-event', function(event)
	{
		event.preventDefault();
	});
});
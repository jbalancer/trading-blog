function preloaderRange(time, callback)
{
	setTimeout(function() {

		$('#preloader').hide();

		if ( callback )
		{
			callback();
		}

	}, time);

	$('#preloader .preloader-range').css('animation-duration', time + 'ms');

	$('#preloader').show();
}
var
	$imgItems = $('.ui-photo');

for (var i = 0; i < $imgItems.length; i++)
{
	var
		newImgSrc = $imgItems.eq(i).data('src');

	$imgItems.eq(i).css('background-image', 'url(' + newImgSrc + ')');
}

$('.uiml-item').on('click', function (){

	if ( !$(this).hasClass('active') )
	{
		$('.uiml-item').removeClass('active');

		$(this).addClass('active');

		$('.open.active').removeClass('active');

		var
			openId = $(this).data('open');

		$(openId).addClass('active');
	}

});

$('.ui-photo').on('click', function (){

	window.top.setImageShow($(this).data('src'));

});
$('body').on('click', '.default', function (){

	$(this).parent().toggleClass('active');

});

$('body').on('click', '.option', function (){

	var
		$select = $(this).parents('.select'),
		newText = $(this).children().text(),
		newVal  = $(this).children().data('val');

	$select.removeClass('active');

	$select.find('.default .text-place span').text(newText);

	if ( newVal )
	{
		$select.data('val', newVal);
	}
	else
	{
		$select.data('val', newText);
	}	

	limitText($select);

});
$('.clear-input').on('click', function (){

	var
		forClearId = $(this).data('place'),
		clearValue = $(forClearId).val();

	if ( clearValue )
	{
		$(forClearId).val('');
	}

	$(forClearId).focus();

});
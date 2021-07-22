function alertMsg(msgSets)
{
	$('#alert-msg').attr('class', 'active ' + msgSets.type);

	$('#alert-msg .alert-place').html(msgSets.message);

	if ( msgSets.input )
	{
		$('#alert-msg').addClass('input-on');

		$('#alert-input').attr('placeholder', msgSets.input);
	}

	if ( msgSets.buttons )
	{
		var
			msgBtns = '';

		for (var i = 0; i < msgSets.buttons.length; i++)
		{
			msgBtns += '<div class="alert-btn-item"><span class="btn-text">' + msgSets.buttons[i].text + '</span></div>';
		}

		$('#alert-msg .alert-buttons').html(msgBtns);

		for (var i = 0; i < $('#alert-msg .alert-btn-item').length; i++)
		{
			$('#alert-msg .alert-btn-item').eq(i).on('click', msgSets.buttons[i].pressed);
		}
	}
}

function closeMsg()
{
	$('#alert-msg').toggleClass('active');

	if ( $('#alert-msg').hasClass('input-on') )
	{
		$('#alert-msg').removeClass('input-on');

		$('#alert-input').val('');
		$('#alert-input').attr('placeholder', '');
	}
}

function alertVal()
{
	return $('#alert-input').val();
}
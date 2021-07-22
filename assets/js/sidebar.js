$('.sidebar-item').on('click', function (){

	$('.sidebar-item.active-bar').removeClass('active-bar');

	$(this).addClass('active-bar');

	var
		newPageUrl = $(this).data('url');

	if ( newPageUrl )
	{
		$('.page-content iframe').attr('src', newPageUrl);

		var
			titleText = $(this).parent().find('.sidebar-title .text-place span').text(),
			pathText  = $(this).find('.text-place span').text(),
			iconClass = $(this).find('.icon i').attr('class');

		$('.page-title .text').text(titleText);
		$('.page-title .path-text').text(pathText);

		$('.page-title .icon i').attr('class', iconClass);
	}

});

$('.open-online').on('click', function (){

	var
		chatMsg = {

			type: 'ban',
			message: 'Чат скоро будет доступен, а пока вы можете воспользоваться почтой!',
			buttons: [
				{
					text: 'Отмена',
					pressed: function ()
					{
						closeMsg();
					}
				},
				{
					text: 'Почта',
					pressed: function ()
					{
						closeMsg();

						$('.page-content iframe').attr('src', 'pages/messages/all-msgs.php');

						$('.page-title .text').text('Общение');
						$('.page-title .path-text').text('Все сообщения');

						$('.page-title .icon i').attr('class', 'icon-paper-plane icons');
					}
				}
			]

		};

	alertMsg(chatMsg);

});
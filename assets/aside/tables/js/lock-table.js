$('.lt-item').on('click', function (){

	var
		titleText	= $(this).find('.lt-title span').text(),
		dateText 	= $(this).find('.lt-date span').text(),
		accessTable = {

			message: '<p>Доступ к таблице "' + titleText + '" ограничен. Пожалуйста введите пароль!</p>',
			input: 'Введите пароль ...',
			type: 'ban',
			buttons: [
				{
					text: 'Отмена',
					pressed: function ()
					{
						window.top.closeMsg();
					}
				},
				{
					text: 'Готово',
					pressed: function ()
					{
						// Вывод таблицы
						console.log(window.top.alertVal());

						window.top.closeMsg();
					}
				}
			]

		};

	window.top.alertMsg(accessTable);

});

$('.vt-open-action').on('click', function (){

	$(this).addClass('active');

});

$('.vt-action .for-rep').on('click', function (){

	$('.vt-open-action').removeClass('active');

	var
		iconClass = $(this).find('i').attr('class'),
		titleText = $(this).data('title');	

	$('.vt-title .icon-place i').attr('class', iconClass);
	$('.vt-title .title-action').text(titleText);

	$('.for-rep').removeClass('active');

	$(this).addClass('active');

});

$('.vtt-sub').on('click', function (){

	if ( $('#view-table').hasClass('edit-active') )
	{
		var
			$sub   = $(this),
			input  = document.createElement('input');

		input.type = 'text';
		input.value = $sub.text();
		input.style.width = $sub.css('width');
		input.style.height = $sub.css('height');

		$sub.hide();

		$sub.parent().append(input);

		input.focus();

		input.onblur = function ()
		{			
			$sub.text(this.value);
			$sub.show();

			this.remove();
		}
	}

});

$('#edit-table-go').on('click', function (){

	$('#view-table').attr('class', 'edit-active');

});

$('#view-table-go').on('click', function (){

	$('#view-table').attr('class', '');

});

$('#new-entry').on('click', function (){

	$('#view-table').attr('class', 'add-table-active');

});

$('#remove-table-go').on('click', function (){

	var
		tableTitle    = $('#view-table .title-place .text:last-child').text(),
		removeMessage = {

			message: 'Удалить таблицу ' + tableTitle + ' ?',
			type: 'question',
			buttons: [
				{
					text: 'Нет',
					pressed: function ()
					{
						window.top.closeMsg();
					}
				},
				{
					text: 'Да',
					pressed: function ()
					{
						// Удалить таблицу

						window.top.closeMsg();
					}
				}
			]

		};

	window.top.alertMsg(removeMessage);

});

$('#unlock-table-go').on('click', function (){

	var
		tableTitle    = $('#view-table .title-place .text:last-child').text(),
		unlockMessage = {

			message: 'Разблокировть таблицу ' + tableTitle + ' ?',
			type: 'question',
			buttons: [
				{
					text: 'Нет',
					pressed: function ()
					{
						window.top.closeMsg();
					}
				},
				{
					text: 'Да',
					pressed: function ()
					{
						// Разблокировть таблицу

						window.top.closeMsg();
					}
				}				
			]

		};

	window.top.alertMsg(unlockMessage);

});
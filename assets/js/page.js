$('.page-content iframe').on('load', function (e){

	setTimeout(function() {

		var
			iframeHeight = localStorage.getItem('iframeHeight'),
			newHeight	 = $('.page-header').height() + $('#menu').height() + 30;

		newHeight = window.innerHeight - newHeight;

		localStorage.setItem('bodyHeight', newHeight);

		if ( iframeHeight && parseInt(iframeHeight) > newHeight )
		{
			$('.page-content iframe').height(iframeHeight);

			$('.page-content').height('auto');
		}
		else if ( parseInt(iframeHeight) < newHeight )
		{
			$('.page-content iframe').attr('scrolling', 'no');

			$('.page-content').height(newHeight + 'px');
		}
		else
		{
			$('.page-content iframe').attr('scrolling', 'auto');		

			$('.page-content').height(newHeight + 'px');
		}

	}, 300);

});

$('#reload-page').on('click', function (){

	var
		url = $('.page-content iframe').attr('src');

	$('.page-content iframe').attr('src', url);

});

$('#fullscreen-iframe').on('click', function (){

	function iframeSets()
	{
		$('#fullscreen-iframe').toggleClass('iframefull');

		$('.page-content iframe').toggleClass('fullscreen');

		if ( $('.page-content iframe').hasClass('fullscreen') )
		{
			$('.page-content iframe').attr('scrolling', 'auto');

			var
				url = $('.page-content iframe').attr('src');

			$('.page-content iframe').attr('src', url);
		}
		else
		{
			$('.page-content iframe').attr('scrolling', 'no');
		}
	}

	var
		reloadMessage = {

			message: 'Страница будет перезагружена! Продолжить действие ?',
			type: 'question',
			buttons: [
				{
					text: 'Отмена',
					pressed: function ()
					{
						closeMsg();
					}
				},
				{
					text: 'Далее',
					pressed: function ()
					{
						closeMsg();

						iframeSets();
					}
				}
			]

		};

	if ( $('#fullscreen-iframe').hasClass('iframefull') )
	{
		iframeSets();
	}
	else
	{
		alertMsg(reloadMessage);
	}

});

function addPreviewForm(data)
{
	var
		tableHeader = '<tr>',
		$tablePlace = $('#preview-table .table-place tbody'),
		$formPlace  = $('#preview-table .form-place'),
		$formItems  = $formPlace.find('.form-item');

	$tablePlace.html('<tr>');

	for (var i = 0; i < $formItems.length; i++)
	{
		if ( !$formItems.eq(i).hasClass('for-copy') )
		{
			$formItems.eq(i).remove();
		}
	}

	for (var i = 0; i < data.length; i++)
	{
		var
			formItemType = data[i].type;

		if ( formItemType == 'table_name' )
		{
			$('#preview-table .pt-title sup').text(data[i].title);
		}
		else
		{
			$tablePlace.append('<td>Ячейка (' + data[i].title + ')</td>');

			tableHeader += '<th>' + data[i].title + '</th>';

			var
				formItemData = {
					'new-list': $formPlace.find('.' + formItemType + '.for-copy').clone(),
					'new-radio': $formPlace.find('.' + formItemType + '.for-copy').clone(),
					'new-checkbox': $formPlace.find('.' + formItemType + '.for-copy').clone(),
					'new-text': $formPlace.find('.' + formItemType + '.for-copy').clone(),
					'new-subject': $formPlace.find('.' + formItemType + '.for-copy').clone()
				},
				$currentItem = formItemData[formItemType];
			
			$currentItem.attr('class', 'form-item');

			$currentItem.find('.title-place .text').text(data[i].title);

			if ( data[i].options )
			{
				var
					optionsData  = data[i].options,
					$optionPlace = $currentItem.find('.options-place');

				for (var a = 0; a < optionsData.length; a++)
				{
					var
						$newCheckPlace = $currentItem.find('.for-copy').clone(),					
						optionText     = optionsData[a];

					$newCheckPlace.removeClass('for-copy');

					$newCheckPlace.find('.text').text(optionText);

					$optionPlace.append($newCheckPlace);
				}
			}

			$formPlace.append($currentItem);
		}
	}

	$tablePlace.append('</tr>');

	tableHeader += '</tr>';

	$tablePlace.prepend(tableHeader);
}
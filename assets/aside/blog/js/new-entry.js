$('#create-post .cp-actions .option').on('click', function (){

	var
		newPlaceholder = $(this).data('val'),
		newTextPlace   = $(this).data('type'),
		$selectPlace   = $('#create-post .cp-actions .select');

	if ( newPlaceholder )
	{
		$('#create-post .cp-input textarea').attr('placeholder', newPlaceholder);
	}

	$('.cp-actions .select').data('type', newTextPlace);

	$selectPlace.removeClass('no-selected');

});

$('#create-item').on('click', function (){

	var
		$selectPlace  = $('#create-post .cp-actions .select'),
		newTextPlace  = $selectPlace.data('type'),
		textareaValue = $('#textarea-for-clear').val(),
		$newSelector  = $('#post-view .for-copy .' + newTextPlace).clone();

	if ( textareaValue.trim() != '' )
	{
		if ( newTextPlace )
		{
			if ( newTextPlace == 'image-sub' )
			{
				$newSelector.find('.image > img').attr('src', textareaValue);
			}
			else if ( newTextPlace == 'list-sub' )
			{
				textareaValue = textareaValue.split("\n");

				for (var i = 0; i < textareaValue.length; i++)
				{
					textareaValue[i] = '<li>' + textareaValue[i] + '</li>';
				}

				textareaValue = textareaValue.join('');

				$newSelector.children().html(textareaValue);
			}
			else
			{
				$newSelector.children().html(textareaValue);
			}

			$('#new-edit-items').append($newSelector);
		}
		else
		{
			$selectPlace.addClass('no-selected');
		}
	}

});

$('#new-edit-items').on('click', '.edit-sub', function (){

	$('.edit-sub').removeClass('edit-active');
	$(this).addClass('edit-active');

	var
		$textareaPlace = $('#textarea-for-clear'),
		textareaVal    = $(this).children().text().trim();

	if ( $(this).hasClass('image-sub') )
	{
		textareaVal = $(this).find('.image > img').attr('src');
	}
	else if ( $(this).hasClass('list-sub') )
	{
		var
			$editList = $(this).find('.list > li'),
			listItems = [];

		for (var i = 0; i < $editList.length; i++)
		{
			listItems.push($editList.eq(i).text() + "\n");
		}

		textareaVal = listItems.join('');
	}

	$textareaPlace.val(textareaVal);
	$textareaPlace.focus();

	$('#confirm-item').removeClass('off');

});

$('#confirm-item').on('click', function (){

	$(this).addClass('off');

	var
		$editedItem  = $('.edit-sub.edit-active'),
		scrollTopVal = $editedItem.offset().top,
		editedText   = $('#textarea-for-clear').val();

	if ( editedText.trim() != '' )
	{
		if ( $editedItem.hasClass('image-sub') )
		{
			$editedItem.find('.image > img').attr('src', editedText);
		}
		else if ( $editedItem.hasClass('list-sub') )
		{
			var
				newListItems = editedText.split("\n");

			for (var i = 0; i < newListItems.length; i++)
			{
				newListItems[i] = '<li>' + newListItems[i] + '</li>';
			}

			newListItems = newListItems.join('');

			$editedItem.find('.list').html(newListItems);
		}
		else
		{
			$editedItem.children().text(editedText);
		}

		window.top.scrollTo(0, scrollTopVal);
	}
	else
	{
		$editedItem.remove();
	}

	$('.edit-sub').removeClass('edit-active');

	$('#textarea-for-clear').val('');

});

$('#cancel-entry').on('click', function (){

	var
		cancelMessage = {

			message: 'Эта статья будет удалена. Удалить текущую статью ?',
			type: 'question',
			buttons:
			[
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
						$('#textarea-for-clear').val('');

						$('#post-view .pv-title input').val('');

						$('#new-edit-items').html('');

						$('#confirm-item').attr('class', 'cp-action-item off');

						window.top.closeMsg();
					}
				}
			]				

		};

	window.top.alertMsg(cancelMessage);

});

$('#create-post form').on('submit', function (){

	var
		blogContent = {},
		postContent = [],
		$editItems  = $('#new-edit-items .edit-sub');

	blogContent.title = $('#post-title').val();

	for (var i = 0; i < $editItems.length; i++)
	{
		postContent.push($editItems.eq(i).html().trim());

		if ( $editItems.eq(i).children().hasClass('image') && !blogContent.image )
		{
			blogContent.image = $editItems.eq(i).find('img').attr('src');
		}
	}

	postContent = postContent.join("\n");	

	blogContent.content = postContent;

	var
		successMessage = {

			message: 'Пост "' + blogContent.title + '" опубликован.',
			type: 'info',
			buttons: [
				{
					text: 'Окей',
					pressed: function ()
					{
						window.top.closeMsg();
					}
				}
			]

		};

	window.top.alertMsg(successMessage);

	blogContent = JSON.stringify(blogContent);

	$('#create-post form').append("<input type='hidden' name='blog_content' value='" + blogContent + "'>");

});
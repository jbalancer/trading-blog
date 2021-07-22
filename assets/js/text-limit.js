for (var i = 0; i < $('.limit-text').length; i++)
{
	var
		$textPlace = $('.limit-text').eq(i),
		wordCount  = $textPlace.data('count'),		
		text       = $textPlace.text().trim().split(''),
		wordLength = text.length,
		wordSub    = '...',
		wordSubNum = 3;
	
	if ( wordCount < wordLength )
	{
		text.length = wordCount - wordSubNum;

		text = text.join('');

		text += wordSub;

		$textPlace.text(text);
	}
}

function limitText(selector)
{
	var
		$newLimit = $(selector).find('.default .limit-text'),
		newText   = $newLimit.text().split(''),
		newLength = +($newLimit.data('count'));

	if ( newText.length > newLength )
	{
		newText.length = newLength - 3;

		newText = newText.join('');

		newText += '...';

		$newLimit.text(newText);
	}
}

function onlyText(text, len)
{
	var
		newText = text.split(''),
		newLen  = newText.length,
		newSub  = '...';

	if ( newLen > len )
	{
		newText.length = len - newSub.length;

		newText.push(newSub);	
	}
	
	newText = newText.join('');

	return newText;
}
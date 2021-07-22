var
	newInput   = document.createElement('input'),
	inputPlace = document.querySelector('body'),
	page       = document.querySelector('body .page-content'),
	iframe     = document.querySelector('body .page-content iframe');

newInput.type = 'text';
newInput.id = 'auto-height';

inputPlace.appendChild(newInput);

newInput.style.display = 'none';

newInput.onclick = function ()
{
	var
		newHeight = localStorage.getItem('bodyHeight');

	if ( newHeight < parseInt(this.value) )
	{
		iframe.style.height = this.value;

		page.style.height = 'auto';
	}	
}
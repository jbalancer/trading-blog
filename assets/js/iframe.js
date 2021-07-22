function iframeHeight()
{
	return document.documentElement.scrollHeight + 'px';
}

localStorage.setItem('iframeHeight', iframeHeight());

var
	iframeBody  = document.querySelector('body'),
	heightInput = window.top.document.querySelector('#auto-height'),
	inputEvent  = new Event('click');

iframeBody.addEventListener('click', function (){

	heightInput.value = iframeHeight();

	heightInput.dispatchEvent(inputEvent);

});
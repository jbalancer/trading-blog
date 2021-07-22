$('#close-image-show').on('click', function (){

	$('#image-show').removeClass('active');

	$('#image-show .is-image').html('');

});

function setImageShow(link)
{
	var
		image = new Image(),
		place = document.querySelector('#image-show');

	place.classList.add('active');

	image.src = link;	

	image.onload = function ()
	{
		var
			imageWidth = image.naturalWidth + 'px',
			imagePlace = document.querySelector('#image-show .is-image');

		imagePlace.style.width = imageWidth;

		imagePlace.appendChild(image);
	}
}
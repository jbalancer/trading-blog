function previewImage(imagePreview, imageInput)
{
	var
		imageReader = new FileReader();

	imageReader.onloadend = function ()
	{
		imagePreview.src = imageReader.result;
	}

	if ( imageInput )
	{
	    imageReader.readAsDataURL(imageInput);

	    imagePreview.classList.add('active');
	}
	else
	{
	    imagePreview.src = "";
	}
}
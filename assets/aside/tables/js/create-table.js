$('#add-row').on('click', function (){

	var
		$newRow = $('#create-table .ct-des.for-clone').clone();

	$newRow.attr('class', 'ct-des table-data-place');
	
	$('#create-table .ct-sub').append($newRow);

});

$('.ct-sub').on('click', '.del-row', function (){

	if ( !$(this).parents('.ct-des').hasClass('for-clone') )
	{
		$(this).parents('.ct-des').remove();
	}

});

$('.ct-sub').on('click', '.del-option', function (){

	$(this).parents('.ctd-option').remove();

});

$('.ct-sub').on('click', '.ctd-input .btn-place', function (){

	var
		$input 	   = $(this).parent().find('.input-place input'),
		$newOption = $('.ct-des.for-clone .ctd-option.for-clone').clone();

	if ( $input.val().trim() != '' )
	{
		$newOption.attr('class', 'ctd-option table-option');
		
		var
			textLen  = $newOption.find('.limit-text').data('count'),
			inputVal = $input.val().trim(),
			thisText = onlyText(inputVal, textLen);

		$newOption.find('.limit-text').text(thisText);

		$newOption.data('val', inputVal);

		$input.val('');

		$(this).parents('.ct-des').find('.ctd-select').append($newOption);
	}

});

$('.ct-sub').on('click', '.option', function (){

	var
		$newSelect = $(this).parents('.ct-des').find('.ct-data');

	if ( $(this).hasClass('active-select') )
	{
		$newSelect.addClass('active');
	}
	else if ( $newSelect.hasClass('active') )
	{
		$newSelect.removeClass('active');
	}

});

var
	inputData = [];

$('.ready-data').on('click', function (){

	inputData = [];

	var
		$inputVals = $('.table-data-place');

	for (var i = 0; i < $inputVals.length; i++)
	{
		var
			currentVal = {},
			inputTitle = $inputVals.eq(i).find('.title-input').val().trim(),
			inputType  = $inputVals.eq(i).find('.select').data('val');
		
		currentVal.title = inputTitle;
		currentVal.type = inputType;

		if ( $inputVals.eq(i).find('.ctd-option').length > 1 )
		{
			currentVal.options = [];

			var
				$option = $inputVals.eq(i).find('.table-option');

			for (var a = 0; a < $option.length; a++)
			{
				currentVal.options.push($option.eq(a).data('val'));
			}
		}

		currentVal = JSON.stringify(currentVal);
		
		inputData.push(currentVal);

		currentVal = addInput(currentVal);

		if ( $(this).attr('id') != 'open-preview' )
		{
			$('#form-create-table').append(currentVal);
		}			
	}

});

$('#open-preview').on('click', function (){

	for (var i = 0; i < inputData.length; i++)
	{
		inputData[i] = JSON.parse(inputData[i]);
	}

	window.top.addPreviewForm(inputData);

	window.top.document.querySelector('#preview-table').setAttribute('class', 'active');

});

function addInput(strData)
{
	var
		input = '<input type="hidden" name="new_table_data[]" ';

	input += "value='" + strData + "'>";

	return input;
}
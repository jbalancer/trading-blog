$('.vt-options').on('click', function (){

	$('.vt-options.active').removeClass('active');

	$(this).addClass('active');

});

$('.del-table').on('click', function (){

	var
		tableTitle = $(this).parents('.vt-item').find('.vt-title span').text(),
		confirmDel = {

			type: 'ban',
			message: 'Вы уверены что хотите удалить таблицу "' + tableTitle + '" ?',
			buttons: [
				{
					text: 'Отмена',
					pressed: function ()
					{
						window.top.closeMsg();
					}
				},
				{
					text: 'Удалить',
					pressed: function ()
					{
						// Удалить таблицу

						window.top.closeMsg();
					}
				}

			]

		};
	
	window.top.alertMsg(confirmDel);

});

function showTable()
{
	var
		tableTitle = $(this).parents('.vt-item').find('.vt-title span').text(),
		tableDate  = $(this).parents('.vt-item').find('.vt-date span').text();

	$('#show-table .show-title .text').text(tableTitle);
	$('#show-table .show-date .date-text').text(tableDate);

	$('#view-tables').toggle();

	if ( $(this).hasClass('go-edit-table') )
	{
		$('#show-table').addClass('edit-table');
	}

	$('#show-table').toggle();

	window.top.scrollTo(0, 0);

	if ( $('#show-table').hasClass('edit-table') )
	{
		$('.table-place').on('click', '.cell', function (){

			if ( !$(this).hasClass('active') )
			{
				var
					$thisCell  = $(this),
					thisText   = $thisCell.children('.text').text(),
					cellWidth  = $thisCell.css('width'),
					cellHeight = $thisCell.css('height');

				cellWidth = +(parseInt(cellWidth) - 1) + 'px';
				cellHeight = +(parseInt(cellHeight) - 1) + 'px';

				$thisCell.html('<input type="text" value="' + thisText + '" style="width: ' + cellWidth + '; height: ' + cellHeight + ';">');

				$thisCell.addClass('active');

				$thisCell.children('input').focus();

				$thisCell.children('input').on('blur', function (){

					$thisCell.removeClass('active');

					var
						newText = $thisCell.children('input').val();

					$thisCell.html('<span class="text">' + newText + '</span>');

				});
			}

		});
	}
}

$('.go-view-table').on('click', showTable);

$('.go-edit-table').on('click', showTable);

$('.go-add-row').on('click', function (){

	$('#view-tables').toggle();

	$('#add-table-row').show();

});

$('.go-lock').on('click', function (){

	$('#view-tables').toggle();

	$('#lock-table').show();

});

$('#back-view-table').on('click', function (){

	$('#show-table').hide();

	$('#show-table').toggleClass('edit-table');

	$('#view-tables').show();

});

function showAllTables()
{
	if ( $(this).parents('#show-table') )
	{
		$('#show-table').hide();
	}

	if ( $(this).parents('#add-table-row') )
	{
		$('#add-table-row').hide();
	}

	if ( $(this).parents('#lock-table') )
	{
		$('#lock-table').hide();
	}

	$('#view-tables').show();
}

$('#back-vt-ne').on('click', showAllTables);

$('#back-vt-add').on('click', showAllTables);

$('#back-vt-ban').on('click', showAllTables);
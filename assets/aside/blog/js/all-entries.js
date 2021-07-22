$('#back-post').on('click', function (){

	$('#post-view').removeClass('active');

	$('#all-posts').addClass('active');

});

$('#del-post').on('click', function (){

	var
		delPostTitle   = $('#post-view .pv-title .text-place h1').text(),
		delPostMessage = {

			message: 'Удалить пост "' + delPostTitle + '" ?',
			type: 'question',
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
						// Удаление

						window.top.closeMsg();
					}
				}
			]

		};

	window.top.alertMsg(delPostMessage);

});

$('.ap-item').on('click', function (){

	$('#post-view').addClass('active');

	$('#all-posts').removeClass('active');

});
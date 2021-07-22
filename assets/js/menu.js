var
	displaySidebar    = localStorage.getItem('displaySidebar'),
	visibilitySidebar = localStorage.getItem('visibilitySidebar');

if ( displaySidebar )
{
	$('#sidebar').addClass(displaySidebar);

	$('.menu-button[data-action="display_sidebar"]').addClass('active');

	if ( visibilitySidebar )
	{
		$('.page-hr').addClass('icon-active');
	}
	else
	{
		$('.page-hr').addClass('all-active');
	}
}

if ( visibilitySidebar )
{
	$('#sidebar').addClass(visibilitySidebar);

	$('.menu-button[data-action="visibility_sidebar"]').addClass('active');
}

$('.menu-button').on('click', function (){

	$(this).toggleClass('active');

	var
		action = $(this).data('action');

	if ( action )
	{
		if ( action == 'display_sidebar' )
		{
			$('#sidebar').toggleClass('active');

			if ( $('#sidebar').hasClass('active') )
			{
				localStorage.setItem('displaySidebar', 'active');
			}
			else
			{
				localStorage.setItem('displaySidebar', '');
			}
		}

		if ( action == 'visibility_sidebar' )
		{
			$('#sidebar').toggleClass('icon-sidebar');	

			if ( $('#sidebar').hasClass('icon-sidebar') )
			{
				localStorage.setItem('visibilitySidebar', 'icon-sidebar');
			}
			else
			{
				localStorage.setItem('visibilitySidebar', '');
			}
		}

		if ( $('#sidebar').hasClass('active') )
		{
			if ( $('#sidebar').hasClass('icon-sidebar') )
			{
				if ( $('#page .page-hr').hasClass('all-active') )
				{
					$('#page .page-hr').removeClass('all-active')
				}

				$('#page .page-hr').addClass('icon-active');
			}
			else
			{
				if ( $('#page .page-hr').hasClass('icon-active') )
				{
					$('#page .page-hr').removeClass('icon-active')
				}
				
				$('#page .page-hr').addClass('all-active');
			}		
		}
		else
		{
			if ( $('#page .page-hr').hasClass('all-active') )
			{
				$('#page .page-hr').removeClass('all-active')
			}

			if ( $('#page .page-hr').hasClass('icon-active') )
			{
				$('#page .page-hr').removeClass('icon-active')
			}
		}
	}

});

function searchGo(val)
{
	console.log(val);
}

$('#search-go').on('click', function (){

	searchGo($('#search-input').val());

});

$('#search-input').on('keyup', function (e){

	if ( e.key.toLowerCase() == 'enter' || e.keyCode == 13 )
	{
		searchGo($('#search-input').val());
	}

});

$('#open-userinfo').on('click', function (){

	$('.page-content iframe').attr('src', 'pages/account/user-info.php');

	$('#page .page-title .text-place .text').text('Профиль');

	var
		userNick = $(this).find('.text-place span').text();

	$('#page .page-title .text-place .path-text').text('Просмотр и редактирование / ');

// Если мужчина
	$('#page .page-title .icon-place i').attr('class', 'icon-user icons');

// Если женщина
	// $('#page .page-title .icon-place i').attr('class', 'icon-user-female icons');

});
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<title>Просмотр доступных таблиц</title>
	<link rel="stylesheet" href="../../assets/css/reset.css">
	<link rel="stylesheet" href="../../libs/css/icons.css">
	<link rel="stylesheet" href="../../assets/css/checkbox.css">
	<link rel="stylesheet" href="../../assets/aside/account/css/user-info.css">
	<link rel="stylesheet" href="../../assets/aside/account/css/user-edit.css">
	<link rel="stylesheet" href="../../assets/aside/account/css/user-settings.css">
	<link rel="stylesheet" href="../../assets/aside/account/css/user-friends.css">
	<link rel="stylesheet" href="../../assets/aside/account/css/user-search.css">
	<script src="../../libs/js/jquery.js"></script>
	<script defer src="../../assets/js/iframe.js"></script>
	<script defer src="../../assets/js/text-limit.js"></script>
	<script defer src="../../assets/aside/account/js/user-info.js"></script>
	<script defer src="../../assets/aside/account/js/user-edit.js"></script>
	<script defer src="../../assets/aside/account/js/user-settings.js"></script>
	<script defer src="../../assets/aside/account/js/user-friends.js"></script>
	<script defer src="../../assets/aside/account/js/user-search.js"></script>
</head>
<body>

	<section id="user-info">
		
		<div class="ui-wrapper">
			
			<div class="ui-bg" style="background-image: url(../../images/new1.jpg);"></div>

			<div class="ui-bg no-img"></div>

			<div class="ui-title">
				<span class="text">Ник пользователя</span>
			</div>

			<div class="ui-min-logo">
				<div class="ui-photo" data-src="../../images/profile.jpg"></div>
			</div>

			<div class="ui-menu">
				
				<div class="uim-left">
					
					<div class="uim-sub">
						
						<div class="uiml-item active" data-open="#user-search">
						
							<div class="icon-place">
								<span class="icon">
									<i class="fa fa-user-plus"></i>
								</span>
							</div>

							<div class="text-place">
								<span class="limit-text" data-count="10">Поиск</span>
							</div>

						</div>

						<div class="uiml-item" data-open="#user-friends">
							
							<div class="icon-place">
								<span class="icon">
									<i class="fa fa-users"></i>
								</span>
							</div>

							<div class="text-place">
								<span class="limit-text" data-count="10">Друзья</span>
							</div>

						</div>

					</div>

				</div>

				<div class="ui-logo">
					<div class="ui-photo" data-src="../../images/profile.jpg"></div>
				</div>

				<div class="uim-right">

					<div class="uim-sub">
						
						<div class="uiml-item" data-open="#user-edit">
							
							<div class="icon-place">
								<span class="icon">
									<i class="fa fa-user"></i>
								</span>
							</div>

							<div class="text-place">
								<span class="limit-text" data-count="10">Профиль</span>
							</div>

						</div>

						<div class="uiml-item" data-open="#user-settings">
							
							<div class="icon-place">
								<span class="icon">
									<i class="fa fa-cog"></i>
								</span>
							</div>

							<div class="text-place">
								<span class="limit-text" data-count="10">Настройки</span>
							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</section>

	<section id="user-edit" class="open">
		
		<div class="ue-wrapper">
			
			<div class="ue-content">
				
				<div class="ue-item">
					
					<div class="title">
						<span class="text">Имя</span>
					</div>

					<div class="input-place">
						<input type="text" placeholder="Имя юзера">
					</div>

				</div>

				<div class="ue-item">
					
					<div class="title">
						<span class="text">Фамилия</span>
					</div>

					<div class="input-place">
						<input type="text" placeholder="Фамилия юзера">
					</div>

				</div>

				<div class="ue-item">
					
					<div class="title">
						<span class="text">Отчество</span>
					</div>

					<div class="input-place">
						<input type="text" placeholder="Отчество юзера">
					</div>

				</div>				

				<div class="ue-item">
					
					<div class="title">
						<span class="text">Дата рождения</span>
					</div>

					<div class="input-place">
						<input type="text" placeholder="Дата рождения юзера">
					</div>

				</div>

				<div class="ue-item">
					
					<div class="title">
						<span class="text">Место жительства</span>
					</div>

					<div class="input-place">
						<input type="text" placeholder="Место жительства юзера">
					</div>

				</div>

				<div class="ue-item">
					
					<div class="title">
						<span class="text">Пол</span>
					</div>

					<div class="input-place">
							
						<div class="checkboxes">

							<div class="check-place">

								<label class="checkbox">
									<input type="radio" name="select-sex">
									<div class="check-item"></div>
								</label>

								<span class="text">Мужчина</span>

							</div>

							<div class="check-place">

								<label class="checkbox">
									<input type="radio" name="select-sex">
									<div class="check-item"></div>
								</label>

								<span class="text">Женщина</span>

							</div>

						</div>

					</div>

				</div>

				<div class="ue-item">
					
					<div class="title">
						<span class="text">Ник</span>
					</div>

					<div class="input-place">
						<input type="text" placeholder="Ник юзера">
					</div>

				</div>

				<div class="ue-item">
					
					<div class="title">
						<span class="text">Ссылка на аву</span>
					</div>

					<div class="input-place">
						<input type="text" placeholder="Аватар юзера">
					</div>

				</div>

				<div class="ue-item">
					
					<div class="title">
						<span class="text">Логин</span>
					</div>

					<div class="input-place">
						<input type="text" placeholder="Логин юзера">
					</div>

				</div>

				<div class="ue-item">
					
					<div class="title">
						<span class="text">Email</span>
					</div>

					<div class="input-place">
						<input type="text" placeholder="Email юзера">
					</div>

				</div>

				<div class="ue-item">
					
					<div class="title">
						<span class="text">О себе</span>
					</div>

					<div class="input-place">
						<textarea placeholder="Информация о юзере"></textarea>
					</div>

				</div>

				<div class="ue-item">
					
					<div class="title">
						<span class="text">Текущий пароль</span>
					</div>

					<div class="input-place">
						<input type="text" placeholder="Ваш текущий пароль">
					</div>

				</div>

				<div class="ue-item">
					
					<div class="title">
						<span class="text">Новый пароль</span>
					</div>

					<div class="input-place">
						<input type="text" placeholder="Новый пароль">
					</div>

				</div>

			</div>

			<div class="ue-btns">
				
				<div class="btn-item">
					<span class="text">Сохранить</span>
				</div>

			</div>

		</div>

	</section>

	<section id="user-settings" class="open">
		
		<div class="us-wrapper">

			<div class="us-content">

				<div class="usc-title">
					<span class="text">Заголовок функций</span>
				</div>
				
				<div class="usc-item">

					<div class="icon-place">
						<span class="icon">
							<i class="fa fa-question"></i>
						</span>
					</div>

					<div class="text-place">
						<span class="text">Включить какую-нибудь функцию ?</span>
					</div>

					<label class="checkbox">
						<input type="checkbox">
						<div class="check-item"></div>
					</label>

				</div>

				<div class="separator"></div>

				<div class="usc-item">

					<div class="icon-place">
						<span class="icon">
							<i class="fa fa-question"></i>
						</span>
					</div>

					<div class="text-place">
						<span class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos sit ut accu</span>
					</div>

					<label class="checkbox">
						<input type="checkbox">
						<div class="check-item"></div>
					</label>

				</div>

				<div class="separator"></div>

				<div class="usc-item">

					<div class="icon-place">
						<span class="icon">
							<i class="fa fa-question"></i>
						</span>
					</div>

					<div class="text-place">
						<span class="text">Lorem ipsum dolor sit amet, consectetur </span>
					</div>

					<label class="checkbox">
						<input type="checkbox">
						<div class="check-item"></div>
					</label>

				</div>

				<div class="separator"></div>

				<div class="usc-item input-on">

					<div class="icon-place">
						<span class="icon">
							<i class="fa fa-question"></i>
						</span>
					</div>

					<div class="text-place">
						<span class="text">Lorem ipsum dolor sit amet, consectetur </span>
					</div>

					<div class="input-place">
						<input type="text" placeholder="50">
					</div>

				</div>

			</div>
			
			<div class="ue-btns">
				
				<div class="btn-item">
					<span class="text">Сохранить</span>
				</div>

			</div>

		</div>

	</section>

	<section id="user-friends" class="open">
		
		<div class="uf-wrapper">
		
			<div class="uf-search">

				<div class="input-place">
					<input type="text" placeholder="Найти друга">
				</div>

				<div class="icon-place">
					<span class="icon">
						<i class="fa fa-search"></i>
					</span>
				</div>

			</div>

			<div class="uf-content">
				
				<div class="uf-item">
					
					<div class="ufi-bg" style="background-image: url(../../images/new2.png);"></div>

					<div class="ufi-bg no-img"></div>

					<div class="uf-user-photo">
						<div class="uf-photo-place" style="background-image: url(../../images/profile.jpg)"></div>
					</div>

					<div class="uf-title">
						
						<div class="uf-username">
							<span class="limit-text" data-count="26">Ник пользователя</span>
						</div>

						<div class="uf-country">
							<span class="limit-text" data-count="31">Место проживания пользователя и</span>
						</div>

					</div>

					<div class="uf-status">
						
						<div class="ufs-sub">
							
							<div class="text-place">
								<span class="limit-text" data-count="7">1000000</span>
							</div>

							<div class="icon-place">
								<span class="icon">
									<i class="fa fa-thumbs-o-up"></i>
								</span>
							</div>

						</div>

						<div class="ufs-sub">
							
							<div class="text-place">
								<span class="limit-text" data-count="7">268959</span>
							</div>

							<div class="icon-place">
								<span class="icon">
									<i class="fa fa-bell-o"></i>
								</span>
							</div>

						</div>

						<div class="ufs-sub">
							
							<div class="text-place">
								<span class="limit-text" data-count="7">357000</span>
							</div>

							<div class="icon-place">
								<span class="icon">
									<i class="fa fa-hand-peace-o"></i>
								</span>
							</div>

						</div>

					</div>

					<div class="uf-btns">
						
						<div class="uf-main-btn">
							<span class="text">Профиль</span>
						</div>

						<div class="uf-btn">
							<span class="icon">
								<i class="fa fa-ellipsis-v"></i>
							</span>
						</div>

					</div>

				</div>

			</div>

			<div class="uf-pages">
				
				<div class="ufp-sub">
					<span class="text">1</span>
				</div>

				<div class="ufp-sub active">
					<span class="text">2</span>
				</div>

				<div class="ufp-sub">
					<span class="text">3</span>
				</div>

				<div class="ufp-sub input-on">
					
					<div class="ufp-search">
						
						<input type="text" placeholder="1">

						<div class="icon-place">
							<span class="icon">
								<i class="fa fa-angle-right"></i>
							</span>
						</div>

					</div>

				</div>

			</div>

		</div>

	</section>

	<section id="user-search" class="open active">
		
		<div class="us-wrapper">
			
			<div class="uf-search">

				<div class="input-place">
					<input type="text" placeholder="Найти пользователя ...">
				</div>

				<div class="icon-place">
					<span class="icon">
						<i class="fa fa-search"></i>
					</span>
				</div>

			</div>

			<div class="us-filters">
					
				<div class="usf-item">
				
					<div class="icon-place">
						<span class="icon">
							<i class="fa fa-star"></i>
						</span>
					</div>

					<div class="text-place">
						<span class="text">Топ</span>
					</div>

				</div>

				<div class="usf-item active">
				
					<div class="icon-place">
						<span class="icon">
							<i class="fa fa-star-o"></i>
						</span>
					</div>

					<div class="text-place">
						<span class="text">Новые</span>
					</div>

				</div>

			</div>

			<div class="us-content">
				
				<div class="us-sub">

					<div class="us-bg" style="background-image: url(../../images/new4.jpg);"></div>

					<div class="us-bg no-bg"></div>
					
					<div class="logo-place">
						<div class="photo" style="background-image: url(../../images/profile.jpg);"></div>
					</div>

					<div class="text-place">
						
						<div class="title">
							<span class="limit-text" data-count="16">Ник юзера</span>
						</div>

						<div class="description">
							<span class="limit-text" data-count="58">Это описание пользователя а именно то описание которое сам пользователь заполняет. То есть пользователь сам заполняет поле о себе!</span>
						</div>

					</div>

				</div>

				<div class="us-sub">

					<div class="us-bg" style="background-image: url(../../images/new5.jpg);"></div>

					<div class="us-bg no-bg"></div>
					
					<div class="logo-place">
						<div class="photo" style="background-image: url(../../images/profile.jpg);"></div>
					</div>

					<div class="text-place">
						
						<div class="title">
							<span class="limit-text" data-count="16">Ник юзера</span>
						</div>

						<div class="description">
							<span class="limit-text" data-count="58">Это описание пользователя а именно то описание которое сам пользователь заполняет. То есть пользователь сам заполняет поле о себе!</span>
						</div>

					</div>

				</div>

				<div class="us-sub">

					<div class="us-bg" style="background-image: url(../../images/new6.jpg);"></div>

					<div class="us-bg no-bg"></div>
					
					<div class="logo-place">
						<div class="photo" style="background-image: url(../../images/profile.jpg);"></div>
					</div>

					<div class="text-place">
						
						<div class="title">
							<span class="limit-text" data-count="16">Ник пользователя</span>
						</div>

						<div class="description">
							<span class="limit-text" data-count="58">Пользователь о себе</span>
						</div>

					</div>

				</div>

			</div>

			<div class="uf-pages">
				
				<div class="ufp-sub">
					<span class="text">1</span>
				</div>

				<div class="ufp-sub active">
					<span class="text">2</span>
				</div>

				<div class="ufp-sub">
					<span class="text">3</span>
				</div>

				<div class="ufp-sub input-on">
					
					<div class="ufp-search">
						
						<input type="text" placeholder="1">

						<div class="icon-place">
							<span class="icon">
								<i class="fa fa-angle-right"></i>
							</span>
						</div>

					</div>

				</div>

			</div>

		</div>

	</section>
	
</body>
</html>
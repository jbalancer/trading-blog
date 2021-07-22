<?php

	session_start();

	if ( $_SESSION['confirm'] == 'ok' ) {		

?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<title>TradersWay</title>
	<link rel="stylesheet" href="assets/css/reset.css">
	<link rel="stylesheet" href="libs/css/icons.css">
	<link rel="stylesheet" href="assets/css/preview-table.css">
	<link rel="stylesheet" href="assets/css/checkbox.css">
	<link rel="stylesheet" href="assets/css/select.css">
	<link rel="stylesheet" href="assets/css/preloader.css">
	<link rel="stylesheet" href="assets/css/alert.css">
	<link rel="stylesheet" href="assets/css/menu.css">
	<link rel="stylesheet" href="assets/css/sidebar.css">
	<link rel="stylesheet" href="assets/css/page.css">
	<link rel="stylesheet" href="assets/css/image-show.css">
	<script src="libs/js/jquery.js"></script>
	<script defer src="assets/js/auto-height.js"></script>
	<script defer src="assets/js/preview-table.js"></script>	
	<script defer src="assets/js/preloader.js"></script>
	<script defer src="assets/js/select.js"></script>
	<script defer src="assets/js/alert.js"></script>
	<script defer src="assets/js/text-limit.js"></script>	
	<script defer src="assets/js/menu.js"></script>
	<script defer src="assets/js/sidebar.js"></script>
	<script defer src="assets/js/page.js"></script>
	<script defer src="assets/js/image-show.js"></script>
<?php
	
	if ( $_SESSION['authtype'] == 'registry' ) {

		echo '<script>var greeting = "' . $_SESSION['username'] . ', поздравляем вас с регистрацией!";</script>';
			
	} elseif ( $_SESSION['authtype'] == 'login' ) {

		echo '<script>var greeting = "Приветствую вас ' . $_SESSION['username'] . '!";</script>'; 

	}	

?>
</head>
<body>

	<section id="menu">
		
		<div class="menu-wrapper">
			
			<div class="menu-left">
				
				<div class="menu-sub">
						
					<div class="menu-item">			
						<div class="menu-button" data-action="display_sidebar">
							<span class="icon">
								<i class="ti-menu"></i>
							</span>
						</div>
					</div>

					<div class="menu-item">						
						<div class="menu-button" data-action="visibility_sidebar">
							<span class="icon">
								<i class="ti-split-v-alt"></i>
							</span>
						</div>
					</div>

					<div class="menu-item">

						<label class="menu-input">

							<input type="text" placeholder="Найти..." id="search-input">

							<div class="input-button" id="search-go">
								<span class="icon">
									<i class="ti-search"></i>
								</span>
							</div>

						</label>

					</div>

				</div>

			</div>

			<div class="menu-right">
				
				<div class="menu-sub">					
					
					<div id="open-online" class="menu-item open-online">						
						<div class="menu-button">
							<span class="icon">
								<i class="ti-world"></i>
							</span>
						</div>
					</div>

					<div class="menu-item">						
						<div class="menu-button">
							<span class="icon">
								<i class="ti-shift-right"></i>
							</span>
						</div>
					</div>

					<div class="menu-item">
						
						<div class="menu-imbtn" id="open-userinfo">
							
							<div class="image-place"></div>

							<div class="text-place">
								<span class="limit-text" data-count="12">Ник юзера</span>
							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</section>

	<section id="sidebar">
		
		<div class="sidebar-wrapper">

			<div class="sidebar-content">

				<div class="sidebar-title">
					
					<div class="text-place">
						<span class="limit-text" data-count="20">Портфель</span>
					</div>
				
					<div class="icon-place">
						<span class="icon">
							<i class="icon-question icons"></i>
						</span>
					</div>
				
				</div>
				
				<div class="sidebar-item" data-url="pages/portfolio/overview.php">
					
					<div class="icon-place">
						<span class="icon">
							<i class="ti-briefcase"></i>
						</span>
					</div>
				
					<div class="text-place">
						<span class="limit-text" data-count="16">Обзор</span>
					</div>
				
				</div>
				
				<div class="sidebar-item" data-url="pages/portfolio/statistic.php">
					
					<div class="icon-place">
						<span class="icon">
							<i class="ti-stats-up"></i>
						</span>
					</div>
				
					<div class="text-place">
						<span class="limit-text" data-count="16">Статистика</span>
					</div>
				
				</div>

			</div>

			<div class="sidebar-hr"></div>

			<div class="sidebar-content">

				<div class="sidebar-title">
					
					<div class="text-place">
						<span class="limit-text" data-count="20">Блог</span>
					</div>
				
					<div class="icon-place">
						<span class="icon">
							<i class="icon-question icons"></i>
						</span>
					</div>
				
				</div>
				
				<div class="sidebar-item" data-url="pages/blog/all-entries.php">
					
					<div class="icon-place">
						<span class="icon">
							<i class="ti-menu-alt"></i>
						</span>
					</div>
				
					<div class="text-place">
						<span class="limit-text" data-count="16">Все записи</span>
					</div>
				
				</div>
				
				<div class="sidebar-item" data-url="pages/blog/new-entry.php">
					
					<div class="icon-place">
						<span class="icon">
							<i class="ti-light-bulb"></i>
						</span>
					</div>
				
					<div class="text-place">
						<span class="limit-text" data-count="16">Публикация</span>
					</div>
				
				</div>

			</div>

			<div class="sidebar-hr"></div>

			<div class="sidebar-content">

				<div class="sidebar-title">
					
					<div class="text-place">
						<span class="limit-text" data-count="20">Талбица(ы)</span>
					</div>
				
					<div class="icon-place">
						<span class="icon">
							<i class="icon-question icons"></i>
						</span>
					</div>
				
				</div>
				
				<div class="sidebar-item" data-url="pages/tables/view-table.php">
					
					<div class="icon-place">
						<span class="icon">
							<i class="ti-view-grid"></i>
						</span>
					</div>
				
					<div class="text-place">
						<span class="limit-text" data-count="16">Все таблицы</span>
					</div>
				
				</div>
				
				<div class="sidebar-item" data-url="pages/tables/create-table.php">
					
					<div class="icon-place">
						<span class="icon">
							<i class="ti-wand"></i>
						</span>
					</div>
				
					<div class="text-place">
						<span class="limit-text" data-count="16">Создание</span>
					</div>
				
				</div>
				
				<div class="sidebar-item" data-url="pages/tables/lock-table.php">
					
					<div class="icon-place">
						<span class="icon">
							<i class="ti-lock"></i>
						</span>
					</div>
				
					<div class="text-place">
						<span class="limit-text" data-count="16">Другие</span>
					</div>
				
				</div>

			</div>

			<div class="sidebar-hr"></div>

			<div class="sidebar-content">
				
				<div class="sidebar-title">
					
					<div class="text-place">
						<span class="limit-text" data-count="20">Общение</span>
					</div>
				
					<div class="icon-place">
						<span class="icon">
							<i class="icon-question icons"></i>
						</span>
					</div>
				
				</div>

				<div id="open-chat" class="sidebar-item open-online">
					
					<div class="icon-place">
						<span class="icon">
							<i class="ti-comments"></i>
						</span>
					</div>
				
					<div class="text-place">
						<span class="limit-text" data-count="16">Чат</span>
					</div>
				
				</div>
				
				<div class="sidebar-item" data-url="pages/messages/new-msgs.php">
					
					<div class="icon-place">
						<span class="icon">
							<i class="ti-email"></i>
						</span>
					</div>
				
					<div class="text-place">
						<span class="limit-text" data-count="16">Новые сообщения</span>
					</div>
				
				</div>
				
				<div class="sidebar-item" data-url="pages/messages/send-msgs.php">
					
					<div class="icon-place">
						<span class="icon">
							<i class="icon-paper-plane icons"></i>
						</span>
					</div>
				
					<div class="text-place">
						<span class="limit-text" data-count="16">Отправить письмо</span>
					</div>
				
				</div>				
				
				<div class="sidebar-item last-sidebar-item" data-url="pages/messages/all-msgs.php">
					
					<div class="icon-place">
						<span class="icon">
							<i class="ti-folder"></i>
						</span>
					</div>
				
					<div class="text-place">
						<span class="limit-text" data-count="16">Все сообщения</span>
					</div>
				
				</div>

			</div>

		</div>

	</section>

	<section id="page">

		<div class="page-hr"></div>
		
		<div class="page-wrapper">

			<div class="page-header">

				<div class="page-title">

					<div class="icon-place">
						<span class="icon">
							<i class="no-icon"></i>
						</span>
					</div>

					<div class="text-place">

						<span class="text">Категория</span>

						<div class="path-item">
							<span class="path-text">Действие</span>
						</div>

					</div>
					
				</div>

				<div class="page-btns">
					
					<div class="btns-content">
						
						<div class="btns-item" id="reload-page">
							<span class="icon">
								<i class="icon-reload icons"></i>
							</span>
						</div>

						<div class="btns-item" id="fullscreen-iframe">
							<span class="icon">
								<i class="icon-frame icons"></i>
							</span>
						</div>

					</div>

				</div>		

			</div>
			
			<div class="page-content">
				<iframe src="pages/tables/create-table.php" scrolling="no" frameborder="0"></iframe>
			</div>

			<div class="page-footer">
				
			</div>

		</div>

	</section>

	<section id="preview-table">

		<div id="back-preview">
			<span class="icon">
				<i class="ti-close"></i>
			</span>
		</div>
		
		<div class="pt-wrapper">

			<div class="pt-form-place">

				<div class="pt-table-place">
				
					<div class="pt-title">
						<span class="text">Таблица <sup></sup></span>
					</div>

					<div class="table-place">						
						<table>
							<tbody></tbody>
						</table>
					</div>

				</div>
				
				<div class="pt-title">
					<span class="text">Форма <sup></sup></span>
				</div>

				<div class="form-place">
					
					<div class="form-item new-checkbox for-copy">
						
						<div class="title-place">
							<span class="text"></span>
						</div>

						<div class="input-place options-place">
							
						<!-- COPY CHECKBOX -->
							<div class="check-place for-copy">
								
								<label class="checkbox">
									<input type="checkbox">
									<div class="check-item"></div>
								</label>

								<span class="limit-text text" data-count="20"></span>

							</div>

						</div>

					</div>

					<div class="form-item new-subject for-copy">
						
						<div class="title-place">
							<span class="text"></span>
						</div>
					
					<!-- COPY INPUT -->
						<div class="input-place">
							<input type="text" placeholder="Абзац ...">
						</div>

					</div>

					<div class="form-item new-list for-copy">
						
						<div class="title-place">
							<span class="text"></span>
						</div>

						<div class="input-place">
							
							<div class="select">

								<div class="default">
									
									<div class="text-place">
										<span class="limit-text" data-count="15">Варианты</span>
									</div>

									<div class="icon-place">
										<span class="icon">
											<i class="ti-angle-down"></i>
										</span>
									</div>

								</div>
									
							<!-- COPY LIST -->
								<div class="select-menu options-place">							
									<div class="option for-copy">
										<span class="text"></span>
									</div>
								</div>

							</div>

						</div>

					</div>

					<div class="form-item new-text for-copy">
						
						<div class="title-place">
							<span class="text"></span>
						</div>
					
					<!-- COPY TEXTAREA -->
						<div class="input-place">
							<textarea placeholder="Просто текст ..."></textarea>
						</div>

					</div>

					<div class="form-item new-radio for-copy">
						
						<div class="title-place">
							<span class="text"></span>
						</div>

						<div class="input-place options-place">
						
						<!-- COPY RADIO -->
							<div class="check-place for-copy">
								
								<label class="checkbox">
									<input type="radio" name="simple-form">
									<div class="check-item"></div>
								</label>

								<span class="limit-text text" data-count="20">Это текст 1</span>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</section>

	<section id="image-show">
		
		<div class="is-wrapper">
			
			<div class="is-action-items">
				
				<div class="is-actions">
				
					<div class="isa-btn" id="close-image-show">
						<span class="icon">
							<i class="ti-close"></i>
						</span>
					</div>

				</div>

			</div>

			<div class="is-image-place">
				<div class="is-image"></div>
			</div>

		</div>

	</section>

	<section id="alert-msg">
		
		<div class="alert-wrapper">

			<div class="alert-title">
				
				<div class="alert-icon">
					<span class="icon">
						<i class="icon-question icons"></i>
						<i class="icon-info icons"></i>
						<i class="icon-ban icons"></i>
					</span>
				</div>

			</div>
			
			<div class="alert-content">

				<div class="alert-place"></div>

				<div class="input-place">
					<input type="text" id="alert-input">
				</div>

			</div>

			<div class="alert-buttons"></div>

		</div>

	</section>

	<section id="preloader">
		<div class="preloader-wrapper">
			<div class="preloader-item">
				<span class="preloader-range"></span>
			</div>
		</div>
	</section>
	
</body>
</html>

<?php 

	} else {

		header('Location: pages/auth/login.php');

	}

?>
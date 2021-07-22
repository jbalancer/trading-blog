<?php

	session_start();

	if ( isset($_POST['create_table']) ) {

		$json = $_POST['new_table_data'];
		$data = new stdClass();

		$data->data_head = array();
		$data->data_body = array();

		for ($i=0; $i < count($json); $i++) {

			$json[$i] = json_decode($json[$i]);			

			if ( $json[$i]->type == 'table_name' ) {

				$data->title = $json[$i]->title;

			} else {

				array_push($data->data_head, $json[$i]);

			}

		}

		$table_id_path = '../../data/tables/table_id.txt';
		$table_id = file_get_contents($table_id_path);
		$table_id = $table_id + 1;
		file_put_contents($table_id_path, $table_id);

		$data->id = $table_id;
		$data->user_id = $_SESSION['id'];
		$data->create_date = date('H:y d.m.Y');
		$data = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

		$file_name = md5(uniqid(rand(),1000)) . '.json';
		$file_dir  = '../../data/tables/content/';
		$file_path = $file_dir . $file_name;

		$table_info = new stdClass();
		$table_info->id = $_SESSION['id'];
		$table_info->table_id = $table_id;
		$table_info->table_path = $file_path;

		file_put_contents($file_path, $data);

		$users_tables_path = '../../data/users/users_tables.json';
		$users_tables_info = file_get_contents($users_tables_path);
		$users_tables_info = json_decode($users_tables_info);
		array_push($users_tables_info, $table_info);
		$users_tables_info = json_encode($users_tables_info, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

		file_put_contents($users_tables_path, $users_tables_info);

	}	

?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<title>Создание новой таблицы</title>
	<link rel="stylesheet" href="../../assets/css/reset.css">
	<link rel="stylesheet" href="../../libs/css/icons.css">
	<link rel="stylesheet" href="../../assets/css/checkbox.css">
	<link rel="stylesheet" href="../../assets/css/select.css">
	<link rel="stylesheet" href="../../assets/aside/tables/css/create-table.css">
	<script src="../../libs/js/jquery.js"></script>
	<script defer src="../../assets/js/iframe.js"></script>
	<script defer src="../../assets/js/text-limit.js"></script>
	<script defer src="../../assets/js/select.js"></script>
	<script defer src="../../assets/js/preview-img.js"></script>
	<script defer src="../../assets/aside/tables/js/create-table.js"></script>
<?php 

	if ( isset($_POST['create_table']) && $file_path ) {

		$created_table_title = file_get_contents($file_path);
		$created_table_title = json_decode($created_table_title);
		$created_table_title = $created_table_title->title;

		echo '<script>window.top.alertMsg({
			type: "info",
			message: "Таблица \"' . $created_table_title . '\" создана!",
			buttons: [
				{
					text: "Окей",
					pressed: function ()
					{
						window.top.closeMsg();
					}
				}
			]
		})</script>';
		
	}

?>
</head>
<body>

	<section id="create-table">

		<div class="ct-wrapper">

			<div class="ct-title">

				<div class="title-first">

					<div class="icon-place">
						<span class="icon">
							<i class="ti-wand"></i>
						</span>
					</div>

					<div class="text-place">
						<span class="text">Новая таблица</span>
					</div>

				</div>

				<div class="title-last">
					<span class="text">Создайте новую таблицу с названиями столбцов и выберите тип заполнения формы при добавлении новых записей в таблицу</span>					
				</div>

			</div>

			<div class="ct-content">
				
				<div class="ct-sub">
					
					<div class="ct-des for-clone">
						
						<div class="ct-input">
					
							<div class="ct-item">
								<input class="title-input" type="text" placeholder="Заголовок столбца">
							</div>

							<div class="ct-item">
								
								<div data-val="new-subject" class="select">

									<div class="default">
										
										<div class="text-place">
											<span class="limit-text" data-count="15">Тип</span>
										</div>

										<div class="icon-place">
											<span class="icon">
												<i class="ti-angle-down"></i>
											</span>
										</div>

									</div>
										
									<div class="select-menu">
										
										<div class="option">
											<span data-val="new-subject" class="text">Обычное поле</span>
										</div>

										<div class="option">
											<span data-val="new-text" class="text">Текст</span>
										</div>

										<div class="option active-select">
											<span data-val="new-list" class="text">Список</span>
										</div>

										<div class="option active-select">
											<span data-val="new-radio" class="text">Выбор</span>
										</div>

										<div class="option active-select">
											<span data-val="new-checkbox" class="text">Множественный выбор</span>
										</div>

									</div>

								</div>

							</div>

							<div class="ct-item">
								<div class="icon-place del-row">
									<span class="icon">
										<i class="ti-close"></i>
									</span>
								</div>
							</div>

						</div>

						<div class="ct-data">

							<div class="ctd-input">
								
								<div class="input-place">
									<input type="text" placeholder="Значение">
								</div>

								<div class="btn-place">
									<span class="icon">
										<i class="ti-plus"></i>
									</span>
								</div>

							</div>
							
							<div class="ctd-select">

								<div class="ctd-option for-clone">

									<div class="ctdo-content">
										
										<div class="text-place">
											<span class="text limit-text" data-count="23"></span>
										</div>
										
										<div class="icon-place del-option">
											<span class="icon">
												<i class="ti-close"></i>
											</span>
										</div>

									</div>

								</div>

							</div>					

						</div>

					</div>

					<div class="ct-des table-data-place">
						
						<div class="ct-input">

							<div class="ct-item">							
								<span class="text">Придумайте название для вашей таблицы</span>
							</div>

							<div class="ct-item">
								<input class="title-input" type="text" placeholder="Название таблицы">
								<div data-val="table_name" class="select"></div>
							</div>

						</div>

					</div>

					<div class="ct-des table-data-place">
						
						<div class="ct-input">
					
							<div class="ct-item">
								<input class="title-input" type="text" placeholder="Заголовок столбца">
							</div>

							<div class="ct-item">
								
								<div data-val="new-subject" class="select">

									<div class="default">
										
										<div class="text-place">
											<span class="limit-text" data-count="15">Тип</span>
										</div>

										<div class="icon-place">
											<span class="icon">
												<i class="ti-angle-down"></i>
											</span>
										</div>

									</div>
										
									<div class="select-menu">
										
										<div class="option">
											<span data-val="new-subject" class="text">Обычное поле</span>
										</div>

										<div class="option">
											<span data-val="new-text" class="text">Текст</span>
										</div>

										<div class="option active-select">
											<span data-val="new-list" class="text">Список</span>
										</div>

										<div class="option active-select">
											<span data-val="new-radio" class="text">Выбор</span>
										</div>

										<div class="option active-select">
											<span data-val="new-checkbox" class="text">Множественный выбор</span>
										</div>

									</div>

								</div>

							</div>

							<div class="ct-item">
								<div class="icon-place del-row">
									<span class="icon">
										<i class="ti-close"></i>
									</span>
								</div>
							</div>

						</div>

						<div class="ct-data">

							<div class="ctd-input">
								
								<div class="input-place">
									<input type="text" placeholder="Значение">
								</div>

								<div class="btn-place">
									<span class="icon">
										<i class="ti-plus"></i>
									</span>
								</div>

							</div>
							
							<div class="ctd-select">

								<div class="ctd-option for-clone">

									<div class="ctdo-content">
										
										<div class="text-place">
											<span class="text limit-text" data-count="23"></span>
										</div>
										
										<div class="icon-place del-option">
											<span class="icon">
												<i class="ti-close"></i>
											</span>
										</div>

									</div>

								</div>

							</div>				

						</div>

					</div>

				</div>

				<div class="ct-btns">

					<div class="ct-btn ready-data" id="open-preview">
						<span class="text">Предпросмотр</span>
					</div>

					<div class="ct-btn" id="add-row">
						<span class="text">Добавить столбец</span>
					</div>

					<form id="form-create-table" action="create-table.php" method="POST">
						<input class="ct-btn ready-data" type="submit" value="Создать" name="create_table">
					</form>

				</div>

			</div>

		</div>

	</section>
	
</body>
</html>
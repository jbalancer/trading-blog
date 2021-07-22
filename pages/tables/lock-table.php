<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<title>Шифрование доступных таблиц</title>
	<link rel="stylesheet" href="../../assets/css/reset.css">
	<link rel="stylesheet" href="../../libs/css/icons.css">
	<link rel="stylesheet" href="../../assets/css/select.css">
	<link rel="stylesheet" href="../../assets/css/checkbox.css">
	<link rel="stylesheet" href="../../assets/aside/tables/css/lock-table.css">
	<script src="../../libs/js/jquery.js"></script>
	<script defer src="../../assets/js/iframe.js"></script>
	<script defer src="../../assets/js/text-limit.js"></script>
	<script defer src="../../assets/js/select.js"></script>
	<script defer src="../../assets/aside/tables/js/lock-table.js"></script>
</head>
<body>

	<section id="lock-table">

		<div class="lt-wrapper">

			<div class="lt-item">

				<div class="lt-title">
					<span class="limit-text" data-count="19">Название таблицы 1</span>
				</div>

				<div class="lt-date">
					<span class="limit-text" data-count="17">14:30 | 16.06.19</span>
				</div>

			</div>

			<div class="lt-item">

				<div class="lt-title">
					<span class="limit-text" data-count="19">Название таблицы 2</span>
				</div>

				<div class="lt-date">
					<span class="limit-text" data-count="17">14:30 | 16.06.19</span>
				</div>

			</div>

			<div class="lt-item">

				<div class="lt-title">
					<span class="limit-text" data-count="19">Название таблицы 3</span>
				</div>

				<div class="lt-date">
					<span class="limit-text" data-count="17">14:30 | 16.06.19</span>
				</div>

			</div>

		</div>

	</section>

	<section id="view-table">
		
		<div class="vt-wrapper">
			
			<div class="vt-title">

				<div class="vtt-item">

					<div class="icon-place">
						<span class="icon">
							<i class="icon-eye icons"></i>
						</span>
					</div>
					
					<div class="text-place">

						<div class="title-place">

							<span class="text title-action">Просмотр таблицы:</span>

							<span class="text">"Прогнозы"</span>

						</div>

						<div class="vt-date">
				
							<span class="text">Дата создания:</span>

							<span class="text">"15:31 | 07.06.19"</span>

						</div>

					</div>					

				</div>

				<div class="vtt-item">

					<div class="vt-open-action">
						<span class="icon">
							<i class="icon-options icons"></i>
						</span>
					</div>

					<div class="vt-action">
						
						<div class="vta for-rep" data-title="Добавить запись в таблицу:" id="new-entry">
							<span class="icon">
								<i class="ti-plus"></i>
							</span>
						</div>

						<div class="vta for-rep active" data-title="Просмотр таблицы:" id="view-table-go">
							<span class="icon">
								<i class="icon-eye icons"></i>
							</span>
						</div>

						<div class="vta for-rep" data-title="Редактировать таблицу:" id="edit-table-go">
							<span class="icon">
								<i class="icon-note icons"></i>
							</span>
						</div>

						<div class="vta" data-title="Удаление таблицы:" id="remove-table-go">
							<span class="icon">
								<i class="icon-trash icons"></i>
							</span>
						</div>

						<div class="vta" data-title="Разблокировать таблицу:" id="unlock-table-go">
							<span class="icon">
								<i class="icon-lock-open icons"></i>
							</span>
						</div>

					</div>

				</div>

			</div>			

			<div class="vt-content">
				
				<table>
					<tbody>
						<tr>
							<th>
								<div class="vtt-sub">lorem001</div>
							</th>
							<th>
								<div class="vtt-sub">lorem002</div>
							</th>
							<th>
								<div class="vtt-sub">lorem003</div>
							</th>
							<th>
								<div class="vtt-sub">lorem004</div>
							</th>
							<th>
								<div class="vtt-sub">lorem005</div>
							</th>
						</tr>
						<tr>
							<td>
								<div class="vtt-sub">lorem001</div>
							</td>
							<td>
								<div class="vtt-sub">lorem002</div>
							</td>
							<td>
								<div class="vtt-sub">lorem003</div>
							</td>
							<td>
								<div class="vtt-sub">lorem004</div>
							</td>
							<td>
								<div class="vtt-sub">lorem005</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="vtt-sub">lorem001</div>
							</td>
							<td>
								<div class="vtt-sub">lorem002</div>
							</td>
							<td>
								<div class="vtt-sub">lorem003</div>
							</td>
							<td>
								<div class="vtt-sub">lorem004</div>
							</td>
							<td>
								<div class="vtt-sub">lorem005</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="vtt-sub">lorem001</div>
							</td>
							<td>
								<div class="vtt-sub">lorem002</div>
							</td>
							<td>
								<div class="vtt-sub">lorem003</div>
							</td>
							<td>
								<div class="vtt-sub">lorem004</div>
							</td>
							<td>
								<div class="vtt-sub">lorem005</div>
							</td>
						</tr>
					</tbody>
				</table>

				<div class="form-add">
					
					<div class="form-item">
						
						<div class="text-place">
							<span class="text">Обычное поле</span>
						</div>

						<div class="input-place">
							<input type="text" placeholder="Ваш текст ...">
						</div>

					</div>

					<div class="form-item">
						
						<div class="text-place">
							<span class="text">Множественный выбор</span>
						</div>

						<div class="input-place">
							
							<div class="check-place">

								<label class="checkbox">
									<input type="checkbox">
									<div class="check-item"></div>
								</label>

								<span class="limit-text" data-count="20">Выбор 1</span>

							</div>

							<div class="check-place">

								<label class="checkbox">
									<input type="checkbox">
									<div class="check-item"></div>
								</label>

								<span class="limit-text" data-count="20">Выбор 2</span>
								
							</div>

						</div>

					</div>

					<div class="form-item">
						
						<div class="text-place">
							<span class="text">Текстовое поле</span>
						</div>

						<div class="input-place">
							<textarea placeholder="Ваш текст ..."></textarea>
						</div>

					</div>

					<div class="form-item">
						
						<div class="text-place">
							<span class="text">Одиночный выбор</span>
						</div>

						<div class="input-place">
							
							<div class="check-place">

								<label class="checkbox">
									<input type="radio" name="check-radio">
									<div class="check-item"></div>
								</label>

								<span class="limit-text" data-count="20">Выбор 1</span>

							</div>

							<div class="check-place">

								<label class="checkbox">
									<input type="radio" name="check-radio">
									<div class="check-item"></div>
								</label>

								<span class="limit-text" data-count="20">Выбор 2</span>
								
							</div>

						</div>

					</div>

					<div class="form-item">
						
						<div class="text-place">
							<span class="text">Список</span>
						</div>

						<div class="input-place">
							
							<div class="select">

								<div class="default">
									
									<div class="text-place">
										<span class="limit-text" data-count="15">Список</span>
									</div>

									<div class="icon-place">
										<span class="icon">
											<i class="ti-angle-down"></i>
										</span>
									</div>

								</div>
									
								<div class="select-menu">
									
									<div class="option">
										<span class="text">Пункт 1</span>
									</div>

									<div class="option">
										<span class="text">Пункт 2</span>
									</div>

									<div class="option">
										<span class="text">Пункт 3</span>
									</div>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

			<div class="vt-btns">

				<div class="vt-btn-item">
					<span class="text">Отмена</span>
				</div>
				
				<div class="vt-btn-item">
					<span class="text">Готово</span>
				</div>

			</div>

		</div>

	</section>
	
</body>
</html>
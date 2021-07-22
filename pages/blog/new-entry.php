<?php

	session_start();

	$current_date = date('d.m.Y');

	if ( isset($_POST['publication_post']) ) {

		$blog_content = $_POST['blog_content'];
		$blog_content = json_decode($blog_content);

		$title_html = '<div class="text-place"><h1>' . $blog_content->title . '</h1></div>';
		$date_html = '<div class="date-place"><time>' . $current_date . '</time></div>';

		$left_html = '<div class="pv-title">' . $title_html . $date_html . '</div>';

		$blog_html_tags = '<h3><p><ul><li><img>';
		$blog_content->content = strip_tags($blog_content->content, $blog_html_tags);

		$right_html = '<div class="pv-content">' . $blog_content->content . '</div>';

		$blog_html = '<article id="post-view" class="active"><div class="pv-wrapper">' . $left_html . $right_html . '</div></article>';

		$document_html = '<!DOCTYPE html>
		<html lang="ru">
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
			<title>' . $blog_content->title . '</title>
			<link rel="stylesheet" href="../../../assets/css/reset.css">
			<link rel="stylesheet" href="../../../assets/aside/blog/css/post.css">
		</head>
		<body>' . $blog_html . '</body></html>';

		$mini_title = mb_strimwidth($blog_content->title, 0, 19, '...');
		$mini_text = strip_tags($blog_content->content);
		$mini_text = mb_strimwidth($mini_text, 0, 57, '...');

		$blog_id_path = '../../data/blog/blog_id.txt';
		$blog_id = file_get_contents($blog_id_path);
		$blog_id = $blog_id + 1;
		file_put_contents($blog_id_path, $blog_id);

		$file_name = md5(uniqid(rand(),1000)) . '.html';
		$file_dir  = '../../data/blog/content/';
		$file_path = $file_dir . $file_name;

		file_put_contents($file_path, $document_html);

		$data = new stdClass();
		$data->id = $blog_id;
		$data->user_id = $_SESSION['id'];
		$data->create_date = date('H:y d.m.Y');
		$data->title = $mini_title;
		$data->text = $mini_text;
		$data->image = $blog_content->image ? $blog_content->image : 'logo.png';

		$users_blog_path = '../../data/users/users_blogs.json';
		$users_blog_info = file_get_contents($users_blog_path);
		$users_blog_info = json_decode($users_blog_info);
		array_push($users_blog_info, $data);
		$users_blog_info = json_encode($users_blog_info, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

		file_put_contents($users_blog_path, $users_blog_info);

	}

	function dump($value) {
		
		echo '<pre>';

		print_r($value);

		echo '</pre>';

	}

?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<title>Создание нового поста</title>
	<link rel="stylesheet" href="../../assets/css/reset.css">
	<link rel="stylesheet" href="../../libs/css/icons.css">
	<link rel="stylesheet" href="../../assets/css/select.css">
	<link rel="stylesheet" href="../../assets/aside/blog/css/post.css">
	<link rel="stylesheet" href="../../assets/aside/blog/css/new-entry.css">
	<script src="../../libs/js/jquery.js"></script>
	<script defer src="../../assets/js/iframe.js"></script>
	<script defer src="../../assets/js/clear-input.js"></script>
	<script defer src="../../assets/js/text-limit.js"></script>
	<script defer src="../../assets/js/select.js"></script>
	<script defer src="../../assets/aside/blog/js/new-entry.js"></script>
</head>
<body>

	<section id="post-view" class="active">

		<div class="pv-wrapper">
			
			<div class="pv-title">
				
				<div class="text-place">
					<input type="text" id="post-title" placeholder="Название статьи">
				</div>

				<div class="date-place">
					<time><? echo $current_date ?></time>
				</div>

			</div>

			<div class="pv-content">

				<div class="for-copy">

					<div class="head-sub edit-sub">
						<h3 class="head">Подзаголовок</h3>						
					</div>

					<div class="text-sub edit-sub">
						<p class="text">Абзац</p>
					</div>
					
					<div class="note-sub edit-sub">						
						<p class="note">Примечание</p>
					</div>

					<div class="image-sub edit-sub">
						<p class="image">
							<img alt="Картинка">
						</p>
					</div>

					<div class="list-sub edit-sub">						
						<ul class="list">
							<li>Список</li>
						</ul>
					</div>

				</div>

				<div id="new-edit-items"></div>

			</div>

		</div>

	</section>

	<section id="create-post">
		
		<div class="cp-wrapper">

			<div class="cp-content">
				
				<div class="cp-actions">
					
					<div class="cpa-left">
						
						<div class="select">

							<div class="default">
								
								<div class="text-place">
									<span class="limit-text" data-count="15">Тип текста</span>
								</div>

								<div class="icon-place" id="add-text">
									<span class="icon">
										<i class="ti-angle-down"></i>
									</span>
								</div>

							</div>
								
							<div class="select-menu">
								
								<div class="option" data-type="head-sub" data-val="Подзаголовок">
									<span class="text">Подзаголовок</span>
								</div>

								<div class="option" data-type="text-sub" data-val="Абзац">
									<span class="text">Абзац</span>
								</div>

								<div class="option" data-type="image-sub" data-val="Ссылка на картинку">
									<span class="text">Картинку</span>
								</div>

								<div class="option" data-type="list-sub" data-val="Элементы списка с новой строки">
									<span class="text">Список</span>
								</div>

								<div class="option" data-type="note-sub" data-val="Примечание">
									<span class="text">Примечание</span>
								</div>

							</div>

						</div>

					</div>

					<div class="cpa-right">
						
						<div class="cpa-sub">
							
							<div class="cp-action-item clear-input" data-place="#textarea-for-clear">
								<span class="icon">
									<i class="ti-close"></i>
								</span>
							</div>

							<div class="cp-action-item" id="create-item">
								<span class="icon">
									<i class="ti-plus"></i>
								</span>
							</div>

							<div class="cp-action-item off" id="confirm-item">
								<span class="icon">
									<i class="ti-check"></i>
								</span>
							</div>

						</div>

					</div>

				</div>

				<div class="cp-input">
					<textarea id="textarea-for-clear" placeholder="Текст ..."></textarea>
				</div>
	
			</div>

			<div class="cp-btns">
				
				<div class="cpb br" id="cancel-entry">
					<span class="text">Отмена</span>
				</div>

				<form method="POST">
					<input class="cpb bg" type="submit" value="Опубликовать" name="publication_post">
				</form>

			</div>

		</div>

	</section>

</body>
</html>
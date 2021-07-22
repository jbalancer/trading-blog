<?php 

	session_start();

	$save_path = '../../data/users/users.json';
	$username = $_SESSION['username'];
	$userpswd = $_SESSION['userpswd'];

	$_SESSION['errors'] = array();
	$_SESSION['authtype'] = 'registry';
	$_SESSION['confirm'] = 'ok';

	$json = file_get_contents($save_path);
	$data = json_decode($json);

	$authtype = 'registry';

	for ($i=0; $i < count($data); $i++) { 
			
		if ( $data[$i]->username == $username && password_verify($userpswd, $data[$i]->password) ) {
			
			$authtype = 'login';

			$_SESSION['id'] = $data[$i]->id;

		}

	}

	if ( $authtype == 'registry' ) {

		$finded = new stdClass();
		$finded->id = count($data) + 1;
		$finded->username = $username;
		$finded->password = password_hash($userpswd, PASSWORD_DEFAULT);
		$finded->reg_date = date('H:y d.m.Y');

		$errors = array();

		for ($i=0; $i < count($data); $i++) { 
			
			if ( $data[$i]->username == $username ) {
				
				$finded->username = '';

			}

			if ( password_verify($userpswd, $data[$i]->password) ) {

				$finded->password = '';
				
			}

		}

		if ( $finded->username == '' ) {

			$errors[] = 'Юзер с таким ником уже существует!';
			
		}

		if ( $finded->password == '' ) {

			$errors[] = 'Пожалуйста, придумайте более сложный пароль!';

		}		

		if ( empty($errors) ) {

			array_push($data, $finded);

			$data = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

			file_put_contents($save_path, $data);

			$_SESSION['id'] = $finded->id;
			
		} else {

			unset($_SESSION['confirm']);

			$_SESSION['errors'] = $errors;

		}

		header('Location: login.php');
		
	} elseif ( $authtype == 'login' ) {

		$_SESSION['authtype'] = 'login';

		header('Location: login.php');

	}

?>
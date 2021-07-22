<?php 

	session_start();
	
	if ( isset($_POST['signout']) ) {

	    session_unset();
	    session_destroy();
	    session_write_close();
	    setcookie(session_name(),'',0,'/');

	    header('Location: login.php');
		
	}

	if ( isset($_POST['confirm']) ) {

		$username = $_POST['username'];
		$userpswd = $_POST['userpswd'];

		if ( validate($username) && validate($userpswd) ) {

			$_SESSION['username'] = trim($username);
			$_SESSION['userpswd'] = trim($userpswd);

			header('Location: signup.php');
			
		}
		
	}

	if ( !empty($_SESSION['errors']) ) {

		for ($i=0; $i < count($_SESSION['errors']); $i++) {

			echo '<p style="color: red"><strong>' . $_SESSION['errors'][$i] . '</strong></p>';
			
		}

	}

	if ( $_SESSION['confirm'] == 'ok' ) {

		header('Location: ../../index.php');

	}

	function validate($values) {

		if ( gettype($values) == 'array' ) {

			$errors = array();

			for ($i=0; $i < count($values); $i++) {

				$values[$i] = trim($values[$i]);

				if ( $values[$i] == '' ) {

					array_push($errors, $i);

				}

			}

			if ( empty($errors) && !empty($values) ) {

				return $values;

			} else {

				return false;

			}
			
		} else {

			$values = trim($values);

			if ( $values != '' ) {

				return $values;		

			} else {

				return false;

			}

		}

	}		

?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<title>Авторизация на TradersWay</title>
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../../assets/css/reset.css">
	<link rel="stylesheet" href="../../assets/aside/auth/css/login.css">
</head>
<body>

	<h1 class="logotype">TradersWay</h1>
	
	<form method="POST" action="login.php" class="user-auth">

		<div class="ua-head">
			<h1>Авторизация</h1>
		</div>

		<div class="ua-content">

			<div class="input-place">
				<input type="text" placeholder="Логин" name="username">
			</div>

			<div class="input-place">
				<input type="password" placeholder="Пароль" name="userpswd">
			</div>

		</div>

		<div class="input-btns">
			<input type="submit" value="Забыл(а) пароль" name="forgot">
			<input type="submit" value="Авторизоваться" name="confirm">			
		</div>

	</form>

</body>
</html>
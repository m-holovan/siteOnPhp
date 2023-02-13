<?php
	$login = getHttpVar('log',"",'string');
	$password = getHttpVar('pass',"",'string');
	$repeatPass = getHttpVar('passAgain',"",'string');
	$aboutYou = getHttpVar('about',"",'string');

	if(isset($_POST['action']) && ($_POST['action'] == 'autorizForm')){
		
		$errorMessage = "";

		$pattern = '/\s/';
		$pattern2 = '/^.{1,3}$/';
		if(preg_match($pattern, $login) == 1){
			$errorMessage = "Login must be without spaces!";
		}
		else if(empty($login) || empty($password) || empty($repeatPass) || empty($aboutYou)){
			$errorMessage = "Some fields are empty!";
		}
		else if($password!=$repeatPass){
			$errorMessage = "Passwords are not the same!";
		}
		else if(preg_match($pattern2, $login) || preg_match($pattern2, $password) == 1){
			$errorMessage = "Login and password must be more than 4 characters!";
		}
		else{
			$errorMessage = "Evrything okay!";
		}

		echo"<script>alert('$errorMessage');</script>";
	}
?>

<link rel="stylesheet" type="text/css" href="css/autoriz.css">
<main>
	<div id="authorization" style="border-color:#fff; position:absolute;">
		<div id="members"></div>
		<p id="textMembers">members</p>
		<div id="strelka">
			<img src="images/strelka.png">
		</div>
		<div id="loginText">
			Enter your Login & Password:
		</div>

		<form name="autoriz" action="" method="post">
			<input type="hidden" name="action" value="autorizForm">
			<div id="inputFields">
				<div id="loginField">Login:<input type="text" id="log" name="log"></div>
				<div id="passwordField">Password:<input type="password" id="pass" name="pass"></div>
				<div id="passwordAgain">Repeat pass:<input type="password" id="passAgain" name="passAgain"></div>
				<div id="AboutInformation">About you:<textarea id="about" name="about"></textarea></div>
				<div>
					<button id="knopka">Enter</button>
				</div>
			</div>
		</form>
		<div>
			<a href="" id="forgotPassword">Forgot Your Password?</a>
		</div>
	</div>
</main>
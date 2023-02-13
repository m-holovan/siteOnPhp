<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title><?=(isset($P_TITLE) ? $P_TITLE : "MainPage" );?></title>
</head>
<body>
<header>
	<div id="head">
		<div id="eyeer">
			<img src="images/eye.png" id="logoImg" alt style ="margin-top:0px;"onload="runAnim('logoImg')">
			<script src="scripts/animation.js"></script>
		</div>
		<div id="text">
			...just use
		</div>
		<div id="navigation">
			navigation
		</div>
		<div id="plitka">
			<img src="images/plitka.png">
		</div>
		<div id="menu">
			<a href="index.php?page=hosting">HOSTING</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="index.php?page=autoriz">SERVICES</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="index.php?page=support">SUPPORT</a> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="">CONTACT</a>
		</div>
	</div>
</header>
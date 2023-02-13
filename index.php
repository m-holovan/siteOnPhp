<?php
	include "inc/init-inc.php";
	
	$page = getHttpVar("page", "index");
	$page_view = "";

	switch($page)
	{
		case "index":
			include "pages/index-inc.php";
			break;
		case "support":
			include "pages/support-inc.php";
			break;
		case "autoriz":
			include "pages/autoriz-inc.php";
			break;
		case "hosting":
			include "pages/hosting-inc.php";
			break;
		default:
			header("HTTP/1.1 404 NOT FOUND");
			exit();
	}

	include "inc/header-inc.php";

	switch($page_view)
	{
		case "index":
			include "views/index.php";
			break;
		case "support":
			include "views/support.php";
			break;
		case "hosting":
			include "views/hosting.php";
			break;
		case "autoriz":
			include "views/autoriz.php";
			break;
	}

	include "inc/footer-inc.php";

?>
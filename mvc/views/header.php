<!doctype html>
<html>
<head>
	<title>Test</title>
	<link rel="stylesheet" href="<?php echo URL; ?>public/css/default2.css" />
	<script type="text/javascript" src="<?php echo URL; ?>public/js/custom.js"></script>
	
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="check.js"></script>

</head>
<body>

<?php Session::init(); /*print_r($_SESSION);*/?>	

<div class="container">		
	<div class="topnav" id="myTopnav">
	<?php if (Session::get('loggedIn') == false):?>
		<a href="http://localhost/mvc/index">HOME</a>
		<a href="http://localhost/mvc/help">Pomoc</a>
		<a href="http://localhost/mvc/register">Rejestracja</a>
		<a href="http://localhost/mvc/login">Logowanie</a>	
	<?php endif; ?>	

	<?php if (Session::get('loggedIn') == true):?>
		<a href="http://localhost/mvc/index">HOME</a>
		<a href="http://localhost/mvc/service">Usługi</a>
		<a href="http://localhost/mvc/readyreservation">Gotowe Rezerwacje</a>	

		<?php if (Session::get('ID_user_type') == 2):?>
			<a href="http://localhost/mvc/user">Użytkownicy</a>
		<?php endif; ?>

		<a href="http://localhost/mvc/logout/logout">Wyloguj</a>
	<?php endif; ?>

	<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
	</div>

	<div class="middle">
	
	
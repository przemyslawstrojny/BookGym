<head>
		<link rel="stylesheet" href="<?php echo URL; ?>views/login/css/style.css" />
</head>



<div class="login-box">
	<div class="imgcontainer">
		<img src="./public/images/img_avatar2.png" alt="Avatar" class="avatar">
	</div>
</div>

<div class="container">

<form action="login/run" method="post">
	
	<label><b>Nazwa użytkownika</b></label><input type="text" placeholder="Wprowadź nazwę użytkownika" name="login" required/><br />
	<label><b>Hasło</b></label><input type="password" placeholder="Wprowdź hasło" name="password" required/><br />
	<button type="submit">Login</button>
	<input type="checkbox" checked="checked"> Zapamiętaj mnie
</form>

</div>
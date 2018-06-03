<head>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/style.css" />
</head>

<h1>Edytujesz dane użytkownika: <?php echo $this->use['login'];?></h1>


 <form method="post" action="<?php echo URL;?>user/editSave/<?php echo $this->use['IDuser']; ?>">
	<label>Login</label><input type="text" name="login" value="<?php echo $this->use['login']; ?>" /><br />
	<label>Password</label><input type="text" name="password" value="<?php echo $this->use['password']; ?>" /><br />
	<label>Role</label>
		<select name="ID_user_type" >
		<!-- //co te ify mialy robic??? -->
			<option value="1">Użytkownik</option>
			<option value="2" >Firma</option>
			<option value="3" >Administrator</option>

    
		</select><br />

	<label>Email</label><input type="text" name="email" value="<?php echo $this->use['email']; ?>"/><br />
	<label>Imię</label><input type="text" name="name" value="<?php echo $this->use['name']; ?>"/><br />
	<label>Nazwisko</label><input type="text" name="surname" value="<?php echo $this->use['surname']; ?>"/><br />
	<label>Adres</label><input type="text" name="address" value="<?php echo $this->use['address']; ?>"/><br />
	<label>Miasto</label><input type="text" name="city" value="<?php echo $this->use['city']; ?>"/><br />
	<label>Kod pocztowy</label><input type="text" name="postalcode" value="<?php echo $this->use['postalcode']; ?>"/><br />
	<label>Kraj</label><input type="text" name="country" value="<?php echo $this->use['country']; ?>"/><br />
	<label>&nbsp;</label><input type="submit" />
</form> 












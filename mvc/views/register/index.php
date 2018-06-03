<head>
	<link rel="stylesheet" href="<?php echo URL; ?>views/register/css/style.css" />
</head>


<h1>Rejestracja</h1>
<form action="register/run" method="post" name="form">
    <label>Login</label>
        <div>
            <input type="text" name="login" id="name" />
            <span id="result"></span>
        </div>
	<label>Hasło</label><input type="password" name="password" /><br />
    <label>Email</label><input type="text" name="email" /><br />

	<label>Imię</label><input type="text" name="adres" /><br />
	<label>Nazwisko</label><input type="text" name="adres" /><br />
	<label>Adres</label><input type="text" name="adres" /><br />
	<label>Miasto</label><input type="text" name="adres" /><br />
	<label>Kod pocztowy</label><input type="text" name="adres" /><br />
	<label>Kraj</label><input type="text" name="adres" /><br />

	<input type="checkbox" checked="checked"> Akceptuje warunki!
	<button type="submit">Zarejestruj się!</button>

</form>










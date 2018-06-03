<?php

class Register_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function run()
	{

		$login = $_POST['login'];
		$password  = $_POST['password'];
		$email = $_POST['email'];

		$query = $this->database->query("SELECT login FROM users WHERE login= '$login' ");
		$user = mysqli_fetch_array($query);
	
		if ($user['login'] != $login){	
			$query = $this->database->query("INSERT INTO `users` (`IDuser`, `login`, `password`, `email`, `name`, `surname`, `address`, `ID_user_type`, `city`, `postalcode`, `country`) VALUES (NULL, '".$login."', '".$password."', '".$email."', 'Jacek', 'Kasinski', 'Jacusiek 55', '1', 'Krakow', '45-654', 'Polska');");
			header('location: ../login');	
		} else {
			header('location: ../register');
		}

	
		
	}
	
}
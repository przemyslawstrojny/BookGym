<?php

class Login_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function run()
	{
		$login = $_POST['login'];
		$query = $this->database->query("SELECT IDuser, login, password, ID_user_type FROM users WHERE login= '$login' ");

		$user = mysqli_fetch_array($query);


		if ($user['login'] == $_POST['login'] && $user['password'] == $_POST['password']){	
			Session::init();
			Session::set('ID_user_type', $user['ID_user_type']);
			Session::set('IDuser', $user['IDuser']);
			Session::set('loggedIn', true);
			header('location: ../index');
		} else {
			header('location: ../login');	
		}

		
	}


	
}
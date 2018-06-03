<?php

class User_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function userList()
	{
		$query = $this->database->query("SELECT * FROM users");
		return $query;				
		
	}

	public function create($data)
	{

		$query = $this->database->query("INSERT INTO `users` (`IDuser`, `login`, `password`, `email`, `name`, `surname`, `address`, `ID_user_type`, `city`, `postalcode`, `country`) VALUES (NULL, '".$data['login']."', '".$data['password']."', '".$data['email']."', '".$data['name']."', '".$data['surname']."', '".$data['address']."', '".$data['ID_user_type']."', '".$data['city']."', '".$data['postalcode']."', '".$data['country']."');");
		return $query;
	}

	public function delete($id){
		$query = $this->database->query("DELETE FROM users WHERE IDuser ='".$id."';");
		return $query;
		
	}
/////////////////////
	public function userSingleList($id)
	{
		$query = $this->database->query("SELECT IDuser, login, ID_user_type, password, name, email, surname, address, city, postalcode, country FROM users WHERE IDuser =".$id.";");
		$user = mysqli_fetch_array($query);
		return $user;
	}
	
	public function editSave($data)
	{
		$query = $this->database->query("UPDATE `users` SET `ID_user_type` = '".$data['ID_user_type']."', `login` = '".$data['login']."', `password` = '".$data['password']."', `email` = '".$data['email']."', `name` = '".$data['name']."', `surname` = '".$data['surname']."', `address` = '".$data['address']."', `city` = '".$data['city']."', `postalcode` = '".$data['postalcode']."', `country` = '".$data['country']."' WHERE `users`.`IDuser` = ".$data['IDuser'].";");
		return $query;
	}
////////////////////
}
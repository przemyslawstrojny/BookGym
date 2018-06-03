<?php

class User extends Controller {

	function __construct() {
		parent::__construct();
		Session::init();
		$logged = Session::get('loggedIn');
		$role = Session::get('id_user_type');


		if ($logged == false) {
			Session::destroy();
			header('location: ../login');
			exit;
		}
	
		
	}
	
	function index() 
	{	
		$this->view->userList = $this->model->userList();
		$this->view->render('user/index');
	}
	
	function create(){

		$data = array();
		$data['login'] = $_POST['login'];
		$data['password'] = $_POST['password'];
		$data['ID_user_type'] = $_POST['ID_user_type'];
		$data['name'] = $_POST['name'];
		$data['email'] = $_POST['email'];
		$data['surname'] = $_POST['surname'];
		$data['address'] = $_POST['address'];
		$data['city'] = $_POST['city'];
		$data['postalcode'] = $_POST['postalcode'];
		$data['country'] = $_POST['country'];

		// @TODO: Do your error checking!
		
		$this->model->create($data);

		//refresh
		header('location: ' . URL . 'user');
	}
///////////////////////
	public function edit($id) 
	{
		$this->view->use = $this->model->userSingleList($id);
		$this->view->render('user/edit');
		// $this->view->use = $this->model->userSingleList($id);
		// $this->view->render('user/edit');
	}
	
	public function editSave($id)
	{
		$data = array();
		$data['IDuser'] = $id;
		$data['login'] = $_POST['login'];
		$data['password'] = $_POST['password'];
		$data['ID_user_type'] = $_POST['ID_user_type'];
		$data['name'] = $_POST['name'];
		$data['email'] = $_POST['email'];
		$data['surname'] = $_POST['surname'];
		$data['address'] = $_POST['address'];
		$data['city'] = $_POST['city'];
		$data['postalcode'] = $_POST['postalcode'];
		$data['country'] = $_POST['country'];
		
		// @TODO: Do your error checking!
		
		$this->model->editSave($data);

		header('location: ' . URL . 'user');
	}
////////////////////////////////////


	function delete($id){
		$this->model->delete($id);

		//refresh
		header('location: ' . URL . 'user');

	}
	

}
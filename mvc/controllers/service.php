<?php

class Service extends Controller {

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
		$this->view->serviceCardList = $this->model->serviceCardList();
		$this->view->serviceList = $this->model->serviceList();
		$this->view->render('service/index');
	}


	function reservation($id_service){
		$this->view->service = $this->model->serviceList2($id_service);
		$this->view->render('service/reserve');		
	}
	
	function reservationSave(){

		$data = array();
		$data['amount'] = $_POST['amount'];
		$data['type_ticket_by_name'] = $_POST['type_ticket_by_name'];
		$data['price'] = $_POST['price'];
		$data['ID_service'] = $_POST['ID_service'];
		$data['ID_user'] = $_POST['ID_user'];
		$data['spot_free'] = $_POST['spot_free'];

		$this->model->reservationSaveEnd($data);

		header('location: ' . URL . 'service');
	}

	

}
<?php

class Bootstrap {

	function __construct() {

		//take url and explode
		$url = isset($_GET['url']) ? $_GET['url'] : null;
		$url = rtrim($url, '/');
		$url = explode('/', $url);

		//print_r($url);
		
		//if url is empty go to controller index
		if (empty($url[0])) {
			require 'controllers/index.php';
			$controller = new Index();
			$controller->index();
			return false;
		}

		//go to controller if it set in url
		$file = 'controllers/' . $url[0] . '.php';
		if (file_exists($file)) {
			require $file;
		} else {
			$this->error();
		}
		
		//load model to controller it it exist
		$controller = new $url[0];
		$controller->loadModel($url[0]);


		// calling methods if it set in url or go to method index
		if (isset($url[2])) {
			if (method_exists($controller, $url[1])) {
				$controller->{$url[1]}($url[2]);
			} else {
				$this->error();
			}
		} else {
			if (isset($url[1])) {
				if (method_exists($controller, $url[1])) {
					$controller->{$url[1]}();
				} else {
					$this->error();
				}
			} else {
				$controller->index();
			}
		}
		
		
	}
	

	//what to do if error
	function error() {
		require 'controllers/error.php';
		$controller = new Error();
		$controller->index();
		return false;
	}

}
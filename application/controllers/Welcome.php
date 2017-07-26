<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	var $data = array();

    function __construct()
    {
        // Call the Controller constructor
        parent::__construct();	

    }

	public function index()
	{
		$this->load->view('welcome_message');
	}
	

}

/*
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
    {
        // Call the Controller constructor
        parent::__construct();
    }

	public function index() {


		$this->load->model('publicaciones_model','publicaciones_model');
		$datos['nombre']  = $this->publicaciones_model->obtener_publicaciones();

		//$datos['nombre'] = "sebastian";
		$this->load->view('welcome_message', $datos);
	}
}*/

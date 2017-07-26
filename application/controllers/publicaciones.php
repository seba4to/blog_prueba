<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Publicaciones extends CI_Controller {
	var $data = array();

    function __construct() {
        parent::__construct();	
        $this->load->model('publicaciones_model');
        $this->load->helper('form');
    }


    public function login(){
    	if($data = $this->input->post('login')){
			$data = $this->input->post();
			$resultado = $this->publicaciones_model->verificar_credenciales($data);
			if($resultado[0]->coincide){
				// EL USERNAME Y PASS COINCIDEN, CREAR VARIABLES DE SESION
				$usuario_data = array(
					'username' => $data['username'],
					'logeado' => true // luego se ponen más datos aquí
				);
				$this->session->set_userdata($usuario_data);
			}
		}
		redirect(base_url().'ver_publicaciones','refresh'); 

    }

	public function ver_publicaciones($pagina=null) {

		if(!isset($pagina)){
			$pagina=1;
		}
		// IF LOGIN, ES QUE ESTÁ TRATANDO DE LOGEARSE
		
		$this->load->model('publicaciones_model');
		$datos['tipo_pagina'] = "listar_publicaciones";
		$datos['publicaciones']  = $this->publicaciones_model->obtener_publicaciones($pagina);
		$datos['cantidad']  = $this->publicaciones_model->obtener_cantidad_publicaciones();
		$datos['pagina']  = $pagina;

		$this->load->view('publicaciones_view', $datos);
	}

	public function ver_publicacion($id) {
		if(isset($id)){
			$this->load->model('publicaciones_model');
			$datos['tipo_pagina'] = "leer_publicacion";
			$datos['publicacion']  = $this->publicaciones_model->ver_publicacion($id);
		}
		$this->load->view('publicaciones_view', $datos);
	}

	public function crear_publicacion(){

		if( $this->session->userdata('logeado') ==1){
			$data = $this->input->post();
			if($data){
				$datos["grabar"]=1;
				$this->load->model('publicaciones_model');
				$this->publicaciones_model->crear_publicacion($data);
			}
			$datos['tipo_pagina'] = "crear_publicacion";
			$this->load->view('publicaciones_view', $datos);
		}
		else {
			redirect(base_url().'ver_publicaciones','refresh'); 
		}
	}

	public function logout(){
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('logeado');
		redirect(base_url().'ver_publicaciones','refresh'); 
	}
	

}

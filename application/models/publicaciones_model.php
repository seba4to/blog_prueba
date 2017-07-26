<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Publicaciones_model extends CI_Model  {

	function __construct() {
        parent::__construct();
    }

    public function verificar_credenciales($data){
    	//var_dump($data); exit;
    	$this->db->select('count(*) as coincide');
    	$this->db->from('usuarios');
    	$this->db->where('username', $data["username"]);
    	$this->db->where('password', md5($data["password"]));
    	$query = $this->db->get(); 
    	//echo $this->db->last_query();exit;
    	return $query->result();

    }

	public function obtener_publicaciones($pagina=1){

		$paginacion = 5;

		$this->db->select('p.*, u.username');
		$this->db->from('publicaciones p');
		$this->db->join('usuarios u', 'p.autor_id=u.id_usuario' ,'left');
		$this->db->limit($paginacion, ($pagina-1)*$paginacion);
		$this->db->order_by('fecha', 'DESC');
		$query = $this->db->get(); 
		//echo $this->db->last_query();exit;

		return $query->result();
	}

	public function ver_publicacion($id){

		$this->db->select('p.*, u.username');
		$this->db->from('publicaciones p');
		$this->db->join('usuarios u', 'p.autor_id=u.id_usuario' ,'left');
		$this->db->where('id_publicacion', $id);
		$query = $this->db->get(); 
		//echo $this->db->last_query();exit;

		return $query->result();
	}

	public function obtener_cantidad_publicaciones(){
		$this->db->select('count(*) as cantidad');
		$this->db->from('publicaciones');
		$query = $this->db->get(); 
		//echo $this->db->last_query();exit;
		return $query->result();
	}


	public function crear_publicacion($data){
		//var_dump($data); exit;
		unset($data["crear"]);
		$this->db->insert('publicaciones', $data);

	}


}
	

?>
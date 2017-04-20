<?php if ( ! defined('BASEPATH')) exit('Acceso no permitido');
 class Articulo_model extends CI_Model {
 	function __construct(){
 		parent::__construct();
 	}
 	function dame_ultimos_articulos(){
 		$ssql = "SELECT id,titulo,cuerpo FROM articulo";
        $rs_articulos= $this->db->query($ssql);
 		return  $rs_articulos->result();
 	}
 }
 ?> 
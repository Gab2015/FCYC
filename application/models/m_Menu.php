<?php if ( ! defined('BASEPATH')) exit('Acceso no permitido');
class m_Menu extends CI_Model {
 	public function MenuUsuario($usuario){
 		$ssql = "SELECT venta,inventario,usuario FROM usuarios WHERE codusuario ='".$usuario."'";
        $rs_menus= $this->db->query($ssql);
 		return  $rs_menus->result_array();
 	}
 	public function MenuVenta(){
 		$ssql = "SELECT * FROM menus WHERE parent in(1,2) or id in(1,2)";
        $rs_MenuVenta = $this->db->query($ssql);
 		return  $rs_MenuVenta->result_array();
 	}
 	public function MenuInventario(){
 		$ssql = "SELECT * FROM menus WHERE parent in(3,4) or id in(3,4)";
        $rs_MenuInventario = $this->db->query($ssql);
 		return  $rs_MenuInventario->result_array();
 	}
 	public function MenuGUsuario(){
 		$ssql = "SELECT * FROM menus WHERE parent in(5) or id in(5)";
        $rs_MenuGUsuario = $this->db->query($ssql);
 		return  $rs_MenuGUsuario->result_array();
 	}
}
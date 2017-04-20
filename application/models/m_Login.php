<?php if ( ! defined('BASEPATH')) exit('Acceso no permitido');
 class m_Login extends CI_Model {
 	function __construct(){
 		parent::__construct();
 	}
 	function get_user($usr, $pwd){
        $ssql ="EXEC pc_m_Login ?,?";
        $params = array( $pwd,$usr);
        $rs_usuarios= $this->db->query($ssql,$params);
 	    return  $rs_usuarios->result();
    }
  }
 ?> 
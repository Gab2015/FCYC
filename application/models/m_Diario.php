<?php if ( ! defined('BASEPATH')) exit('Acceso no permitido');
class m_Diario extends CI_Model {
    function __construct(){
        parent::__construct();
    }
    function get_UltimoDiario($Tipo){
	//Variables
        $ssqlNumDoc = "EXECUTE pc_m_UltimoDiario ?";
        $paramsNumDoc = array($Tipo);
        $rs_Diario = $this->db->query($ssqlNumDoc,$paramsNumDoc);
        $rs_Diarios['rs_Diario'] = $rs_Diario->result();
        return  $rs_Diarios;
    }
 }
?> 
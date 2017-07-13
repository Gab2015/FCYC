<?php if ( ! defined('BASEPATH')) exit('Acceso no permitido');
class m_Diario extends CI_Model {
    function __construct(){
        parent::__construct();
    }
    function get_UltimoDiario($Tipo){
	//Variables
        $ssqlNumDoc = "EXECUTE pc_m_UltimoDiario ?";
        $paramsNumDoc = array($Tipo);
        $rs_UltimoDiario = $this->db->query($ssqlNumDoc,$paramsNumDoc);
        return  $rs_UltimoDiario->row()->NumDoc;
    }
    function get_Diario($NumDoc,$IdTipo){
    //Variables
        $ssqlNumDoc = "EXECUTE pc_m_Diario ?,?";
        $paramsNumDoc = array($NumDoc,$IdTipo);
        $rs_Diario = $this->db->query($ssqlNumDoc,$paramsNumDoc);
        $rs_Diarios['rs_Diario'] = $rs_Diario->result();
        return  $rs_Diarios;
    }
    function pc_m_Diario_i($NumDoc,$usuario,$IdTipo){
        $vSiguienteDoc = $NumDoc + 1; 
        $ssql ="EXECUTE pc_m_Diario_i ?,?,?";
        $params = array($vSiguienteDoc,$Cliente,$IdTipo);
        $rs_DiarioInsert= $this->db->query($ssql,$params);
        return  $rs_DiarioInsert->result();
    }
 }
?> 
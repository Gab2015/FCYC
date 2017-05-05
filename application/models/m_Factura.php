<?php if ( ! defined('BASEPATH')) exit('Acceso no permitido');
 class m_Factura extends CI_Model {
 	function __construct(){
 		parent::__construct();
 	}
 	function get_Venta(){
 	//Variables
 	$NumDoc  = 1;
 	$IdFact  = 1;
 	$ssqlNumDoc = "EXECUTE pc_m_Venta ?,?";
 	$paramsNumDoc = array($NumDoc,$IdFact);
    $rs_Venta = $this->db->query($ssqlNumDoc,$paramsNumDoc);
    $rs_Ventas['rs_Venta'] = $rs_Venta->result();
 	return  $rs_Ventas;
 	}
 }
 ?> 
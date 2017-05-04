<?php if ( ! defined('BASEPATH')) exit('Acceso no permitido');
 class m_Factura extends CI_Model {
 	function __construct(){
 		parent::__construct();
 	}
 	function get_Factura(){
 	//Variables
 	$NumDoc  = 1;
 	$ssqlNumDoc = "EXECUTE pc_m_Factura ?";
 	$paramsNumDoc = array($NumDoc);
    $rs_Factura = $this->db->query($ssqlNumDoc,$paramsNumDoc);
    $rs_Facturas['rs_Factura'] = $rs_Factura->result();
 	return  $rs_Facturas;
 	}
 	function get_DetalleFactura(){
 	//Variables
 	$NumDoc  = 1;
 	$IdFact  = 1;
 	$ssqlNumDoc = "EXECUTE pc_m_DetalleFactura ?,?";
 	$paramsNumDoc = array($NumDoc,$IdFact);
    $rs_DetalleFactura = $this->db->query($ssqlNumDoc,$paramsNumDoc);
    $rs_DetalleFacturas['rs_DetalleFactura'] = $rs_DetalleFactura->result();
 	return  $rs_DetalleFacturas;
 	}
 }
 ?> 
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
    function pc_m_Factura_i($NumDoc,$Cliente,$Nombre,$IdTipo,$Cajero,$Vendedor,$CodVendedor,$FechaContable,$NumCaja,$VentaGravada,$VentaExenta,$VentaNoSujeta,$Iva,$Total,$DocType){
        $Fecha   = date('Y-m-d', strtotime(strtr($FechaContable, '/', '-'))). ' 00:00:00';
        $ssql ="EXECUTE pc_m_Factura_i ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?";
        $params = array($NumDoc,$Cliente,$Nombre,$IdTipo,$Cajero,$Vendedor,$CodVendedor,$Fecha,$NumCaja,$VentaGravada,$VentaExenta,$VentaNoSujeta,$Iva,$Total,$DocType);
        $rs_Factura= $this->db->query($ssql,$params);
          return  $rs_Factura->result();
        }
 }
 ?> 
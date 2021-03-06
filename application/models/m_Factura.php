<?php if ( ! defined('BASEPATH')) exit('Acceso no permitido');
class m_Factura extends CI_Model {
    function __construct(){
        parent::__construct();
    }
    function get_Factura($vNuevo,$SerieCaja){
	//Variables
        $ssqlNumDoc = "EXECUTE pc_m_Factura ?,?";
        $paramsNumDoc = array($vNuevo,$SerieCaja);
        $rs_Factura = $this->db->query($ssqlNumDoc,$paramsNumDoc);
        $rs_Facturas['rs_Factura'] = $rs_Factura->result();
        return  $rs_Facturas;
    }
    function get_UltimoDoc($SerieCaja){
    //Variables
        $ssqlNumDoc = "EXECUTE pc_m_UltimoDoc ?";
        $paramsNumDoc = array($SerieCaja);
        $rs_UltimoDoc = $this->db->query($ssqlNumDoc,$paramsNumDoc);
        return  $rs_UltimoDoc->row()->NumDoc;
    }
    function get_DetalleFactura($UltimoDoc,$SerieCaja){
	//Variables
        $ssqlNumDoc = "EXECUTE pc_m_DetalleFactura ?,?";
        $paramsNumDoc = array($UltimoDoc,$SerieCaja);
        $rs_DetalleFactura = $this->db->query($ssqlNumDoc,$paramsNumDoc);
        $rs_DetalleFacturas['rs_DetalleFactura'] = $rs_DetalleFactura->result();
        return  $rs_DetalleFacturas;
    }
    function pc_m_Factura_i($NumDoc,$Cliente,$Nombre,$IdTipo,$Cajero,$Vendedor,$CodVendedor,$FechaContable,$NumCaja,$VentaGravada,$VentaExenta,$VentaNoSujeta,$Iva,$Total,$DocType,$DUI,$TipoPago){
        $vSiguienteDoc = $NumDoc + 1; 
        $Fecha   = date('Y-m-d H:i:s', strtotime(strtr($FechaContable, '/', '-')));
        $ssql ="EXECUTE pc_m_Factura_i ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?";
        $params = array($vSiguienteDoc,$Cliente,$Nombre,$IdTipo,$Cajero,$Vendedor,$CodVendedor,$Fecha,$NumCaja,$VentaGravada,$VentaExenta,$VentaNoSujeta,$Iva,$Total,$DocType,$DUI,$TipoPago);
        $rs_Fac= $this->db->query($ssql,$params);
        return  $rs_Fac->result();
    }
    function get_DetalleArticulo(){
        $ssqlArticulos = "EXECUTE pc_m_DetalleArticulo";
        $rs_DetalleArticulo = $this->db->query($ssqlArticulos);
        $rs_DetalleArticulos['rs_DetalleArticulo'] = $rs_DetalleArticulo->result();
        return  $rs_DetalleArticulos;
    }    
    function pc_m_DetalleFactura_i($tablaDetalle){
        for( $i = 0 ; $i < count($tablaDetalle['CodProducto']) ; $i++){
                $params = array(
                    'IdFac' =>  $tablaDetalle['IdFac'][$i],
                    'LineaNumDoc' =>  $tablaDetalle['LineaNumDoc'][$i] + 1,
                    'IdProducto' =>  $tablaDetalle['IdProducto'][$i],
                    'CodProducto' =>  $tablaDetalle['CodProducto'][$i],
                    'NumFabricante' =>  $tablaDetalle['NumFabricante'][$i],
                    'DescripcionProducto' =>  $tablaDetalle['DescripcionProducto'][$i],
                    'Cantidad' =>  $tablaDetalle['Cantidad'][$i],
                    'PrecioConIva' =>  $tablaDetalle['PrecioConIva'][$i],
                    'Afecto' =>  $tablaDetalle['Afecto'][$i],
                    'CuentaMayor' =>  $tablaDetalle['CuentaMayor'][$i],
                    'CuentaCoste' =>  $tablaDetalle['CuentaCoste'][$i],
                    'NormaReparto' =>  $tablaDetalle['NormaReparto'][$i]    
                );   
                $ssql ="EXECUTE pc_m_DetalleFactura_i ?,?,?,?,?,?,?,?,?,?,?,?";
                $rs_Det = $this->db->query($ssql,$params);
            }
    return $rs_Det;
    }
}
?> 
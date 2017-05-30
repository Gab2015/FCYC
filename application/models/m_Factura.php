<?php if ( ! defined('BASEPATH')) exit('Acceso no permitido');
class m_Factura extends CI_Model {
    function __construct(){
        parent::__construct();
    }
    function get_Factura(){
	//Variables
        $IdFact  = 1;
        $ssqlNumDoc = "EXECUTE pc_m_Factura ?";
        $paramsNumDoc = array($IdFact);
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
    function pc_m_Factura_i($NumDoc,$Cliente,$Nombre,$IdTipo,$Cajero,$Vendedor,$CodVendedor,$FechaContable,$NumCaja,$VentaGravada,$VentaExenta,$VentaNoSujeta,$Iva,$Total,$DocType){
        $Fecha   = date('Y-m-d H:i:s', strtotime(strtr($FechaContable, '/', '-')));
        $ssql ="EXECUTE pc_m_Factura_i ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?";
        $params = array($NumDoc,$Cliente,$Nombre,$IdTipo,$Cajero,$Vendedor,$CodVendedor,$Fecha,$NumCaja,$VentaGravada,$VentaExenta,$VentaNoSujeta,$Iva,$Total,$DocType);
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
        // $ssql ="EXECUTE pc_m_DetalleFactura_i ?,?,?,?,?,?,?,?,?,?,?,?";
        // $params = array($IdFac,$NumDoc,$IdProducto,$CodProducto,$NumFabricante,$DescripcionProducto,$Cantidad,$PrecioConIva,$Afecto,$CuentaMayor,$CuentaCoste,$NormaReparto);
        // $rs_Fac= $this->db->query($ssql,$params);
    // foreach($tablaDetalle as $filaInsertar){
    //     // $this->db->insert('DetalleFactura', $tablaDetalle);
    //     //  $rs_Det = $this->db->insert_id();
    //     $ssql ="EXECUTE pc_m_DetalleFactura_i ?,?,?,?,?,?,?,?,?,?,?,?";
    //     $params = array($filaInsertar->$IdFac,$filaInsertar->$NumDoc,$filaInsertar->$IdProducto,$filaInsertar->$CodProducto,$filaInsertar->$NumFabricante,$filaInsertar->$DescripcionProducto,$filaInsertar->$Cantidad,$filaInsertar->$PrecioConIva,$filaInsertar->$Afecto,$filaInsertar->$CuentaMayor,$filaInsertar->$CuentaCoste,$filaInsertar->$NormaReparto);
    //     $rs_Det = $this->db->query($ssql,$params);
    //    }
        for( $i = 0 ; $i < count($tablaDetalle['CodProducto']) ; $i++){
                $insert = array(
                    'IdFac' =>  $tablaDetalle['IdFac'][$i],
                    'NumDoc' =>  $tablaDetalle['NumDoc'][0],
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
                $rs_Det = $this->db->insert('DetalleFactura', $insert);
            }
    return $rs_Det;
    }
}
?> 
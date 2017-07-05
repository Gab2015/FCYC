<?php
if ( $_GET['Imprimir'] == 'true') { 
define ('BASEPATH','./');
//Import the PhpJasperLibrary
include ('PhpJasperLibrary/tcpdf/tcpdf.php');
include ('PhpJasperLibrary/PHPJasperXML.inc.php');
require_once('application/config/database.php');
//database connection details

$server= $db['default']['hostname'];
$bd=     $db['default']['database'];
$user=   $db['default']['username'];
$pass=   $db['default']['password'];
$version="0.9d";
$pgport=5432;
$pchartfolder="./class/pchart2";
$vNumDoc = $_GET['vNumDoc'];
$vNumCaja = $_GET['vNumCaja'];
    //display errors should be off in the php.ini file
    ini_set('display_errors', 0);
    //setting the path to the created jrxml file
    ob_start();
    $xml =  simplexml_load_file('reportes/factura.jrxml');
    $PHPJasperXML = new PHPJasperXML();
    $PHPJasperXML->debugsql=false;
    //$PHPJasperXML->arrayParameter=array("vNumDoc"=>$vNumDoc);
    $PHPJasperXML->xml_dismantle($xml);
    $PHPJasperXML->sql ="EXECUTE pc_m_Venta $vNumDoc,$vNumCaja";
    $PHPJasperXML->transferDBtoArray($server,$user,$pass,$bd,"odbc");
    ob_end_clean();
    $PHPJasperXML->outpage("I");
}
else {
    if ( ! defined('BASEPATH')) exit('Acceso no permitido');
}
?> 
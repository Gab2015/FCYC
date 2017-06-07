<?php
if ( $_GET['Imprimir'] == 'true') { 
define ('BASEPATH','./');
//Import the PhpJasperLibrary
include ('PhpJasperLibrary/tcpdf/tcpdf.php');
include ('PhpJasperLibrary/PHPJasperXML.inc.php');
require_once('application/config/database.php');
require_once('reportes/setting.php');
//database connection details

$server= $db['default']['hostname'];
$bd=     $db['default']['database'];
$user=   $db['default']['username'];
$pass=   $db['default']['password'];
$version="0.8b";
$pgport=5432;
$pchartfolder="./class/pchart2";
$vNumDoc = $_GET['vNumDoc'];
    //display errors should be off in the php.ini file
    ini_set('display_errors', 0);
    ob_end_clean();
    ob_start();
    //setting the path to the created jrxml file
    $xml =  simplexml_load_file('reportes/factura.jrxml');
    $PHPJasperXML = new PHPJasperXML();
    $PHPJasperXML->debugsql=false;
    //$PHPJasperXML->arrayParameter=array("vNumDoc"=>$vNumDoc);
    $PHPJasperXML->xml_dismantle($xml);
    $PHPJasperXML->sql ="EXECUTE pc_m_Venta $vNumDoc";
    $PHPJasperXML->transferDBtoArray($server,$user,$pass,$bd,"odbc");
    $PHPJasperXML->outpage("I");
}
else {
    if ( ! defined('BASEPATH')) exit('Acceso no permitido');
}

?> 
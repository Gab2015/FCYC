<?php
if ( isset( $_POST['Exportar'] ) ) { 
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
$version="0.8b";
$pgport=5432;
$pchartfolder="./class/pchart2";
    //display errors should be off in the php.ini file
    ini_set('display_errors', 0);
    ob_end_clean();
    ob_start();
    //setting the path to the created jrxml file
    $xml =  simplexml_load_file('reportes/reportecyc.jrxml');
    $PHPJasperXML = new PHPJasperXML();
    $PHPJasperXML->debugsql=false;
    //$PHPJasperXML->arrayParameter=array("parameter1"=>1);
    $PHPJasperXML->xml_dismantle($xml);
    $PHPJasperXML->transferDBtoArray($server,$user,$pass,$bd,"odbc");
    $PHPJasperXML->outpage("I");
}
?> 
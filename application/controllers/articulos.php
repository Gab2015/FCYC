<?php if ( ! defined('BASEPATH')) exit('Acceso no permitido');
class Articulos extends CI_Controller {
	function index(){
//cargo el helper de url, con funciones para trabajo con URL del sitio
		$this->load->helper('url');
//cargo el modelo de artículos
		$this->load->model('Articulo_model');
//pido los ultimos artículos al modelo
		$ultimosArticulos = $this->Articulo_model->dame_ultimos_articulos();
//creo el array con datos de configuración para la vista
		$datos_vista = array('rs_articulos' => $ultimosArticulos);
//cargo la vista pasando los datos de configuacion
		$this->load->view('home',$datos_vista);
	}
}
?> 
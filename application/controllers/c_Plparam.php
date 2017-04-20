<?php if ( ! defined('BASEPATH')) exit('Acceso no permitido');
class c_Plparam extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//Carga los parametros para validar usuario,pass
		$this->load->library('session');
		//cargo el helper de url, con funciones para trabajo con URL del sitio
		$this->load->helper('url');
		$this->load->helper('form');
        //cargo el modelo de Empresa
		$this->load->model('m_Plparam');
	}
	function index(){
		$loginuser = $this->session->userdata('loginuser');
		if ($loginuser == TRUE){ 
//Pide informacion de la Empresa
			$setEmpresa = $this->m_Plparam->get_Empresa();
//Crea el array con datos de configuración para la vista
			$datos_vista = array('rs_Empresa' => $setEmpresa);
//Cargo la vista pasando los datos de configuacion
			$this->load->view('v_Head');
			$this->load->view('v_Header');
			$this->load->view('v_Plparam',$datos_vista);
			$this->load->view('v_Foot');
		}
		else{
			$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">¡Datos incorrectos!</div>');
			redirect('c_Login/index');
		}	
	}
}
?> 
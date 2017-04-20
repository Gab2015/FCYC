<?php if ( ! defined('BASEPATH')) exit('Acceso no permitido');
class c_Bancos extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		//cargo el helper de url, con funciones para trabajo con URL del sitio
		$this->load->helper('url');
		$this->load->helper('form');
        //cargo el modelo de Bancos
		$this->load->model('m_Bancos');
	}
	function index(){
		$loginuser = $this->session->userdata('loginuser');
		if ($loginuser == TRUE){ 
//pido los Bancos
			$setBancos = $this->m_Bancos->get_Bancos();
//creo el array con datos de configuración para la vista
			$datos_vista = array('rs_Bancos' => $setBancos);
//cargo la vista pasando los datos de configuacion
			$this->load->view('v_Head');
			$this->load->view('v_Header');
			$this->load->view('v_Bancos',$datos_vista);
			$this->load->view('v_Foot');
		}
		else{
			$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">¡Datos incorrectos!</div>');
			redirect('c_Login/index');
		}	
	}
}
?> 
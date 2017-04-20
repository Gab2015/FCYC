<?php if ( ! defined('BASEPATH')) exit('Acceso no permitido');
class c_Cuadros extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
    $this->load->library('form_validation');
		//cargo el helper de url, con funciones para trabajo con URL del sitio
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('html');
    //cargo el modelo de Cuadros
		$this->load->model('m_Cuadros');
	}
	function index(){
		$loginuser = $this->session->userdata('loginuser');
		if ($loginuser == TRUE){ 
      //creo el array con datos de configuración para la vista
			$datos_vista = $this->m_Cuadros->get_Cuadros();
      //cargo la vista pasando los datos de configuracion
			$this->load->view('v_Head');
			$this->load->view('v_Header');
			$this->load->view('v_Cuadros',$datos_vista);
			$this->load->view('v_Foot');
		}
		else{
			$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">¡Datos incorrectos!</div>');
			redirect('c_Login/index');
		}	
	}
	function c_Cuadros_i(){
		$loginuser = $this->session->userdata('loginuser');
		if ($loginuser == TRUE){ 
			$this->load->view('v_Head');
			$this->load->view('v_Header');
			$this->load->view('v_Cuadros_i');
			$this->load->view('v_Foot');
		}
		else{
			$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">¡Datos incorrectos!</div>');
			redirect('c_Login/index');
		}	
	}
	public function set_Cuadros(){
          $Institucio = $this->input->post("txt_Institucio");
          $Desde      = $this->input->post("txt_Desde");
          $Hasta      = $this->input->post("txt_Hasta");
          $Porcentaje = $this->input->post("txt_Porcentaje");
          $Exceso     = $this->input->post("txt_Exceso");
          $Mas        = $this->input->post("txt_Mas");
          $Comentario = $this->input->post("txt_Comentario");
          $Tipo       = $this->input->post("txt_Tipo");
          $Fechaini   = $this->input->post("txt_Fechaini");
          $Fechafin   = $this->input->post("txt_Fechafin");

          $this->form_validation->set_rules("txt_Institucio", "Institución", "trim|required");
          $this->form_validation->set_rules("txt_Desde", "Desde", "trim|required");
          $this->form_validation->set_rules("txt_Hasta", "Hasta", "trim|required");
          $this->form_validation->set_rules("txt_Porcentaje", "Porcentaje", "trim|required");
          $this->form_validation->set_rules("txt_Exceso", "Exceso", "trim|required");
          $this->form_validation->set_rules("txt_Mas", "Más", "trim|required");
          $this->form_validation->set_rules("txt_Comentario", "Comentario", "trim|required");
          $this->form_validation->set_rules("txt_Tipo", "Tipo", "trim|required");
          $this->form_validation->set_rules("txt_Fechaini", "Fecha inicio", "trim|required");
          $this->form_validation->set_rules("txt_Fechafin", "Fecha fin", "trim|required");

          if ($this->form_validation->run() == FALSE){
              $this->load->view('v_Head');
              $this->load->view('v_Header');
              $this->load->view('v_Cuadros_i');
              $this->load->view('v_Foot');
          }
          else{
               if ($this->input->post('btn_guardar') == "Guardar"){
                    $Cuadros_result = $this->m_Cuadros->i_m_Cuadros($Institucio,$Desde,$Hasta,$Porcentaje,$Exceso,$Mas,$Comentario,$Tipo,$Fechaini,$Fechafin);
                    if (Empty($Cuadros_result) == FALSE){ 
                         redirect('c_Cuadros/c_Cuadros_i');
                    }
                    else{
                         $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">¡Datos incorrectos!</div>');
                         redirect('c_Login/index');
                    }
               }
               else{
                    $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">¡Datos incorrectos!</div>');
                    redirect('c_login/index');
               }
          }
     }
}
?> 
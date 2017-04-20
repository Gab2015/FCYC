<?php if ( ! defined('BASEPATH')) exit('Acceso no permitido');
 
class c_Login extends CI_Controller
{
     public function __construct(){
          parent::__construct();
          $this->load->library('session');
          $this->load->library('form_validation');
          $this->load->helper('form');
          $this->load->helper('url');
          $this->load->helper('html');
          $this->load->model('m_Login');
     }

     public function index(){

          $username = $this->input->post("txt_username");
          $password = $this->input->post("txt_password");

          $this->form_validation->set_rules("txt_username", "Usuario", "trim|required");
          $this->form_validation->set_rules("txt_password", "Contraseña", "trim|required");
          if ($this->form_validation->run() == FALSE){
               $this->load->view('v_Head');
               $this->load->view('v_Login');
               $this->load->view('v_Foot');
          }
          else{
               if ($this->input->post('btn_login') == "Acceder"){
                    $usr_result = $this->m_Login->get_user($username,$password);
                    if (Empty($usr_result) == FALSE){ 
                         $sessiondata = array(
                              'username' => $username,
                              'loginuser' => TRUE
                         );
                         $this->session->set_userdata($sessiondata);
                         redirect('c_Menu/index');
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
<?php if ( ! defined('BASEPATH')) exit('Acceso no permitido');
class c_Diario extends CI_Controller {
	public function __construct(){
		parent::__construct();
    //cargo las librerias
		$this->load->library(array('session','form_validation','multi_menu'));
	//cargo el helper de url, con funciones para trabajo con URL del sitio
		$this->load->helper(array('url','form','html'));
    //cargo los modelos
		$this->load->model('m_Diario');
		$this->load->model("m_Menu", "menu");
	}
	function index(){
		$usuario   = $this->session->userdata('username');
		$loginuser = $this->session->userdata('loginuser');
		if ($loginuser == TRUE){ 
			$menus = $this->menu->MenuUsuario($usuario);
			$data['activeTabVenta'] = "";
			$data['activeTabInventario'] = "";
			$data['activeTabGUsuario'] = "";
			foreach ($menus as $fila) {
				if ($fila['venta'] == 'T')
				{
					$this->load->model("m_Menu", "menu");
					$itemsVenta = $this->menu->MenuVenta();	
					$this->multi_menu->set_items($itemsVenta);
					$config["nav_tag_open"]          = '<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">';		
					$config["parent_tag_open"]       = '<li class="dropdown-submenu">';			
					$config["parent_anchor_tag"]     = '<a tabindex="-1" href="%s">%s</a>';	
					$config["children_tag_open"]     = '<ul class="dropdown-menu">';			
					$config["item_divider"]          = "<li class='divider'></li>";
					$this->multi_menu->initialize($config);
					$data['activeTabVenta'] = $this->multi_menu->render();
					
				}
				if ($fila['usuario'] == 'T')
				{
					$itemsGUsuario = $this->menu->MenuGUsuario();
					$this->multi_menu->set_items($itemsGUsuario);
					$config["nav_tag_open"]          = '<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">';		
					$config["parent_tag_open"]       = '<li class="dropdown-submenu">';			
					$config["parent_anchor_tag"]     = '<a tabindex="-1" href="%s">%s</a>';	
					$config["children_tag_open"]     = '<ul class="dropdown-menu">';			
					$config["item_divider"]          = "<li class='divider'></li>";
					$this->multi_menu->initialize($config);
					$data['activeTabGUsuario'] = $this->multi_menu->render();
				}
				if ($fila['inventario'] == 'T')
				{
					$itemsInventario = $this->menu->MenuInventario();
					$this->multi_menu->set_items($itemsInventario);
					$config["nav_tag_open"]          = '<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">';		
					$config["parent_tag_open"]       = '<li class="dropdown-submenu">';			
					$config["parent_anchor_tag"]     = '<a tabindex="-1" href="%s">%s</a>';	
					$config["children_tag_open"]     = '<ul class="dropdown-menu">';			
					$config["item_divider"]          = "<li class='divider'></li>";
					$this->multi_menu->initialize($config);
					$data['activeTabInventario'] = $this->multi_menu->render();
				}
			}
      //creo el array con datos de configuración para la vista			
            $Usuariobd['usuario'] = $usuario;
		    $Tipo = ($usuario == "eportillo" ? 1 : 2);
            $datos_diario['rs_Diario'] = $this->m_Diario->get_UltimoDiario($Tipo);
      //cargo la vista pasando los datos de configuracion
			$this->load->view('v_Head');
			$this->load->view('v_Header',$Usuariobd);
			$this->load->view("v_Menu",$data);
			$this->load->view('v_Diario',$datos_diario);
			$this->load->view('v_Foot');
		}
		else{
			$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">¡Datos incorrectos!</div>');
			redirect('c_Login/index');
		}	
	}
	function set_Diario(){
		$NumDoc         = $this->input->post("txt_NumDoc");
		$Tipo        = $this->input->post("txt_NumCaja");
		$this->form_validation->set_rules("txt_NumCaja", "Caja", "trim|required");
	if ($this->form_validation->run() == FALSE){
		$usuario   = $this->session->userdata('username');
		$loginuser = $this->session->userdata('loginuser');
		if ($loginuser == TRUE){ 
			$menus = $this->menu->MenuUsuario($usuario);
			$data['activeTabVenta'] = "";
			$data['activeTabInventario'] = "";
			$data['activeTabGUsuario'] = "";
			foreach ($menus as $fila) {
				if ($fila['venta'] == 'T')
				{
					$this->load->model("m_Menu", "menu");
					$itemsVenta = $this->menu->MenuVenta();	
					$this->multi_menu->set_items($itemsVenta);
					$config["nav_tag_open"]          = '<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">';		
					$config["parent_tag_open"]       = '<li class="dropdown-submenu">';			
					$config["parent_anchor_tag"]     = '<a tabindex="-1" href="%s">%s</a>';	
					$config["children_tag_open"]     = '<ul class="dropdown-menu">';			
					$config["item_divider"]          = "<li class='divider'></li>";
					$this->multi_menu->initialize($config);
					$data['activeTabVenta'] = $this->multi_menu->render();
					
				}
				if ($fila['usuario'] == 'T')
				{
					$itemsGUsuario = $this->menu->MenuGUsuario();
					$this->multi_menu->set_items($itemsGUsuario);
					$config["nav_tag_open"]          = '<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">';		
					$config["parent_tag_open"]       = '<li class="dropdown-submenu">';			
					$config["parent_anchor_tag"]     = '<a tabindex="-1" href="%s">%s</a>';	
					$config["children_tag_open"]     = '<ul class="dropdown-menu">';			
					$config["item_divider"]          = "<li class='divider'></li>";
					$this->multi_menu->initialize($config);
					$data['activeTabGUsuario'] = $this->multi_menu->render();
				}
				if ($fila['inventario'] == 'T')
				{
					$itemsInventario = $this->menu->MenuInventario();
					$this->multi_menu->set_items($itemsInventario);
					$config["nav_tag_open"]          = '<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">';		
					$config["parent_tag_open"]       = '<li class="dropdown-submenu">';			
					$config["parent_anchor_tag"]     = '<a tabindex="-1" href="%s">%s</a>';	
					$config["children_tag_open"]     = '<ul class="dropdown-menu">';			
					$config["item_divider"]          = "<li class='divider'></li>";
					$this->multi_menu->initialize($config);
					$data['activeTabInventario'] = $this->multi_menu->render();
				}
			}
      //creo el array con datos de configuración para la vista			
            $Usuariobd['usuario'] = $usuario;
		    $Tipo = ($usuario == "eportillo" ? 1 : 2);
            $datos_diario['rs_Diario'] = $this->m_Diario->get_UltimoDiario($Tipo);
      //cargo la vista pasando los datos de configuracion
			$this->load->view('v_Head');
			$this->load->view('v_Header',$Usuariobd);
			$this->load->view("v_Menu",$data);
			$this->load->view('v_Diario',$datos_diario);
			$this->load->view('v_Foot');
		}
		else{
			$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">¡Datos incorrectos!</div>');
			redirect('c_Login/index');
		}	
	}
			else{
			if ($this->input->post('btn_generar') == "Generar"){
				$Factura_result = $this->m_Diario->pc_m_Diario_i($NumDoc,$usuario,$IdTipo);
						unset($_POST['txt_NumCaja']);
						unset($_POST['txt_IdTipo']);
						redirect('c_Diario/index');  
				}
			else{
				$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">¡Datos incorrectos!</div>');
				redirect('c_login/index');
			}
		}
  }
}
?> 
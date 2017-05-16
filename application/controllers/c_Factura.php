<?php if ( ! defined('BASEPATH')) exit('Acceso no permitido');
class c_Factura extends CI_Controller {
	public function __construct(){
		parent::__construct();
    //cargo las librerias
		$this->load->library(array('session','form_validation','multi_menu'));
	//cargo el helper de url, con funciones para trabajo con URL del sitio
		$this->load->helper(array('url','form','html'));
    //cargo los modelos
		$this->load->model('m_Factura');
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
			$datos_vista['rs_Factura'] = $this->m_Factura->get_Factura();
			$datos_vista['rs_DetalleFactura'] = $this->m_Factura->get_DetalleFactura();
      //cargo la vista pasando los datos de configuracion
			$this->load->view('v_Head');
			$this->load->view('v_Header');
			$this->load->view("v_Menu",$data);
			$this->load->view('v_Factura',$datos_vista);
		}
		else{
			$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">¡Datos incorrectos!</div>');
			redirect('c_Login/index');
		}	
	}
	public function set_Factura(){
		$NumDoc         = $this->input->post("txt_NumDoc");
		$Cliente        = $this->input->post("txt_Cliente");
		$Nombre         = $this->input->post("txt_Nombre");
		$IdTipo         = 1;
		$Cajero         = $this->input->post("txt_Cajero");
		$Vendedor       = $this->input->post("txt_Vendedor");
		$CodVendedor    = $this->input->post("txt_CodVendedor");
		$NumCaja        = 1;
		$FechaContable  = $this->input->post("txt_FechaContable");
		$VentaGravada   = $this->input->post("txt_VentaGravada");
		$VentaExenta    = 0;
		$VentaNoSujeta  = 0;
		$Iva            = $this->input->post("txt_Iva");
		$Total          = $this->input->post("txt_Total");
		$DocType        = $this->input->post("txt_DocType");

		$this->form_validation->set_rules("txt_Cliente", "Cliente", "trim|required");
		$this->form_validation->set_rules("txt_Nombre", "Nombre", "trim|required");
		$this->form_validation->set_rules("txt_Cajero", "Cajero", "trim|required");
		$this->form_validation->set_rules("txt_Vendedor", "Vendedor", "trim|required");
		$this->form_validation->set_rules("txt_CodVendedor", "Codigo", "trim|required");
		$this->form_validation->set_rules("txt_FechaContable", "Fecha", "trim|required");
		$this->form_validation->set_rules("txt_VentaGravada", "Gravada", "trim|required");
		$this->form_validation->set_rules("txt_Iva", "IVA", "trim|required");
		$this->form_validation->set_rules("txt_Total", "Total", "trim|required");

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
			$datos_vista['rs_Factura'] = $this->m_Factura->get_Factura();
			$datos_vista['rs_DetalleFactura'] = $this->m_Factura->get_DetalleFactura();
      //cargo la vista pasando los datos de configuracion
				$this->load->view('v_Head');
				$this->load->view('v_Header');
				$this->load->view("v_Menu",$data);
				$this->load->view('v_Factura',$datos_vista);
			}
			else{
				$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">¡Datos incorrectos!</div>');
				redirect('c_Login/index');
			}	
		}
		else{
			if ($this->input->post('btn_guardar') == "Guardar"){
				$Factura_result = $this->m_Factura->pc_m_Factura_i($NumDoc,$Cliente,$Nombre,$IdTipo,$Cajero,$Vendedor,$CodVendedor,$FechaContable,$NumCaja,$VentaGravada,$VentaExenta,$VentaNoSujeta,$Iva,$Total,$DocType);
				if (Empty($Factura_result) == FALSE){ 
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
						$datos_vista['rs_Factura'] = $this->m_Factura->get_Factura();
			            $datos_vista['rs_DetalleFactura'] = $this->m_Factura->get_DetalleFactura();
      //cargo la vista pasando los datos de configuracion
						$this->load->view('v_Head');
						$this->load->view('v_Header');
						$this->load->view("v_Menu",$data);
						$this->load->view('v_Factura',$datos_vista);
					}
					else{
						$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">¡Datos incorrectos!</div>');
						redirect('c_Login/index');
					}	
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
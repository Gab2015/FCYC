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
			$UltimoDoc = $this->m_Factura->get_UltimoDoc();
			$datos_vista['rs_DetalleFactura'] = $this->m_Factura->get_DetalleFactura($UltimoDoc);
			$datos_articulo['rs_articulo'] = $this->m_Factura->get_DetalleArticulo();
      //cargo la vista pasando los datos de configuracion
			$this->load->view('v_Head');
			$this->load->view('v_Header');
			$this->load->view("v_Menu",$data);
			$this->load->view('v_Factura',$datos_vista);
			$this->load->view("v_Factura_Model",$datos_articulo);
			$this->load->view('v_Foot');
		}
		else{
			$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">¡Datos incorrectos!</div>');
			redirect('c_Login/index');
		}	
	}
	public function set_Factura(){
		/*======Campos para inertar en la tabla factura======*/
		$NumDoc         = $this->input->post("txt_NumDoc");
		$Cliente        = $this->input->post("txt_Cliente");
		$Nombre         = $this->input->post("txt_Nombre");
		$IdTipo         = 1;
		$Cajero         = $this->input->post("txt_Cajero");
		$Vendedor       = $this->input->post("txt_Vendedor");
		$CodVendedor    = $this->input->post("txt_CodVendedor");
		$NumCaja        = $this->input->post("txt_NumCaja");
		$FechaContable  = $this->input->post("txt_FechaContable");
		$VentaGravada   = $this->input->post("txt_VentaGravada");
		$VentaExenta    = 0;
		$VentaNoSujeta  = 0;
		$Iva            = $this->input->post("txt_Iva");
		$Total          = $this->input->post("txt_Total");
		$DocType        = $this->input->post("txt_DocType");

		$this->form_validation->set_rules("txt_Cliente", "Cliente", "trim|required");
		$this->form_validation->set_rules("txt_Nombre", "Nombre", "trim|required");
		$this->form_validation->set_rules("txt_NumCaja", "NumCaja", "trim|required");
		$this->form_validation->set_rules("txt_Cajero", "Cajero", "trim|required");
		$this->form_validation->set_rules("txt_Vendedor", "Vendedor", "trim|required");
		$this->form_validation->set_rules("txt_CodVendedor", "Codigo", "trim|required");
		$this->form_validation->set_rules("txt_FechaContable", "Fecha", "trim|required");
		$this->form_validation->set_rules("txt_VentaGravada", "Gravada", "trim|required");
		$this->form_validation->set_rules("txt_Iva", "IVA", "trim|required");
		$this->form_validation->set_rules("txt_Total", "Total", "trim|required");
       
        /*======Campos para inertar en la tabla DetalleFactura======*/
        $IdFac = $this->input->post("txt_IdFac");
        $LineaNumDoc = $this->input->post("txt_LineaNumDoc");
        $IdProducto = $this->input->post("txt_IdProducto");
        $CodProducto = $this->input->post("txt_CodProducto");
        $NumFabricante = $this->input->post("txt_NumFabricante");
        $DescripcionProducto = $this->input->post("txt_DescripcionProducto");
        $Cantidad = $this->input->post("txt_Cantidad");
        $PrecioConIva = $this->input->post("txt_PrecioConIva");
        $Afecto = $this->input->post("txt_Afecto");
        $CuentaMayor = $this->input->post("txt_CuentaMayor");
        $CuentaCoste = $this->input->post("txt_CuentaCoste");
        $NormaReparto = $this->input->post("txt_NormaReparto");

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
				$datos_articulo['rs_articulo'] = $this->m_Factura->get_DetalleArticulo();
      //cargo la vista pasando los datos de configuracion
				$this->load->view('v_Head');
				$this->load->view('v_Header');
				$this->load->view("v_Menu",$data);
				$this->load->view('v_Factura',$datos_vista);
				$this->load->view("v_Factura_Model",$datos_articulo);
				$this->load->view('v_Foot');
			}
			else{
				$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">¡Datos incorrectos!</div>');
				redirect('c_Login/index');
			}	
		}
		else{
			if ($this->input->post('btn_guardar') == "Guardar"){
				$Factura_result = $this->m_Factura->pc_m_Factura_i($NumDoc,$Cliente,$Nombre,$IdTipo,$Cajero,$Vendedor,$CodVendedor,$FechaContable,$NumCaja,$VentaGravada,$VentaExenta,$VentaNoSujeta,$Iva,$Total,$DocType);            
                $tablaDetalle = array(
                    'IdFac' =>  $IdFac,
                    'LineaNumDoc' =>  $LineaNumDoc,
                    'IdProducto' =>  $IdProducto,
                    'CodProducto' =>  $CodProducto,
                    'NumFabricante' =>  $NumFabricante,
                    'DescripcionProducto' =>  $DescripcionProducto,
                    'Cantidad' =>  $Cantidad,
                    'PrecioConIva' =>  $PrecioConIva,
                    'Afecto' =>  $Afecto,
                    'CuentaMayor' =>  $CuentaMayor,
                    'CuentaCoste' =>  $CuentaCoste,
                    'NormaReparto' =>  $NormaReparto    
                );      
                $Detalle_result = $this->m_Factura->pc_m_DetalleFactura_i($tablaDetalle);
                        unset($_POST['txt_Cliente']);
						unset($_POST['txt_Nombre']);
						unset($_POST['txt_Cajero']);
						unset($_POST['txt_NumCaja']);
						unset($_POST['txt_DocType']);
						unset($_POST['txt_NumDoc']);
						unset($_POST['txt_IdTipo']);
						unset($_POST['txt_FechaContable']);
						unset($_POST['txt_CodVendedor']);
						unset($_POST['txt_Vendedor']);
						unset($_POST['DetalleFac_length']);
						unset($_POST['txt_Cantidad']);
						unset($_POST['txt_Afecta']);
						unset($_POST['txt_VentaGravada']);
						unset($_POST['txt_VentaExenta']);
						unset($_POST['txt_VentaNoSujeta']);
						unset($_POST['txt_Iva']);
						unset($_POST['txt_Total']);
						unset($_POST['btn_guardar']);
                        redirect('c_Factura/index');  
				}
			else{
				$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">¡Datos incorrectos!</div>');
				redirect('c_login/index');
			}
		}
	}
}
?> 
<script src="<?php echo base_url("js/v_Menu.js");?>"></script> 
</head>
<body>
  <nav class="navbar navbar-default sidebar" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="pull-left navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      <!--   <img border="0" src="<?php echo base_url('imagenes/logocyc.jpg'); ?>" width="63" height="75"/>   -->    
      </div>
      <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="#">
            <div><span style="font-size:16px;" class="pull-left showopacity glyphicon glyphicon-home"></span></div> 
            <div class="MenuPrincipal">Escritorio</div>
          </a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <div><span style="font-size:16px;" class="pull-left showopacity glyphicon glyphicon-th-list"></span></div>          
            <div class="MenuPrincipal">Venta<span class="caret"></span></div>
          </a>
          <ul class="dropdown-menu forAnimate" role="menu">
          </ul>
          <?php echo $activeTabVenta;?>
        </li> 
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <div><span style="font-size:16px;" class="pull-left showopacity glyphicon glyphicon-qrcode"></span></div>
            <div class="MenuPrincipal">Inventario<span class="caret"></span></div>
          </a>
          <ul class="dropdown-menu forAnimate" role="menu">
          </ul>
          <?php echo $activeTabInventario;?>
        </li>              
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <div><span style="font-size:16px;" class="pull-left showopacity glyphicon glyphicon-user"></span></div>
            <div class="MenuPrincipal">Usuario<span class="caret"></span></div>
          </a>
          <ul class="dropdown-menu forAnimate" role="menu">
          </ul>
          <?php echo $activeTabGUsuario;?>
        </li>          
        <li><a href="#">
          <div><span style="font-size:16px;" class="pull-left showopacity glyphicon glyphicon-tags"></span></div>
          <div class="MenuPrincipal">Generalidades</div>
        </a></li>
        <li class="desplazar"><a href="#">
          <div><span style="font-size:16px;" class="pull-left showopacity glyphicon glyphicon-off"></span></div>
          <div class= "MenuPrincipal">Desplazar Menú</div>
        </a></li>
      </ul>
    </div>
  </div>
</nav>
</body>
</html>
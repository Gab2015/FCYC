<link href="<?php echo base_url("css/css/v_Login.css");?>" rel="stylesheet" media="all">
<script src="<?php echo base_url("js/v_Login.js");?>"></script>
</head>
<body>
  <header class="Head">
     <div class="container">
          <nav class="row">     
               <div class="col-lg-12 col-xs-12 Head">
                    <h1 id="Head">SISTEMAS C&C</h1>
               </div>
          </nav>    
     </div>     
</header>  
  <br><br><br>
  <hr>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-xs-4">
      </div>
      <div class="col-lg-4 col-xs-11 well">
        <?php 
        $attributes = array("class" => "form-horizontal", "id" => "loginform", "name" => "loginform");
        echo form_open("c_Login/index", $attributes);?>
        <fieldset>
          <legend> <span class="inicio">BIENVENIDO</span></legend>
          <div class="form-group">
            <div class="row colbox">
              <div class="col-lg-4 col-xs-4">
                <label for="txt_username" class="control-label">Usuario</label>
              </div>
              <div class="col-lg-8 col-xs-8">
                <input class="form-control" id="txt_username" name="txt_username" placeholder="Usuario del sistema" type="text" value="<?php echo set_value('txt_username'); ?>" />
                <span class="text-danger"><?php echo form_error('txt_username'); ?></span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row colbox">
              <div class="col-lg-4 col-xs-4">
                <label for="txt_password" class="control-label">Contraseña</label>
              </div>
              <div class="col-lg-8 col-xs-8">
                <input class="form-control" id="txt_password" name="txt_password" placeholder="Contraseña" type="password" value="<?php echo set_value('txt_password'); ?>" />
                <span class="text-danger"><?php echo form_error('txt_password'); ?></span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-12 col-xs-12 text-center">
              <input id="btn_login" name="btn_login" type="submit" class="btn btn-primary" value="Acceder" />
              <input id="btn_cancel" name="btn_cancel" type="reset" class="btn btn-primary" value="Restablecer" />
            </div>
          </div>
        </fieldset>
        <?php echo form_close(); ?>
        <?php echo $this->session->flashdata('msg'); ?>
      </div>
    </div>
  </div> 
<br><br><br>
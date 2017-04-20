<link href="<?php echo base_url("css/css/v_Cuadros.css");?>" rel="stylesheet" media="all">
</head>
<body>              
     <div class="container">
          <div class="col-lg-4 col-xs-4">
          </div>	
          <div class="col-lg-6 col-xs-12">
               <h3>AGREGAR DEDUCCIÓN</h3>
          </div>	
     </div>
     <hr>
     <div class="container">
          <div class="row">
               <div class="col-lg-3 col-xs-2"> 
               </div>
               <div class="col-lg-5 col-xs-11 well">
               <?php 
                    $attributes = array("class" => "form-horizontal", "id" => "iCuadrosForm", "name" => "iCuadrosForm");
                    echo form_open("c_Cuadros/set_Cuadros", $attributes);?>     
                    <fieldset>
                         <legend> <span class="inicio">PÁRAMETROS</span></legend>
                         <div class="form-group">
                              <div class="row colbox">
                                   <div class="col-lg-4 col-xs-12">
                                        <label for="txt_Institucio" class="control-label">Institución</label>
                                   </div>
                                   <div class="col-lg-6 col-xs-12">
                                        <input class="form-control" id="txt_Institucio" name="txt_Institucio" placeholder="Tipo deducción" type="text" value="<?php echo set_value('txt_Institucio'); ?>" />
                                        <span class="text-danger"><?php echo form_error('txt_Institucio'); ?></span>
                                   </div>
                              </div>
                         </div> 
                         <div class="form-group">
                              <div class="row colbox">
                                   <div class="col-lg-4 col-xs-12">
                                        <label for="txt_Desde" class="control-lable">Desde</label>
                                   </div>
                                   <div class="col-lg-6 col-xs-12">
                                        <input class="form-control" id="txt_Desde" name="txt_Desde" placeholder="Formato 0.0000" type="text" value="<?php echo set_value('txt_Desde'); ?>"/>
                                        <span class="text-danger"><?php echo form_error('txt_Desde'); ?></span>
                                   </div>     
                              </div>
                         </div>
                         <div class="form-group">
                              <div class="row colbox">
                                   <div class="col-lg-4 col-xs-12">
                                        <label for="txt_Hasta" class="control-label">Hasta</label>
                                   </div>
                                   <div class="col-lg-6 col-xs-12">
                                        <input class="form-control" id="txt_Hasta" name="txt_Hasta" placeholder="Formato 0.0000" type="text" value="<?php echo set_value('txt_Hasta'); ?>" />
                                        <span class="text-danger"><?php echo form_error('txt_Hasta'); ?></span>
                                   </div>
                              </div>
                         </div> 
                         <div class="form-group">
                              <div class="row colbox">
                                   <div class="col-lg-4 col-xs-12">
                                        <label for="txt_Porcentaje" class="control-lable">Porcentaje</label>
                                   </div>
                                   <div class="col-lg-6 col-xs-12">
                                        <input class="form-control" id="txt_Porcentaje" name="txt_Porcentaje" placeholder="Formato 0.0000" type="text" value="<?php echo set_value('txt_Porcentaje'); ?>"/>
                                        <span class="text-danger"><?php echo form_error('txt_Porcentaje'); ?></span>
                                   </div>     
                              </div>
                         </div>
                         <div class="form-group">
                              <div class="row colbox">
                                   <div class="col-lg-4 col-xs-12">
                                        <label for="txt_Exceso" class="control-lable">Exceso</label>
                                   </div>
                                   <div class="col-lg-6 col-xs-12">
                                        <input class="form-control" id="txt_Exceso" name="txt_Exceso" placeholder="Formato 0.0000" type="text" value="<?php echo set_value('txt_Exceso'); ?>"/>
                                        <span class="text-danger"><?php echo form_error('txt_Exceso'); ?></span>
                                   </div>     
                              </div>
                         </div>  
                         <div class="form-group">
                              <div class="row colbox">
                                   <div class="col-lg-4 col-xs-12">
                                        <label for="txt_Mas" class="control-lable">Más</label>
                                   </div>
                                   <div class="col-lg-6 col-xs-12">
                                        <input class="form-control" id="txt_Mas" name="txt_Mas" placeholder="Formato 0.0000" type="text" value="<?php echo set_value('txt_Mas'); ?>"/>
                                        <span class="text-danger"><?php echo form_error('txt_Mas'); ?></span>
                                   </div>     
                              </div>
                         </div> 
                         <div class="form-group">
                              <div class="row colbox">
                                   <div class="col-lg-4 col-xs-12">
                                        <label for="txt_Comentario" class="control-lable">Comentario</label>
                                   </div>
                                   <div class="col-lg-6 col-xs-12">
                                        <input class="form-control" id="txt_Comentario" name="txt_Comentario" placeholder="Comentario" type="text" value="<?php echo set_value('txt_Comentario'); ?>"/>
                                        <span class="text-danger"><?php echo form_error('txt_Comentario'); ?></span>
                                   </div>     
                              </div>
                         </div>     
                         <div class="form-group">
                              <div class="row colbox">
                                   <div class="col-lg-4 col-xs-12">
                                        <label for="txt_Tipo" class="control-label">Tipo</label>
                                   </div>
                                   <div class="col-lg-6 col-xs-12">
                                        <input class="form-control" id="txt_Tipo" name="txt_Tipo" placeholder="Tipo de cobro" type="text" value="<?php echo set_value('txt_Tipo'); ?>" />
                                        <span class="text-danger"><?php echo form_error('txt_Tipo'); ?></span>
                                   </div>
                              </div>
                         </div>
                         <div class="form-group">
                              <div class="row colbox">
                                   <div class="col-lg-4 col-xs-12">
                                        <label for="txt_Fechaini" class="control-label">Fecha inicial</label>
                                   </div>
                                   <div class="col-lg-6 col-xs-12">
                                        <input class="form-control" id="txt_Fechaini" name="txt_Fechaini" placeholder="Fecha inicial" type="text" value="<?php echo set_value('txt_Fechaini'); ?>" />
                                        <span class="text-danger"><?php echo form_error('txt_Fechaini'); ?></span>
                                   </div>
                              </div>
                         </div>
                         <div class="form-group">
                              <div class="row colbox">
                                   <div class="col-lg-4 col-xs-12">
                                        <label for="txt_Fechafin" class="control-label">Fecha fin</label>
                                   </div>
                                   <div class="col-lg-6 col-xs-12">
                                        <input class="form-control" id="txt_Fechafin" name="txt_Fechafin" placeholder="Fecha fin" type="text" value="<?php echo set_value('txt_Fechafin'); ?>" />
                                        <span class="text-danger"><?php echo form_error('txt_Fechafin'); ?></span>
                                   </div>
                              </div>
                         </div>
                         <div class="form-group">
                              <div class="col-lg-12 col-xs-12 text-left">
                                   <button type="submit" name="Regresar" class="btn btn-primary" onclick="window.history.go(-1); return false;"><< Regresar</button>
                                   <input id="btn_guardar" name="btn_guardar" type="submit" class="btn btn-primary" value="Guardar" />
                              </div>
                         </div>
                    </fieldset>
                   <?php echo form_close(); ?>
                   <?php echo $this->session->flashdata('msg'); ?>
               </div>
          </div>
     </div>
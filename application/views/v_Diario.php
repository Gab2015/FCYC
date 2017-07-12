<div class="AreaTrabajo">  
	<?php   $attributes = array("class" => "form-horizontal", "id" => "DiarioForm", "name" => "DiarioForm");
	echo form_open("c_Diario/set_Diario", $attributes);?>     
	<br>
	<legend> 
		<span class="inicio">REPORTE DIARIO</span>
	</legend>
	<div style="clear: both;"></div>
	<br>
	<div class="row">
		<div class="col-lg-4 col-xs-2"> 
		</div>
		<div class="col-lg-4 col-xs-11 well"> 
			<fieldset>
				<?php 	
				foreach($rs_Diario['rs_Diario'] as $filaDiario){	
					?>
					<div class="form-group">
						<div class="row colbox">
							<div class="col-lg-4 col-xs-12">
								<label for="txt_NumCaja" class="control-lable">Caja #</label>
							</div>
							<div class="col-lg-6 col-xs-12">
								<select class="form-control" id="txt_NumCaja" name="txt_NumCaja">
									<option>1</option>
									<option>2</option>
								</select>
							</div>     
						</div>
					</div>
					<div class="form-group">
						<div class="row colbox">
							<div class="col-lg-4 col-xs-12">
								<label for="txt_NumDoc" class="control-lable">Ultimo reporte</label>
							</div>
							<div class="col-lg-6 col-xs-12">
								<input class="form-control" id="txt_NumDoc" name="txt_NumDoc" placeholder="NumDoc" type="text" value="<?php echo $filaDiario->NumDoc; ?>" readonly/>
								<span class="text-danger"><?php echo form_error('txt_NumDoc'); ?></span>
							</div>     
						</div>
					</div>
				</fieldset>
			</div>
		</div>         
		<div class="row">
			<div class="col-lg-4 col-xs-2"> 
			</div>
			<div class="col-lg-4 col-xs-11">
				<input id="btn_generar" name="btn_generar" type="submit" class="btn btn-primary" value="Generar" />
				<span style="float:left"><a class="btn btn-success" href="<?php echo base_url('');?>diario.php?Imprimir=true&vNumDoc=<?php echo $filaDiario->NumDoc;?>&vNumCaja=<?php echo $filaDiario->NumCaja;?>" target="_blank"><span id="Herramienta" class="glyphicon glyphicon-print"></span> Imprimir</a>&nbsp;</span>	 		
			</div>
		</div>
		<?php
	}
	?>
</div>
<br>
<?php echo form_close();
echo $this->session->flashdata('msg'); ?>
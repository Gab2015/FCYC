	<div class="AreaTrabajo">  
		<form method="post" action="<?php echo base_url('corte.php')?>" target="_blank">      
			<br>
			<legend> 
				<span class="inicio">REPORTE DE CAJA</span>
			</legend>
			<div class="row">
				<div class="col-lg-1 col-xs-2"> 
				</div>
				<div class="col-lg-4 col-xs-11 well">
					<fieldset>
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
									<label for="txt_FechaContable" class="control-lable">Fecha</label>
								</div>
								<div class="col-lg-6 col-xs-12">
									<input class="form-control" id="txt_FechaContable" name="txt_FechaContable" placeholder="Contable" type="text" value=""/>
								</div>     
							</div>
						</div>
					</fieldset>
				</div>
			</div>
			<div style="clear: both;"></div>  
			<hr class="Linea">
			<br>
			<div class="row">
				<div class="col-lg-6 col-xs-12">
					<button type="submit" name="Generar" class="btn btn-primary">Generar</button>		
				</div>
			</div>
		</form>
	</div>
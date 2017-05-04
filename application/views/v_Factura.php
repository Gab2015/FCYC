			<div class="AreaTrabajo">
				<form method="post" action="<?php echo base_url('exportarcyc.php')?>" target="_blank">            
					<br>
					<legend> 
						<span class="inicio">FACTURA CLIENTE</span>
					</legend>
					<div class="row">
						<div class="col-lg-1 col-xs-2"> 
						</div>
						<div class="col-lg-4 col-xs-11 well">
							<fieldset>
								<div class="form-group">
									<div class="row colbox">
										<div class="col-lg-4 col-xs-12">
											<label for="txt_Cliente" class="control-label">Cliente</label>
										</div>
										<div class="col-lg-6 col-xs-12">
											<input class="form-control" id="txt_Cliente" name="txt_Cliente" placeholder="C99999" type="text" value="<?php echo set_value('txt_Cliente'); ?>" />
											<span class="text-danger"><?php echo form_error('txt_Nombre'); ?></span>
										</div>
									</div>
								</div> 
								<div class="form-group">
									<div class="row colbox">
										<div class="col-lg-4 col-xs-12">
											<label for="txt_Nombre" class="control-lable">Nombre</label>
										</div>
										<div class="col-lg-6 col-xs-12">
											<input class="form-control" id="txt_Nombre" name="txt_Nombre" placeholder="Nombre" type="text" value="<?php echo set_value('txt_Nombre'); ?>"/>
											<span class="text-danger"><?php echo form_error('txt_Nombre'); ?></span>
										</div>     
									</div>
								</div>
								<div class="form-group">
									<div class="row colbox">
										<div class="col-lg-4 col-xs-12">
											<label for="txt_Cajero" class="control-label">Cajero</label>
										</div>
										<div class="col-lg-6 col-xs-12">
											<input class="form-control" id="txt_Cajero" name="txt_Cajero" placeholder="Cajero" type="text" value="<?php echo set_value('txt_Cajero'); ?>" />
											<span class="text-danger"><?php echo form_error('txt_Cajero'); ?></span>
										</div>
									</div>
								</div> 
								<div class="form-group">
									<div class="row colbox">
										<div class="col-lg-4 col-xs-12">
											<label for="txt_NumCaja" class="control-lable">Caja #</label>
										</div>
										<div class="col-lg-6 col-xs-12">
											<input class="form-control" id="txt_NumCaja" name="txt_NumCaja" placeholder="Caja #" type="text" value="<?php echo set_value('txt_NumCaja'); ?>"/>
											<span class="text-danger"><?php echo form_error('txt_NumCaja'); ?></span>
										</div>     
									</div>
								</div>
								<div class="form-group">
									<div class="row colbox">
										<div class="col-lg-4 col-xs-12">
											<label for="txt_DocType" class="control-lable">Documento</label>
										</div>
										<div class="col-lg-6 col-xs-12">
											<input class="form-control" id="txt_DocType" name="txt_DocType" placeholder="Tipo" type="text" value="<?php echo set_value('txt_DocType'); ?>"/>
											<span class="text-danger"><?php echo form_error('txt_DocType'); ?></span>
										</div>     
									</div>
								</div>  
							</fieldset>
						</div>
						<div class="col-lg-1 col-xs-2"> 
						</div>
						<div class="col-lg-3 col-xs-11 well">
							<fieldset>
								<div class="form-group">
									<div class="row colbox">
										<div class="col-lg-4 col-xs-12">
											<label for="txt_IdTipo" class="control-label">Serie</label>
										</div>
										<div class="col-lg-6 col-xs-12">
											<input class="form-control" id="txt_IdTipo" name="txt_IdTipo" placeholder="Tipo" type="text" value="<?php echo set_value('txt_IdTipo'); ?>" />
											<span class="text-danger"><?php echo form_error('txt_IdTipo'); ?></span>
										</div>
									</div>
								</div> 
								<div class="form-group">
									<div class="row colbox">
										<div class="col-lg-4 col-xs-12">
											<label for="txt_FechaContable" class="control-lable">Fecha</label>
										</div>
										<div class="col-lg-6 col-xs-12">
											<input class="form-control" id="txt_FechaContable" name="txt_FechaContable" placeholder="Contable" type="text" value="<?php echo set_value('txt_FechaContable'); ?>"/>
											<span class="text-danger"><?php echo form_error('txt_FechaContable'); ?></span>	
										</div>     
									</div>
								</div>
								<div class="form-group">
									<div class="row colbox">
										<div class="col-lg-4 col-xs-12">
											<label for="txt_CodVendedor" class="control-label">Código Vendedor</label>
										</div>
										<div class="col-lg-6 col-xs-12">
											<input class="form-control" id="txt_CodVendedor" name="txt_CodVendedor" placeholder="Código" type="text" value="<?php echo set_value('txt_CodVendedor'); ?>" />
											<span class="text-danger"><?php echo form_error('txt_CodVendedor'); ?></span>
										</div>
									</div>
								</div> 
								<div class="form-group">
									<div class="row colbox">
										<div class="col-lg-4 col-xs-12">
											<label for="txt_Vendedor" class="control-lable">Vendedor</label>
										</div>
										<div class="col-lg-6 col-xs-12">
											<input class="form-control" id="txt_Porcentaje" name="txt_Vendedor" placeholder="Vendedor" type="text" value="<?php echo set_value('txt_Vendedor'); ?>"/>
											<span class="text-danger"><?php echo form_error('txt_Vendedor'); ?></span>
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
							<span style="float:left"><a class="btn btn-primary" href="<?php echo base_url('c_Cuadros/c_Cuadros_i');?>"><span id="Herramienta" class="glyphicon glyphicon-plus"></span> Agregar</a>&nbsp;</span>	 
							<span style="float:left"><a class="btn btn-warning" href="<?php echo base_url('c_Cuadros/c_Cuadros_i');?>"><span id="Herramienta" class="glyphicon glyphicon-trash"></span> Remover</a>&nbsp;</span>	 
							<button type="submit" name="Imprimir" class="btn btn-success"><span id="Herramienta" class="glyphicon glyphicon-print"></span> Imprimir</button>		
						</div>
					</div>
					<br>
					<hr class="Linea">
					<br>
					<div class="row">
						<div class="col-lg-6 col-xs-12">
							<table id="DetalleFac" class="table-bordered table-striped table-condensed table-hover">
								<thead>
									<th class="hidden-md hidden-lg">IdDetFac</th>
									<th class="hidden-md hidden-lg">IdFac</th>
									<th class="hidden-md hidden-lg">IdProducto</th>
									<th class="hidden-md hidden-lg">CuentaMayor</th>
									<th class="hidden-md hidden-lg">CuentaCoste</th>
									<th class="hidden-md hidden-lg">NormaReparto</th>
									<th class="hidden-md hidden-lg">NumDoc</th>
									<th>#</th>
									<th></th>
									<th>Código</th>
									<th>Numero de Parte</th>
									<th>Descripción</th>
									<th>Cantidad</th>
									<th>Precio con IVA</th>
									<th>Afecto</th>
								</thead>
								<tbody>
									<?php
									$i = 0;
									foreach($rs_DetalleFactura as $fila){	
										echo '<tr>';
										echo '<td class="hidden-md hidden-lg">'.$fila->IdDetFac.'</td>';
										echo '<td class="hidden-md hidden-lg">'.$fila->IdFac.'</td>';
										echo '<td class="hidden-md hidden-lg">'.$fila->IdProducto.'</td>';
										echo '<td class="hidden-md hidden-lg">'.$fila->CuentaMayor.'</td>';
										echo '<td class="hidden-md hidden-lg">'.$fila->CuentaCoste.'</td>';
										echo '<td class="hidden-md hidden-lg">'.$fila->NormaReparto.'</td>';
										echo '<td class="hidden-md hidden-lg">'.$fila->NumDoc.'</td>';
										echo '<td>'.$i++.'</td>';
										echo '<td align="center"> <input type="checkbox" name="myTextEditBox" value="checked" ></td>';
										echo '<td>'.$fila->CodProducto.'</td>';
										echo '<td>'.$fila->NumFabricante.'</td>';
										echo '<td>'.$fila->DescripcionProducto.'</td>';
										echo '<td>'.$fila->Cantidad.'</td>';
										echo '<td>'.$fila->PrecioConIva.'</td>';
										echo '<td>'.$fila->Afecto.'</td>';
										echo '</tr>';
									}
									?>
								</tbody>
							</table>
						</div>
					</div>
					<hr class="Linea">
					<br>
					<div class="row">
						<div class="col-lg-6 col-xs-12">
							<span style="float:left"><a class="btn btn-primary" href="<?php echo base_url('c_Cuadros/c_Cuadros_i');?>"> Cancelar</a>&nbsp;</span>	 
							<span style="float:left"><a class="btn btn-warning" href="<?php echo base_url('c_Cuadros/c_Cuadros_i');?>"> Actualizar</a>&nbsp;</span>	 
							<span style="float:left"><a class="btn btn-success" href="<?php echo base_url('c_Cuadros/c_Cuadros_i');?>"> Guardar</a>&nbsp;</span>	 	
						</div>
					</div> 
				</div>
			</form>
			<footer>    
				<div class="col-lg-8 col-xs-12 Foot">
					<h1 id="Foot">SISTEMAS C&C
						<br>
						Derechos de Información 2017</h1>
					</div>
				</footer>	
			</body>
			</html>
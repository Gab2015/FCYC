			<div class="AreaTrabajo">
				<?php   $attributes = array("class" => "form-horizontal", "id" => "FacturaForm", "name" => "FacturaForm");
				echo form_open("c_Factura/set_Factura", $attributes);?>       
				<br>
				<legend> 
					<span class="inicio">FACTURA CLIENTE</span>
				</legend>
				<div class="row">
					<div class="col-lg-1 col-xs-2"> 
					</div>
					<div class="col-lg-4 col-xs-11 well">
						<fieldset>
							<?php 	
							foreach($rs_FacturaEnc['rs_Factura'] as $filaFactura){	
								?>
								<div class="form-group">
									<div class="row colbox">
										<div class="col-lg-4 col-xs-12">
											<label for="txt_Cliente" class="control-label">Cliente</label>
										</div>
										<div class="col-lg-8 col-xs-12">
											<input class="form-control" id="txt_Cliente" name="txt_Cliente" placeholder="C99999" type="text" value="<?php echo $filaFactura->Cliente; ?>" readonly/>
											<span class="text-danger"><?php echo form_error('txt_Nombre'); ?></span>
										</div>
									</div>
								</div> 
								<div class="form-group">
									<div class="row colbox">
										<div class="col-lg-4 col-xs-12">
											<label for="txt_Nombre" class="control-lable">Nombre</label>
										</div>
										<div class="col-lg-8 col-xs-12">
											<input class="form-control" id="txt_Nombre" name="txt_Nombre" placeholder="Nombre" type="text" value="<?php echo $filaFactura->Nombre; ?>"/>
											<span class="text-danger"><?php echo form_error('txt_Nombre'); ?></span>
										</div>     
									</div>
								</div>
								<div class="form-group">
									<div class="row colbox">
										<div class="col-lg-4 col-xs-12">
											<label for="txt_Cajero" class="control-lable">Cajero</label>
										</div>
										<div class="col-lg-8 col-xs-12">
											<select class="form-control" id="txt_Cajero" name="txt_Cajero">
												<option>EDWIN PORTILLO</option>
												<option>XAVIER JUAREZ</option>
											</select>
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
											<select class="form-control" id="txt_NumCaja" name="txt_NumCaja">
												<option>1</option>
												<option>2</option>
											</select>
											<span class="text-danger"><?php echo form_error('txt_NumCaja'); ?></span>
										</div>     
									</div>
								</div>
								<div class="hidden-md hidden-lg">
									<div class="row colbox">
										<div class="col-lg-4 col-xs-12">
											<label for="txt_DocType" class="control-lable">Documento</label>
										</div>
										<div class="col-lg-8 col-xs-12">
											<input class="form-control" id="txt_DocType" name="txt_DocType" placeholder="Tipo" type="text" value="<?php echo $filaFactura->DocType; ?>"/>
											<span class="text-danger"><?php echo form_error('txt_DocType'); ?></span>
										</div>     
									</div>
								</div>
								<div class="form-group">
									<div class="row colbox">
										<div class="col-lg-4 col-xs-12">
											<label for="txt_DUI" class="control-lable">DUI ó NIT venta mayor a $200</label>
										</div>
										<div class="col-lg-8 col-xs-12">
											<input class="form-control" id="txt_DUI" name="txt_DUI" placeholder="DUI ó NIT" type="text" value="<?php echo $filaFactura->DUI; ?>"/>
											<span class="text-danger"><?php echo form_error('txt_DUI'); ?></span>
										</div>     
									</div>
								</div>
								<div class="form-group">
									<div class="row colbox">
										<div class="col-lg-4 col-xs-12">
											<label for="txt_TipoPago" class="control-lable">Tipo Pago</label>
										</div>
										<div class="col-lg-8 col-xs-12">
											<select class="form-control" id="txt_TipoPago" name="txt_TipoPago">
												<option>Contado</option>
												<option>Crédito</option>
											</select>
											<span class="text-danger"><?php echo form_error('txt_TipoPago'); ?></span>
										</div>     
									</div>
								</div>    
							</fieldset>
						</div>
						<div class="col-lg-1 col-xs-2"> 
						</div>
						<div class="col-lg-4 col-xs-11 well">
							<fieldset>
								<div class="form-group">
									<div class="row colbox">
										<div class="col-lg-4 col-xs-12">
											<label for="txt_NumDoc" class="control-label">N° Documento</label>
										</div>
										<div class="col-lg-6 col-xs-12">
											<input class="form-control" id="txt_NumDoc" name="txt_NumDoc" placeholder="Numero" type="text" value="<?php echo $filaFactura->NumDoc; ?>" readonly/>
											<span class="text-danger"><?php echo form_error('txt_NumDoc'); ?></span>
										</div>
									</div>
								</div> 
								<div class="form-group">
									<div class="row colbox">
										<div class="col-lg-4 col-xs-12">
											<label for="txt_IdTipo" class="control-label">Serie</label>
										</div>
										<div class="col-lg-6 col-xs-12">
											<input class="form-control" id="txt_IdTipo" name="txt_IdTipo" placeholder="Tipo" type="text" value="<?php echo $filaFactura->Documento; ?>" readonly/>
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
											<input class="form-control" id="txt_FechaContable" name="txt_FechaContable" placeholder="Contable" type="text" value="<?php echo $filaFactura->FechaContable; ?>"/>
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
											<input class="form-control" id="txt_CodVendedor" name="txt_CodVendedor" placeholder="Código" type="text" value="<?php echo $filaFactura->CodVendedor; ?>" readonly/>
											<span class="text-danger"><?php echo form_error('txt_CodVendedor'); ?></span>
										</div>
									</div>
								</div> 
								<div class="form-group">
									<div class="row colbox">
										<div class="col-lg-4 col-xs-12">
											<label for="txt_Vendedor" class="control-lable">Vendedor</label>
										</div>
										<div class="col-lg-8 col-xs-12">
											<input class="form-control" id="txt_Vendedor" name="txt_Vendedor" placeholder="Vendedor" type="text" value="<?php echo $filaFactura->Vendedor; ?>" readonly/>
											<span class="text-danger"><?php echo form_error('txt_Vendedor'); ?></span>
										</div>     
									</div>
								</div>
								<div class="hidden-md hidden-lg">
									<div class="row colbox">
										<div class="col-lg-4 col-xs-12">
											<label for="txt_NextIdFac" class="control-lable">NextIdFac</label>
										</div>
										<div class="col-lg-8 col-xs-12">
											<input class="form-control" id="txt_NextIdFac" name="txt_NextIdFac" placeholder="NextIdFac" type="text" value="<?php echo $filaFactura->NextIdFac; ?>"/>
											<span class="text-danger"><?php echo form_error('txt_NextIdFac'); ?></span>
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
						<span style="float:left"><a id="Agregar" class="btn btn-primary" href="#"><span id="Herramienta" class="glyphicon glyphicon-plus"></span> Agregar</a>&nbsp;</span>	 
						<span style="float:left"><a id="Remover" class="btn btn-warning" href="#"><span id="Herramienta" class="glyphicon glyphicon-trash"></span> Remover</a>&nbsp;</span>	 
						<span style="float:left"><a class="btn btn-success" href="<?php echo base_url('');?>factura.php?Imprimir=true&vNumDoc=<?php echo $filaFactura->NumDoc; ?>" target="_blank"><span id="Herramienta" class="glyphicon glyphicon-print"></span> Imprimir</a>&nbsp;</span>	 
					</div>
				</div>
				<?php 
					}
				?>
				<br>
				<hr class="Linea">
				<br>
				<div class="row">
					<div class="col-lg-6 col-xs-12">
						<table id="DetalleFac" class="table-bordered table-striped table-condensed table-hover">
							<thead>
								<th class="hidden-md hidden-lg">IdFac</th>
								<th class="hidden-md hidden-lg">IdProducto</th>
								<th class="hidden-md hidden-lg">CuentaMayor</th>
								<th class="hidden-md hidden-lg">CuentaCoste</th>
								<th class="hidden-md hidden-lg">NormaReparto</th>
								<th class="hidden-md hidden-lg">NumDoc</th>
								<th class="hidden-md hidden-lg">Afecto</th>
								<th>#</th>
								<th><input class='check_Todas' type="checkbox"/></th>
								<th>Código</th>
								<th class="hidden-md hidden-lg">Numero de Parte</th>
								<th>Descripción</th>
								<th>Cantidad</th>
								<th>Precio Unitario</th>
								<th>Ventas Afectas</th>
							</thead>
							<tbody>
								<?php
								$i = 1;
								foreach($rs_DetalleFactura['rs_DetalleFactura'] as $filaDetalle){
									echo '<tr>';
					                echo '<td class="hidden-md hidden-lg"><input class="LineaCampo" id="txt_IdFac" name="txt_IdFac[]" placeholder="IdFac" type="text" value="'.$filaDetalle->IdFac.'" readonly/></td>';
									echo '<td class="hidden-md hidden-lg"><input class="LineaCampo" id="txt_IdProducto" name="txt_IdProducto[]" placeholder="IdProducto" type="text" value="'.$filaDetalle->IdProducto.'" readonly/></td>';
									echo '<td class="hidden-md hidden-lg"><input class="LineaCampo" id="txt_CuentaMayor" name="txt_CuentaMayor[]" placeholder="CuentaMayor" type="text" value="'.$filaDetalle->CuentaMayor.'" readonly/></td>';
									echo '<td class="hidden-md hidden-lg"><input class="LineaCampo" id="txt_CuentaCoste" name="txt_CuentaCoste[]" placeholder="CuentaCoste" type="text" value="'.$filaDetalle->CuentaCoste.'" readonly/></td>';
									echo '<td class="hidden-md hidden-lg"><input class="LineaCampo" id="txt_NormaReparto" name="txt_NormaReparto[]" placeholder="NormaReparto" type="text" value="'.$filaDetalle->NormaReparto.'" readonly/></td>';
									echo '<td class="hidden-md hidden-lg"><input class="LineaCampo" id="txt_LineaNumDoc" name="txt_LineaNumDoc[]" placeholder="LineaNumDoc" type="text" value="'.$filaDetalle->NumDoc.'" readonly/></td>';
									echo '<td class="hidden-md hidden-lg"><input class="LineaCampo" id="txt_Afecto" name="txt_Afecto[]" placeholder="Afecto" type="text" value="'.$filaDetalle->Afecto.'" readonly/></td>';
									echo '<td><span id="snum">'.$i.'</span></td>';
									echo '<td> <input type="checkbox" class="FilaMarcada"></td>';
									echo '<td><input class="LineaCampo" id="txt_CodProducto" name="txt_CodProducto[]" placeholder="Codigo" type="text" value="'.$filaDetalle->CodProducto.'" readonly/></td>';
									echo '<td class="hidden-md hidden-lg"><input class="LineaCampo" id="txt_NumFabricante" name="txt_NumFabricante[]" placeholder="NumFabricante" type="text" value="'.$filaDetalle->NumFabricante.'" readonly/></td>';
									echo '<td><input class="LineaCampo" id="txt_DescripcionProducto" name="txt_DescripcionProducto[]" placeholder="DescripcionProducto" type="text" value="'.$filaDetalle->DescripcionProducto.'" readonly/></td>';
									echo '<td><input class="form-control" id="txt_Cantidad" name="txt_Cantidad[]" placeholder="Cantidad" type="text" value="'.$filaDetalle->Cantidad.'"/></td>';
									echo '<td><input class="LineaCampo" id="txt_PrecioConIva" name="txt_PrecioConIva[]" placeholder="PrecioConIva" type="text" value="'.number_format($filaDetalle->PrecioConIva,2,".",",").'" readonly/></td>';
									echo '<td><input class="form-control" id="txt_Afecta" name="txt_Afecta[]" placeholder="Total" type="text" value="'.$filaDetalle->Cantidad*number_format($filaDetalle->PrecioConIva,2,".",",").'" readonly/></td>';
									echo '</tr>';
									$i++;
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
				<hr class="Linea">
				<br>
				<div class="row">
					<div class="col-lg-6 col-xs-2"> 
					</div>
					<div class="col-lg-4 col-xs-11 well">
						<?php
						foreach($rs_FacturaPie['rs_Factura'] as $filaPie){
							?>
							<fieldset>
								<div class="form-group">
									<div class="row colbox">
										<div class="col-lg-4 col-xs-12">
											<label for="txt_VentaGravada" class="control-label">Venta Gravada</label>
										</div>
										<div class="col-lg-6 col-xs-12">
											<input class="form-control" id="txt_VentaGravada" name="txt_VentaGravada" placeholder="Venta Gravada" type="text" value="<?php echo $filaPie->VentaGravada; ?>" readonly/>
											<span class="text-danger"><?php echo form_error('txt_VentaGravada'); ?></span>
										</div>
									</div>
								</div> 
								<div class="form-group">
									<div class="row colbox">
										<div class="col-lg-4 col-xs-12">
											<label for="txt_VentaExenta" class="control-lable">Venta Exenta</label>
										</div>
										<div class="col-lg-6 col-xs-12">
											<input class="form-control" id="txt_VentaExenta" name="txt_VentaExenta" placeholder="Venta Exenta" type="text" value="<?php echo $filaPie->VentaExenta; ?>" readonly/>
											<span class="text-danger"><?php echo form_error('txt_VentaExenta'); ?></span>	
										</div>     
									</div>
								</div>
								<div class="form-group">
									<div class="row colbox">
										<div class="col-lg-4 col-xs-12">
											<label for="txt_VentaNoSujeta" class="control-label">Venta No Sujeta</label>
										</div>
										<div class="col-lg-6 col-xs-12">
											<input class="form-control" id="txt_VentaNoSujeta" name="txt_VentaNoSujeta" placeholder="No Sujeta" type="text" value="<?php echo $filaPie->VentaNoSujeta; ?>" readonly/>
											<span class="text-danger"><?php echo form_error('txt_VentaNoSujeta'); ?></span>
										</div>
									</div>
								</div> 
								<div class="hidden-md hidden-lg">
									<div class="row colbox">
										<div class="col-lg-4 col-xs-12">
											<label for="txt_Iva" class="control-lable">IVA</label>
										</div>
										<div class="col-lg-6 col-xs-12">
											<input class="form-control" id="txt_Iva" name="txt_Iva" placeholder="IVA" type="text" value="<?php echo $filaPie->Iva; ?>" readonly/>
											<span class="text-danger"><?php echo form_error('txt_Iva'); ?></span>
										</div>     
									</div>
								</div>
								<div class="form-group">
									<div class="row colbox">
										<div class="col-lg-4 col-xs-12">
											<label for="txt_Total" class="control-lable">Total</label>
										</div>
										<div class="col-lg-6 col-xs-12">
											<input class="form-control" id="txt_Total" name="txt_Total" placeholder="Total" type="text" value="<?php echo $filaPie->Total; ?>" readonly/>
											<span class="text-danger"><?php echo form_error('txt_Total'); ?></span>
										</div>     
									</div>
								</div>
							</fieldset>
							<?php
						}
						?>
					</div>
				</div>
				<br>	
				<hr class="Linea">
				<br>
				<div class="row">
					<div class="col-lg-6 col-xs-12">
						<span style="float:left"><a id="btn_nuevo" class="btn btn-warning" href="<?php echo base_url('');?>c_Factura/index?Nuevo=true" ><span id="Herramienta"></span> Nuevo</a>&nbsp;</span>	 
						<input id="btn_guardar" name="btn_guardar" type="submit" class="btn btn-success" value="Guardar" />
					</div>
				</div>
				<br> 
			</div>
			<?php echo form_close();
			echo $this->session->flashdata('msg'); ?>
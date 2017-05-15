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
							    foreach($rs_Factura['rs_Factura'] as $filaFactura){	
							?>
								<div class="form-group">
									<div class="row colbox">
										<div class="col-lg-4 col-xs-12">
											<label for="txt_NumDoc" class="control-label">N° Documento</label>
										</div>
										<div class="col-lg-8 col-xs-12">
											<input class="form-control" id="txt_NumDoc" name="txt_NumDoc" placeholder="Numero" type="text" value="<?php echo $filaFactura->NumDoc; ?>" readonly/>
											<span class="text-danger"><?php echo form_error('txt_NumDoc'); ?></span>
										</div>
									</div>
								</div> 
								<div class="form-group">
									<div class="row colbox">
										<div class="col-lg-4 col-xs-12">
											<label for="txt_Cliente" class="control-label">Cliente</label>
										</div>
										<div class="col-lg-8 col-xs-12">
											<input class="form-control" id="txt_Cliente" name="txt_Cliente" placeholder="C99999" type="text" value="<?php echo $filaFactura->Cliente; ?>" />
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
											<label for="txt_Cajero" class="control-label">Cajero</label>
										</div>
										<div class="col-lg-8 col-xs-12">
											<input class="form-control" id="txt_Cajero" name="txt_Cajero" placeholder="Cajero" type="text" value="<?php echo $filaFactura->Cajero; ?>" />
											<span class="text-danger"><?php echo form_error('txt_Cajero'); ?></span>
										</div>
									</div>
								</div> 
								<div class="form-group">
									<div class="row colbox">
										<div class="col-lg-4 col-xs-12">
											<label for="txt_NumCaja" class="control-lable">Caja #</label>
										</div>
										<div class="col-lg-8 col-xs-12">
											<input class="form-control" id="txt_NumCaja" name="txt_NumCaja" placeholder="Caja #" type="text" value="<?php echo $filaFactura->NumCaja; ?>"/>
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
							</fieldset>
						</div>
						<div class="col-lg-1 col-xs-2"> 
						</div>
						<div class="col-lg-4 col-xs-11 well">
							<fieldset>
								<div class="form-group">
									<div class="row colbox">
										<div class="col-lg-4 col-xs-12">
											<label for="txt_IdTipo" class="control-label">Serie</label>
										</div>
										<div class="col-lg-6 col-xs-12">
											<input class="form-control" id="txt_IdTipo" name="txt_IdTipo" placeholder="Tipo" type="text" value="<?php echo $filaFactura->Documento; ?>" />
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
											<input class="form-control" id="txt_CodVendedor" name="txt_CodVendedor" placeholder="Código" type="text" value="<?php echo $filaFactura->CodVendedor; ?>" />
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
											<input class="form-control" id="txt_Vendedor" name="txt_Vendedor" placeholder="Vendedor" type="text" value="<?php echo $filaFactura->Vendedor; ?>"/>
											<span class="text-danger"><?php echo form_error('txt_Vendedor'); ?></span>
										</div>     
									</div>
								</div>
							</fieldset>
							<?php 
                               }
							?>
						</div>
					</div>
					<div style="clear: both;"></div>  
					<hr class="Linea">
					<br>
					<div class="row">
						<div class="col-lg-6 col-xs-12">
							<span style="float:left"><a class="btn btn-primary" href="<?php echo base_url('c_Cuadros/c_Cuadros_i');?>"><span id="Herramienta" class="glyphicon glyphicon-plus"></span> Agregar</a>&nbsp;</span>	 
							<span style="float:left"><a class="btn btn-warning" href="<?php echo base_url('c_Cuadros/c_Cuadros_i');?>"><span id="Herramienta" class="glyphicon glyphicon-trash"></span> Remover</a>&nbsp;</span>	 
                            <span style="float:left"><a class="btn btn-success" href="<?php echo base_url('factura.php?Imprimir=true');?>" target="_blank"><span id="Herramienta" class="glyphicon glyphicon-print"></span> Imprimir</a>&nbsp;</span>	 
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
									<th class="hidden-md hidden-lg">Afecto</th>
									<th>#</th>
									<th></th>
									<th>Código</th>
									<th>Numero de Parte</th>
									<th>Descripción</th>
									<th>Cantidad</th>
									<th>Precio con IVA</th>
									<th>Ventas Afectas</th>
								</thead>
								<tbody>
							    <?php
                                    $i = 1;
								    foreach($rs_DetalleFactura['rs_DetalleFactura'] as $filaDetalle){
										echo '<tr>';
										echo '<td class="hidden-md hidden-lg">'.$filaDetalle->IdDetFac.'</td>';
										echo '<td class="hidden-md hidden-lg">'.$filaDetalle->IdFac.'</td>';
										echo '<td class="hidden-md hidden-lg">'.$filaDetalle->IdProducto.'</td>';
										echo '<td class="hidden-md hidden-lg">'.$filaDetalle->CuentaMayor.'</td>';
										echo '<td class="hidden-md hidden-lg">'.$filaDetalle->CuentaCoste.'</td>';
										echo '<td class="hidden-md hidden-lg">'.$filaDetalle->NormaReparto.'</td>';
										echo '<td class="hidden-md hidden-lg">'.$filaDetalle->NumDoc.'</td>';
										echo '<td class="hidden-md hidden-lg">'.$filaDetalle->Afecto.'</td>';
										echo '<td>'.$i.'</td>';
										echo '<td align="center"> <input type="checkbox" name="txt_Checkbox" value="checked" ></td>';
										echo '<td>'.$filaDetalle->CodProducto.'</td>';
										echo '<td>'.$filaDetalle->NumFabricante.'</td>';
										echo '<td>'.$filaDetalle->DescripcionProducto.'</td>';
										echo '<td><input class="form-control" id="txt_Cantidad" name="txt_Cantidad" placeholder="Cantidad" type="text" value="'.number_format($filaDetalle->Cantidad,2,".",",").'"/></td>';
										echo '<td class="txt_PrecioConIva">'.number_format($filaDetalle->PrecioConIva,2,".",",").'</td>';
										echo '<td><input class="form-control" id="txt_Total" name="txt_Total" placeholder="Total" type="text" value="" readonly/></td>';
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

							foreach($rs_Factura['rs_Factura'] as $filaPie){
						?>
							<fieldset>
								<div class="form-group">
									<div class="row colbox">
										<div class="col-lg-4 col-xs-12">
											<label for="txt_VentaGravada" class="control-label">Venta Gravada</label>
										</div>
										<div class="col-lg-6 col-xs-12">
											<input class="form-control" id="txt_VentaGravada" name="txt_VentaGravada" placeholder="Venta Gravada" type="text" value="<?php echo number_format($filaPie->VentaGravada,2,".",","); ?>" readonly/>
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
											<input class="form-control" id="txt_VentaExenta" name="txt_VentaExenta" placeholder="Venta Exenta" type="text" value="<?php echo number_format($filaPie->VentaExenta,2,".",","); ?>" readonly/>
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
											<input class="form-control" id="txt_VentaNoSujeta" name="txt_VentaNoSujeta" placeholder="No Sujeta" type="text" value="<?php echo number_format($filaPie->VentaNoSujeta,2,".",","); ?>" readonly/>
											<span class="text-danger"><?php echo form_error('txt_VentaNoSujeta'); ?></span>
										</div>
									</div>
								</div> 
								<div class="form-group">
									<div class="row colbox">
										<div class="col-lg-4 col-xs-12">
											<label for="txt_Iva" class="control-lable">IVA</label>
										</div>
										<div class="col-lg-6 col-xs-12">
											<input class="form-control" id="txt_Iva" name="txt_Iva" placeholder="IVA" type="text" value="<?php echo number_format($filaPie->Iva,2,".",","); ?>" readonly/>
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
											<input class="form-control" id="txt_Total" name="txt_Total" placeholder="Total" type="text" value="<?php echo number_format($filaPie->Total,2,".",","); ?>" readonly/>
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
							<span style="float:left"><a class="btn btn-primary" href="<?php echo base_url('c_Cuadros/c_Cuadros_i');?>"> Cancelar</a>&nbsp;</span>	 
							<span style="float:left"><a class="btn btn-warning" href="<?php echo base_url('c_Cuadros/c_Cuadros_i');?>"> Actualizar</a>&nbsp;</span>	 
						    <input id="btn_guardar" name="btn_guardar" type="submit" class="btn btn-success" value="Guardar" />
						</div>
					</div>
					<br> 
				</div>
                <?php echo form_close();
                echo $this->session->flashdata('msg'); ?>
			<footer>    
				<div class="col-lg-8 col-xs-12 Foot">
					<h1 id="Foot">SISTEMAS C&C
						<br>
						Derechos de Información 2017</h1>
					</div>
				</footer>	
			</body>
			</html>
	<form method="post" action="<?php echo base_url('exportarcyc.php')?>" target="_blank">            
		<br>
		<legend> 
			<span class="inicio">FACTURA CLIENTE</span>
		</legend>
		<div class="AreaTrabajo">
			<hr class="Linea">
			<br>
			<div class="row Herramientas">
				<div class="col-lg-6 col-xs-12">
					<span style="float:left"><a class="btn btn-primary" href="<?php echo base_url('c_Cuadros/c_Cuadros_i');?>"><span id="Herramienta" class="glyphicon glyphicon-plus"></span> Agregar</a>&nbsp;</span>	 
					<span style="float:left"><a class="btn btn-warning" href="<?php echo base_url('c_Cuadros/c_Cuadros_i');?>"><span id="Herramienta" class="glyphicon glyphicon-trash"></span> Remover</a>&nbsp;</span>	 
					<button type="submit" name="Imprimir" class="btn btn-success"><span id="Herramienta" class="glyphicon glyphicon-print"></span> Imprimir</button>		
				</div>
			</div>
			<hr class="Linea">
			<br>
			<div class="row Detalle">
				<div class="col-lg-6 col-xs-12">
					<table id="DetalleFac" class="table-bordered table-striped table-condensed table-hover">
						<thead><th>IdFac</th><th>NumDoc</th><th>Cliente</th><th>Nombre</th><th>IdTipo</th><th>Cajero</th><th>Vendedor</th><th>CodVendedor</th><th>FechaContable</th><th>NumCaja</th><th>VentaGravada</th><th>VentaExenta</th><th>VentaNoSujeta</th><th>Iva</th><th>Total</th><th>DocType</th></thead>
						<tbody>
							<?php
							foreach($rs_Factura as $fila){	
								echo '<tr>';
								echo '<td>'.$fila->IdFac.'</td>';
								echo '<td>'.$fila->NumDoc.'</td>';
								echo '<td>'.$fila->Cliente.'</td>';
								echo '<td>'.$fila->Nombre.'</td>';
								echo '<td>'.$fila->IdTipo.'</td>';
								echo '<td>'.$fila->Cajero.'</td>';
								echo '<td>'.$fila->Vendedor.'</td>';
								echo '<td>'.$fila->CodVendedor.'</td>';
								echo '<td>'.$fila->FechaContable.'</td>';
								echo '<td>'.$fila->NumCaja.'</td>';
								echo '<td>'.$fila->VentaGravada.'</td>';
								echo '<td>'.$fila->VentaExenta.'</td>';
								echo '<td>'.$fila->VentaNoSujeta.'</td>';
								echo '<td>'.$fila->Iva.'</td>';
								echo '<td>'.$fila->Total.'</td>';
								echo '<td>'.$fila->DocType.'</td>';
								echo '</tr>';
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
			<hr class="Linea">
			<br>
			<div class="row Herramientas">
				<div class="col-lg-6 col-xs-12">
					<span style="float:left"><a class="btn btn-primary" href="<?php echo base_url('c_Cuadros/c_Cuadros_i');?>"> Cancelar</a>&nbsp;</span>	 
					<span style="float:left"><a class="btn btn-warning" href="<?php echo base_url('c_Cuadros/c_Cuadros_i');?>"> Actualizar</a>&nbsp;</span>	 
					<span style="float:left"><a class="btn btn-success" href="<?php echo base_url('c_Cuadros/c_Cuadros_i');?>"> Guardar</a>&nbsp;</span>	 	
				</div>
			</div>
		</div>
	</div>		
</form>
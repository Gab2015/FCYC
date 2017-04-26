	<form method="post" action="<?php echo base_url('exportarcyc.php')?>" target="_blank">            
		<br>
		<legend> 
			<span class="inicio">FACTURA CLIENTE</span>
		</legend>
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-xs-1">
				</div>	
				<div class="col-lg-6 col-xs-12 text-left">
					<br>
					<span style="float:left"><a class="btn btn-primary" href="<?php echo base_url('c_Cuadros/c_Cuadros_i');?>"><span class="glyphicon glyphicon-plus"></span> Agregar</a>&nbsp;</span>	 
					<span style="float:left"><a class="btn btn-warning" href="<?php echo base_url('c_Cuadros/c_Cuadros_i');?>"><span class="glyphicon glyphicon-trash"></span> Remover</a>&nbsp;</span>	 
					<button type="submit" name="Imprimir" class="btn btn-success"><span class="glyphicon glyphicon-print"></span> Imprimir</button>		
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-xs-8">
				</div>
				<div class="col-lg-6 col-xs-12">
					<table class="table-bordered table-striped table-condensed table-hover">
						<thead><th>FACTURA</th><th>CLIENTE</th></thead>
						<tbody>
							<?php
							foreach($rs_Factura as $fila){
								echo '<tr>';
								echo '<td>'.$fila->NumDoc.'</td>';
								echo '<td>'.$fila->Cliente.'</td>';
								echo '</tr>';
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</form>
   </body>
</html>
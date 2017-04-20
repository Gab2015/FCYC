<link href="<?php echo base_url("css/css/v_Cuadros.css");?>" rel="stylesheet" media="all">
<script src="<?php echo base_url("js/v_Cuadros.js");?>"></script>
</head>
<body>
	<div class="container">
		<div class="col-lg-3 col-xs-4">
		</div>	
		<div class="col-lg-6 col-xs-12">
			<h3>MANTENIMIENTO DE CUADROS</h3>
		</div>	
	</div>
	<hr>
	<div class="container">
		<div class="col-lg-10 col-xs-12">
			<div class="panel with-nav-tabs panel-primary">
				<div class="panel-heading">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#" class="tablinks" data-toggle="tab" id="PestanaIsss">ISSS</a></li>
						<li><a href="#" class="tablinks" data-toggle="tab" id="PestanaAFP">AFP</a></li>
						<li><a href="#" class="tablinks" data-toggle="tab" id="PestanaRenta">RENTA</a></li>
						<li><a href="#" class="tablinks" data-toggle="tab" id="PestanaDias">DÍAS</a></li>
						<li><a href="#" class="tablinks" data-toggle="tab" id="PestanaAgui">AGUINALDO</a></li>
					</ul>
				</div>
				<div class="panel-body">
					<div id="Isss" class="tab-content">
						<div class="tab-pane fade in active">
						   <div class="col-lg-12 col-xs-12">
						   	<span style="float:left"><a class="btn btn-primary" href="<?php echo base_url('c_Cuadros/c_Cuadros_i');?>"><span class="glyphicon glyphicon-plus"></span> Agregar</a></span>
							<br>
							<br>
							<table class="table-bordered table-striped table-condensed table-hover">
								<thead><th class="text-center">INSTITUCIÓN</th><th>DESDE</th><th class="text-center">HASTA</th>
									<th class="text-center">%</th><th class="text-center">EXCESO</th><th class="text-center">MÁS</th><th class="text-center">FORMA DE CÁLCULO</th>
									<th class="text-center">INICIA</th><th class="text-center">FINALIZA</th><th class="text-center">ACCIONES</th></thead>
									<tbody>
										<?php	
										foreach($rs_Isss as $fila){ ?>
											<tr>
											<td><?php echo $fila->Institucio; ?></td>
											<td><?php echo number_format($fila->Desde,2,".",","); ?></td>
											<td><?php echo number_format($fila->Hasta,2,".",","); ?></td>
											<td><?php echo number_format($fila->Porcentaje,5,"."," "); ?></td>
											<td><?php echo number_format($fila->Exceso,2,".",","); ?></td>
											<td><?php echo number_format($fila->Mas,2,".",","); ?></td>
											<td><?php echo $fila->Tipo; ?></td>
											<td><?php echo $fila->Fechaini; ?></td>
											<td><?php echo $fila->Fechafin; ?></td>
											<td>
                                            <span class="pull-left"><a class="btn btn-primary" href="update.php?id='.$row['id'].'"><span class="glyphicon glyphicon-pencil"></span></a></span>
                                            <span class="pull-left"><a class="btn btn-danger" href="delete.php?id='.$row['id'].'"><span class="glyphicon glyphicon-trash"></span></a></span>
                                            </td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div id="AFP" class="tab-content">
						<div class="tab-pane fade">
						   <div class="col-lg-12 col-xs-12">
						   	<span style="float:left"><a class="btn btn-primary" href="delete.php?id='.$row['id'].'"><span class="glyphicon glyphicon-plus"></span> Agregar</a></span>
							<br>
							<br>
							<table class="table-bordered table-striped table-condensed table-hover">
								<thead><th class="text-center">INSTITUCIÓN</th><th class="text-center">DESDE</th><th class="text-center">HASTA</th>
									<th class="text-center">%</th><th class="text-center">EXCESO</th><th class="text-center">MÁS</th><th class="text-center">FORMA DE CÁLCULO</th>
									<th class="text-center">INICIA</th><th class="text-center">FINALIZA</th><th class="text-center">ACCIONES</th></thead>
									<tbody>
										<?php	
										foreach($rs_AFP as $fila){ ?>
											<tr>
											<td><?php echo $fila->Institucio; ?></td>
											<td><?php echo number_format($fila->Desde,2,".",","); ?></td>
											<td><?php echo number_format($fila->Hasta,2,".",","); ?></td>
											<td><?php echo number_format($fila->Porcentaje,4,"."," "); ?></td>
											<td><?php echo number_format($fila->Exceso,2,".",","); ?></td>
											<td><?php echo number_format($fila->Mas,2,".",","); ?></td>
											<td><?php echo $fila->Tipo; ?></td>
											<td><?php echo $fila->Fechaini; ?></td>
											<td><?php echo $fila->Fechafin; ?></td>
											<td>
                                            <span class="pull-left"><a class="btn btn-primary" href="update.php?id='.$row['id'].'"><span class="glyphicon glyphicon-pencil"></span></a></span>
                                            <span class="pull-left"><a class="btn btn-danger" href="delete.php?id='.$row['id'].'"><span class="glyphicon glyphicon-trash"></span></a></span>
                                            </td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div id="Renta" class="tab-content">
						<div class="tab-pane fade">
						   <div class="col-lg-12 col-xs-12">
						   	<span style="float:left"><a class="btn btn-primary" href="delete.php?id='.$row['id'].'"><span class="glyphicon glyphicon-plus"></span> Agregar</a></span>
							<br>
							<br>
							<table class="table-bordered table-striped table-condensed table-hover">
								<thead><th class="text-center">TIPO</th><th class="text-center">DESDE</th><th class="text-center">HASTA</th>
									<th class="text-center">%</th><th class="text-center">EXCESO</th><th class="text-center">MÁS</th><th class="text-center">FORMA DE CÁLCULO</th>
									<th class="text-center">INICIA</th><th class="text-center">FINALIZA</th><th class="text-center">ACCIONES</th></thead>
									<tbody>
										<?php	
										foreach($rs_Renta as $fila){ ?>
											<tr>
											<td><?php echo $fila->Institucio; ?></td>
											<td><?php echo number_format($fila->Desde,2,".",","); ?></td>
											<td><?php echo number_format($fila->Hasta,2,".",","); ?></td>
											<td><?php echo number_format($fila->Porcentaje,4,"."," "); ?></td>
											<td><?php echo number_format($fila->Exceso,2,".",","); ?></td>
											<td><?php echo number_format($fila->Mas,2,".",","); ?></td>
											<td><?php echo $fila->Tipo; ?></td>
											<td><?php echo $fila->Fechaini; ?></td>
											<td><?php echo $fila->Fechafin; ?></td>
											<td>
                                            <span class="pull-left"><a class="btn btn-primary" href="update.php?id='.$row['id'].'"><span class="glyphicon glyphicon-pencil"></span></a></span>
                                            <span class="pull-left"><a class="btn btn-danger" href="delete.php?id='.$row['id'].'"><span class="glyphicon glyphicon-trash"></span></a></span>
                                            </td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				    <div id="Dias" class="tab-content">
						<div class="tab-pane fade">
						   <div class="col-lg-12 col-xs-12">
						   	<span style="float:left"><a class="btn btn-primary" href="delete.php?id='.$row['id'].'"><span class="glyphicon glyphicon-plus"></span> Agregar</a></span>
							<br>
							<br>
							<table class="table-bordered table-striped table-condensed table-hover">
								<thead><th class="text-center">TIPO</th><th class="text-center">DESDE</th><th class="text-center">HASTA</th>
									<th class="text-center">%</th><th class="text-center">ACCIONES</th></thead>
									<tbody>
										<?php	
										foreach($rs_Dias as $fila){ ?>
											<tr>
											<td><?php echo $fila->Institucio; ?></td>
											<td><?php echo number_format($fila->Desde,0,"",","); ?></td>
											<td><?php echo number_format($fila->Hasta,0,"",","); ?></td>
											<td><?php echo number_format($fila->Porcentaje,4,"."," "); ?></td>
											<td>
                                            <span class="pull-left"><a class="btn btn-primary" href="update.php?id='.$row['id'].'"><span class="glyphicon glyphicon-pencil"></span></a></span>
                                            <span class="pull-left"><a class="btn btn-danger" href="delete.php?id='.$row['id'].'"><span class="glyphicon glyphicon-trash"></span></a></span>
                                            </td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div id="Agui" class="tab-content">
						<div class="tab-pane fade">
						   <div class="col-lg-12 col-xs-12">
						   	<span style="float:left"><a class="btn btn-primary" href="delete.php?id='.$row['id'].'"><span class="glyphicon glyphicon-plus"></span> Agregar</a></span>
							<br>
							<br>
							<table class="table-bordered table-striped table-condensed table-hover">
								<thead><th class="text-center">TIPO</th><th class="text-center">DESDE</th><th class="text-center">HASTA</th>
									<th class="text-center">DÍAS</th><th class="text-center">ACCIONES</th></thead>
									<tbody>
										<?php	
										foreach($rs_Agui as $fila){ ?>	
										<tr>
										<td><?php echo $fila->Institucio ?></td>
										<td><?php echo number_format($fila->Desde,0," ",","); ?></td>
										<td><?php echo number_format($fila->Hasta,0," ",","); ?></td>
										<td><?php echo number_format($fila->Mas,0," ",","); ?></td>
										<td>
                                        <span class="pull-left"><a class="btn btn-primary" href="update.php?id='.$row['id'].'"><span class="glyphicon glyphicon-pencil"></span></a></span>
                                        <span class="pull-left"><a class="btn btn-danger" href="delete.php?id='.$row['id'].'"><span class="glyphicon glyphicon-trash"></span></a></span>
                                        </td>
									    </tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>	 
			</div>
				<div class="container">
					<div class="col-lg-2 col-xs-1">
					</div>	
					<div class="col-lg-6 col-xs-12 text-left">
						<br>  	 
						<button type="submit" name="Regresar" class="btn btn-primary" onclick="window.history.go(-1); return false;"><< Regresar</button>
					</div>
				</div>
			</div>
		</div>
		<br>
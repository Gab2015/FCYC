<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sistema planillero</title>
	<link href="<?php echo base_url("css/css/bootstrap.css");?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url("css/css/sistemascyc.css")?>" rel="stylesheet" media="all">
    <link rel="icon" type="image/jpg" href="<?php echo base_url("imagenes/favicon.jpg");?>">
</head>
<body>
<form method="post" action="<?php echo base_url('exportarcyc.php')?>">	
	<h1>Bienvenido a mi web</h1>
	<p>Estos son los últimos artículos publicados.</p>
	<?php
	foreach ($rs_articulos as $fila){
		echo '<p>';
		echo '<a href="' . site_url('/articulos/muestra/' . $fila->id) . '">' . $fila->titulo .' '.$fila->cuerpo. '</a>';
		echo '</p>';
	}
	?>
	<p>últimos artículos publicados en formato tabla.</p>
	<?php
	echo '<div class="table-responsive">';
	echo '<table class="table-bordered table-striped table-condensed table-hover">';
	echo '<thead><th>ID</th><th>TITULO</th><th>CUERPO</th></thead>';
	echo '<tbody>';
	      foreach($rs_articulos as $fila){
	      	echo '<tr>';
	      	echo '<td>'.$fila->id.'</td>';
	      	echo '<td>'.$fila->titulo.'</td>';
	      	echo '<td>'.$fila->cuerpo.'</td>';
	      	echo '</tr>';
	      }
    echo '</tbody>';
	echo '</table>';
	echo '</div>'
     ?>
   <div class="col-sm-7">
   <br>  	 
    <button type="submit" name="Exportar" class="btn btn-primary pull-left btn-sm">Exportar</button>
   </div>
   </form> 
  </body>
</html>
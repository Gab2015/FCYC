$(document).ready(function () {
	$(".navbar-nav li.desplazar a").click(function(event) {
		$("nav.sidebar").css({
			marginLeft:'-160px'});
		$(".glyphicon").css({
			marginLeft:'150px'});
		$(".MenuPrincipal").css({
			height:'20px'});
		$("h1#HeadMenu").css({
			marginLeft:'-160px'});
		$("span#Herramienta").css({
			marginLeft:'0px'});
	});
	$(".navbar-nav li.desplazar a").dblclick(function(event) {
		$("nav.sidebar").css({
			marginLeft:'0px'});
		$(".glyphicon").css({
			marginLeft:'0px'});
		$("h1#HeadMenu").css({
			marginLeft:'0px'});
		$("span#Herramienta").css({
			marginLeft:'0px'});
	});
	$('#DetalleFac').dataTable( {
		"language": {
			"sProcessing":     "Procesando...",
			"sLengthMenu":     "Mostrar _MENU_ registros",
			"sZeroRecords":    "No se encontraron resultados",
			"sEmptyTable":     "Ningún dato disponible en esta tabla",
			"sInfo":           "Registros del _START_ al _END_ de un total de _TOTAL_",
			"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
			"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
			"sInfoPostFix":    "",
			"sSearch":         "Buscar:",
			"sUrl":            "",
			"sInfoThousands":  ",",
			"sLoadingRecords": "Cargando...",
			"oPaginate": {
				"sFirst":    "Primero",
				"sLast":     "Último",
				"sNext":     "Siguiente",
				"sPrevious": "Anterior"
			},
			"oAria": {
				"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
				"sSortDescending": ": Activar para ordenar la columna de manera descendente"
			}
		}
	} );
});
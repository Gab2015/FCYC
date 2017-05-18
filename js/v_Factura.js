$(document).ready(function() {
	//=========Calcula los montos totales de la Factura o Tikect=========//
	//=========INICI0=========//
	var vtGravada = 0;
	var vFila;
	// tr:not(:first)
	$('#DetalleFac').on('change', 'input[type="text"]', function(i,e) {
	if($('input[class=FilaMarcada]:checkbox:checked').length == 0){ 
		var cells = $(this).closest('tr').children('td');
		var vCantidad = cells.eq(13).find('input').val();
		var vPrecionConIva = parseFloat(cells.eq(14).html());
		var vIva = 0;
		var vTotal = 0;
		cells.eq(15).text(vCantidad * vPrecionConIva);
		vtGravada += vCantidad * vPrecionConIva;
		$("input:text#txt_VentaGravada").val(vtGravada);
		vIva = vtGravada*0.13;
		$("input:text#txt_Iva").val(vIva.toFixed(2));
		vTotal = vtGravada*1.13;
		$("input:text#txt_Total").val(vTotal.toFixed(2));
       }
	}); 
	//=========FIN=========//
	//=========Traduce el DataTable=========//
	//=========INICI0=========//
	$('#DetalleFac').DataTable( {
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
	//=========FIN=========//
	//=========Marca todas los checkbok de la tabla=========//
	//=========INICI0=========//
	$('#DetalleFac').on('change', 'input[class=check_Todas]', function() {
		$('input[class=FilaMarcada]:checkbox').each(function(){ 
			if($('input[class=check_Todas]:checkbox:checked').length == 0){ 
				$(this).prop("checked", false); 
			} else {
				$(this).prop("checked", true); 
			} 
		});
	});
    //=========FIN=========//
    //=========Borra las filas marcadas en la tabla=========//
	//=========INICI0=========//
	$("#Remover").on('click', function() {
		$('.FilaMarcada:checkbox:checked').parents("tr").remove();
		$('.check_Todas').prop("checked", false); 
		check();
	});	
    //=========FIN=========//
    //=========Borra las filas marcadas en la tabla=========//
	//=========INICI0=========//
function check(){
	obj=$('table tr:not(:first)').find('span');
	$.each( obj, function( key, value ) {
	id=value.id;
	$('#'+id).html(key+1);
	});
	}
   //=========FIN=========//
});
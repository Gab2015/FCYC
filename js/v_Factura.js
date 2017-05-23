$(document).ready(function() {
//=========Calcula los montos totales de la Factura o Tikect=========//
//=========INICI0=========//
$('#DetalleFac').on('change', 'input[type="text"]', function(i,e) {
	if($('input[class=FilaMarcada]:checkbox:checked').length == 0){ 
		var cells = $(this).closest('tr').children('td');
		var vCantidad = cells.eq(13).find('input').val();
		var vPrecionConIva = parseFloat(cells.eq(14).html());
		cells.eq(15).text(vCantidad * vPrecionConIva);
		sumaFila();	
	}
}); 
function sumaFila(){
	var vIva = 0;
	var vTotal = 0;
	var vtGravada = 0;
	$('#DetalleFac tr:not(:first)').each(function()  {
		var cells = $(this).closest('tr').children('td');
		if(!isNaN(parseFloat(cells.eq(15).html()))){
			vtGravada  += parseFloat(cells.eq(15).html());	
		}else{
			vtGravada  +=0;
		}
	});
	$("input:text#txt_VentaGravada").val(vtGravada);
	vIva = vtGravada*0.13;
	$("input:text#txt_Iva").val(vIva.toFixed(2));
	vTotal = vtGravada*1.13;
	$("input:text#txt_Total").val(vTotal.toFixed(2));
}
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
$('#DetalleArticulo').on('change', 'input[class=check]', function() {
	$('input[class=Marcada]:checkbox').each(function(){ 
		if($('input[class=check]:checkbox:checked').length == 0){ 
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
	sumaFila();
});	
//=========FIN=========//
//=========Genera el numero de fila=========//
//=========INICI0=========//
function check(){
	obj=$('#DetalleFac tr:not(:first)').find('span');
	$.each( obj, function( key, value ) {
		id=value.id;
		$('#'+id).html(key+1);
	});
}
//=========FIN=========//
//=========Genera una fila y la coloca al final=========//
//=========INICI0=========//
$("#Agregar").on('click',function(){
	$('#modal_Articulo').modal('show');
});
//=========FIN=========//
//=========Genera una fila y la coloca al final=========//
//=========INICI0=========//
$("#btn_insertar").on('click',function(){
	$('input[class=Marcada]:checkbox:checked').each(function(i,e){ 
				var vNumFilaAgregada=$('#DetalleFac tr').length;
				var celda = $(this).closest('tr').children('td');
				var vCodigo = celda.eq(4).html();
                var vDescripcion = celda.eq(5).html();
                var vPrecioUnitario = celda.eq(6).html();
				var vFilaAgregada="<tr><td class='hidden-md hidden-lg'></td>";
				vFilaAgregada +="<td class='hidden-md hidden-lg'></td>";
				vFilaAgregada +="<td class='hidden-md hidden-lg'></td>";
				vFilaAgregada +="<td class='hidden-md hidden-lg'></td>";
				vFilaAgregada +="<td class='hidden-md hidden-lg'></td>";
				vFilaAgregada +="<td class='hidden-md hidden-lg'></td>";
				vFilaAgregada +="<td class='hidden-md hidden-lg'></td>";
				vFilaAgregada +="<td class='hidden-md hidden-lg'></td>";
				vFilaAgregada +="<td><span id='snum'>"+vNumFilaAgregada+"</span></td>";
				vFilaAgregada +="<td><input type='checkbox' class='FilaMarcada'></td>";
				vFilaAgregada +="<td>"+vCodigo+"</td>";
				vFilaAgregada +="<td class='hidden-md hidden-lg'></td>";
				vFilaAgregada +="<td>"+vDescripcion+"</td>";
				vFilaAgregada +="<td><input class='form-control' id='txt_Cantidad' name='txt_Cantidad' placeholder='Cantidad' type='text' value=''/></td>";
				vFilaAgregada +="<td class='txt_PrecioConIva'>"+vPrecioUnitario+"</td>";
				vFilaAgregada +="<td><input class='form-control' id='txt_Afecta' name='txt_Afecta' placeholder='Total' type='text' value='' readonly/></td></tr>";				
				$('#DetalleFac').append(vFilaAgregada);
				$('#modal_Articulo').modal('hide');
    });
});
//=========FIN=========//
});
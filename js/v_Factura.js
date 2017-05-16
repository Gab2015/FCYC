$(document).ready(function() {
	var vtgravada = 0;
	$('#DetalleFac tr:not(:first)').on('change', 'input[type="text"]', function(i,e) {
		var cells = $(this).closest('tr').children('td');
		var vCantidad = cells.eq(13).find('input').val();
		var vPrecionConIva = parseFloat(cells.eq(14).html());
		var vIva = 0;
		var vTotal = 0;
		cells.eq(15).text(vCantidad * vPrecionConIva);
		vtgravada += vCantidad * vPrecionConIva;
	    $("input:text#txt_VentaGravada").val(vtgravada);
	    vIva = vtgravada*0.13;
	    $("input:text#txt_Iva").val(vIva.toFixed(2));
	    vTotal = vtgravada*1.13;
	    $("input:text#txt_Total").val(vTotal.toFixed(2));
	}); 
});
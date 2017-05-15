$(document).ready(function() {
                $('#DetalleFac tr:not(:first)').each(function (i,e) {
                var tds = $(this).find('td');
                var vPrecionConIva = parseFloat($(tds[14]).html());
                var vCantidad = parseFloat($(tds[13]).find('#txt_Cantidad').val());
                var rtotal = vCantidad * vPrecionConIva;
                $(tds[15]).find('#txt_Total').val(rtotal.toFixed(2));
            });
});
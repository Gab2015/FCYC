$(document).ready(function() {
$('#DetalleFac tr:not(:first)').on('change', 'input[type="text"]', function(i,e) {
  var cells = $(this).closest('tr').children('td');
  var vCantidad = cells.eq(13).find('input').val();
  var vPrecionConIva = parseFloat(cells.eq(14).html());
  cells.eq(15).text(vCantidad * vPrecionConIva);
});
});
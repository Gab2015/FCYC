<!-- Bootstrap modal -->
<div class="modal fade" id="modal_Articulo" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Lista de artículos</h3>
      </div>
      <div class="modal-body form">
       <div class="row">
          <div class="col-lg-6 col-xs-12">
            <table id="DetalleArticulo" class="table-bordered table-striped table-condensed table-hover">
              <thead>
                <th class="hidden-md hidden-lg">IdDetProducto</th>
                <th class="hidden-md hidden-lg">IdProducto</th>
                <th>#</th>
                <th><input class='check' type="checkbox"/></th>
                <th>Código</th>
                <th>Descripción</th>
                <th>Precio Unitario</th>
                <th class="hidden-md hidden-lg">Almacén</th>
                <th class="hidden-md hidden-lg">NormaReparto</th>
              </thead>
              <tbody>
                <?php
                $i = 1;
                foreach($rs_articulo['rs_DetalleArticulo'] as $filaDetalle){
                  echo '<tr>';
                  echo '<td class="hidden-md hidden-lg">'.$filaDetalle->IdDetProducto.'</td>';
                  echo '<td class="hidden-md hidden-lg">'.$filaDetalle->IdProducto.'</td>';
                  echo '<td><span id="snum">'.$i.'</span></td>';
                  echo '<td> <input type="checkbox" class="Marcada"></td>';
                  echo '<td>'.$filaDetalle->CodProducto.'</td>';
                  echo '<td>'.$filaDetalle->DescripcionProducto.'</td>';
                  echo '<td>'.number_format($filaDetalle->PrecioConIva,2,".",",").'</td>';
                  echo '<td class="hidden-md hidden-lg">'.$filaDetalle->CodAlmacen.'</td>';
                  echo '<td class="hidden-md hidden-lg">'.$filaDetalle->NormaReparto.'</td>';
                  echo '</tr>';
                  $i++;
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" id="btn_insertar" class="btn btn-primary">Seleccionar</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
  <!-- End Bootstrap modal -->
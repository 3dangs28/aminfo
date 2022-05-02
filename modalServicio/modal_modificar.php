<form id="actualidarDatos">
<div class="modal fade" id="dataUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content"> 
    <div class="modal-header">
                    <h5 class="modal-title">Modificar usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

      <div class="modal-body">
			<div id="datos_ajax"></div>

 

          <div class="form-group">
          <label for="lelo"  class="control-label">Cédula/RUC:</label>
              <input type="text" class="form-control" id="cedula" name="cedula" disable="disable" readonly >
              <input type="hidden" class="form-control" id="id" name="id">
          </div>


          <div class="form-group">
          <label for="lalo"  class="control-label">Nombre</label>
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre:" required autocomplete="off" >
              
          </div>


          <div class="form-group">
          <label for="lalo"  class="control-label">Apellido</label>
          <input type="text" class="form-control" id="apellido1" name="apellido1" placeholder="Apellido:" required autocomplete="off" >
          </div>


          <div class="form-group">
        <label for="lalo"  class="control-label">Correo:</label>
           <input type="text" class="form-control" id="correo" name="correo" placeholder="Correo:" required autocomplete="off" >
        </div>
    

        <div class="form-group">
        <label for="lalo"  class="control-label">Dirección:</label>
           <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección:" required autocomplete="off" >
        </div>
    
        <div class="form-group">
        <label for="lalo"  class="control-label">Descripción:</label>
        <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required autocomplete="off" ></textarea>
        </div>
  

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar datos</button>
      </div>
    </div>
  </div>
</div>
</form>
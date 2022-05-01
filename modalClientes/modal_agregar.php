<form id="guardarDatos">
<div class="modal fade" id="dataRegister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      

    <div class="modal-header">
                    <h5 class="modal-title">Formulario para agregar clientes</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>


      <div class="modal-body">
      <div id="datos_ajax_register"></div>

      <div class="form-group">
            <label for="perfa" class="control-label">Nombre:</label>
            <input type="text" class="form-control" id="aplicacion" name="aplicacion" placeholder="Nombre del cliente" required autocomplete="off" >
		  </div>
	 

      <div class="form-group mb-2">


<div class="file-upload">
 

  <div class="image-upload-wrap">
    <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
    <div class="drag-text">
      <h3>Arrastre y suelte una imagen o seleccione una</h3>
    </div>
  </div>
  <div class="file-upload-content">
    <img class="file-upload-image" src="#" alt="your image" />
    <div class="image-title-wrap">
      <button id="bandalo" type="button" onclick="removeUpload()" class="remove-image">Remover <span class="image-title">Elimnar Imagen</span></button>
    </div>
  </div>
</div>

      
</div>
 




		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar datos</button>

       
      </div>
    </div>
  </div>
</div>
</form>
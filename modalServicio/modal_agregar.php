<form id="guardarDatos">
<div class="modal fade" id="dataRegister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      

    <div class="modal-header">
                    <h5 class="modal-title">Formulario para agregar servicio</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>


      <div class="modal-body">
      <div id="datos_ajax_register"></div>
      

      <div class="form-group">
                							
                                     <?php require_once("conn/conexion.php");
                                   $query = mysqli_query($con,"select id_cliente,cliente from clientes");
                                     ?>
                            
                                    <select class="form-control" id="aplicacion" name="aplicacion" required>
                                    <option value="">Seleccione empresa</option>
                            
                                    <?php  while($row = mysqli_fetch_array($query)){  ?>    
                                   <?php     echo "<option value=".$row['id_cliente'].">".$row['cliente']."</option>";
                                    }
                                
                                    ?>
                            
                            
                               </select>
                             
                            
             </div>
                            


     
      
		     <div class="form-group">
           
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre:" required autocomplete="off" >
         </div>
      
         <div class="form-group">
         
            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido:" required autocomplete="off" >
         </div>

   
         <div class="form-group">
         
            <input type="text" class="form-control" id="cedula" name="cedula" placeholder="Cédula/RUC:" required autocomplete="off" >
         </div>


         <div class="form-group">
         
         <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo:" required autocomplete="off" >
      </div>

         <div class="form-group">
         
            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección:" required autocomplete="off" >
         </div>
   
         <div class="form-group">
    <label for="exampleFormControlTextarea1">Descripción:</label>
    <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
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
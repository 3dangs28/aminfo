<?php
 
require_once("conn/conexion.php");
		

//consulta principal para recuperar los datos
$query = mysqli_query($con,"SELECT id_cliente,cliente FROM clientes  order by id_cliente");
	
?>

<!-- Recent Sales Start -->
<div class="container-fluid pt-4 px-4">
              <div class="bg-light text-center rounded p-4">
                  <div class="d-flex align-items-center justify-content-between mb-4">
                      <h6 class="mb-0">Listado clientes</h6>
                
                  </div>
                  <div class="table-responsive">
                      <table class="table text-start align-middle table-bordered table-hover mb-0">
                          <thead>
                              <tr class="text-dark">
                                
                                  <th scope="col">Código</th>
                                  <th scope="col">Nombre</th>
                                  <th scope="col">Acciones</th>
                    
                              </tr>
                          </thead>
                          <tbody>
                 
                 
                          <?php
          while($row = mysqli_fetch_array($query)){
              ?>
              <tr>
                  <td><?php echo $row['id_cliente'];?></td>
                  <td><?php echo $row['cliente'];?></td>
                  <td>
                      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#dataUpdate" data-id="<?php echo $row['id_cliente']?>" data-aplicacion="<?php echo $row['cliente']?>"  ><i class='nav-icon fa fa-pencil'></i> </button>
                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#dataDelete" data-id="<?php echo $row['id_cliente']?>"  ><i class='nav-icon fa fa-trash' ></i></button>
                  </td>
              </tr>
              <?php
          }
      
          ?>



                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
          <!-- Recent Sales End -->




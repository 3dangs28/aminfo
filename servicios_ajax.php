<?php
 

 
require_once("conn/conexion.php");
		
	$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
	if($action == 'ajax'){
	include 'pagination.php'; //incluir el archivo de paginación
	
		//Cuenta el número total de filas de la tabla*/
		$count_query   = mysqli_query($con,"SELECT count(*) AS numrows FROM servicios");

		if ($row= mysqli_fetch_array($count_query)){$numrows = $row['numrows'];}

		$reload = 'index.php';
		//consulta principal para recuperar los datos
		$sql ='select id_servicio, nombre, apellido,cedula, id_cliente, correo, direccion, descripcion from servicios';
   

        $query = mysqli_query($con,$sql);
		
		if ($numrows>0){
		
			?>


<!-- tablas -->
<table class="table text-start align-middle table-bordered table-hover mb-0" ID="example1" >
                            <thead>
                                <tr class="text-dark">
                        
                                 
                                    <td scope="col">Nombre</td>
									<th scope="col">Apellido</th>
                                    <td scope="col">Cédula/Ruc</td>
									<td scope="col">Correo</td>
									<td scope="col">Dirección</td>
									<td scope="col">Descripción</td>
                                    <td scope="col">Acciones</td>
                         
	


                                </tr>
                            </thead>
                            <tbody>
							<?php
			while($row = mysqli_fetch_array($query)){
				?>
				<tr>
			        <td><?php echo $row['nombre'];?></td>
                    <td><?php echo $row['apellido'];?></td>
                    <td><?php echo $row['cedula'];?></td>
                    <td><?php echo $row['correo'];?></td>
					<td><?php echo $row['direccion'];?></td>
					<td><?php echo $row['descripcion'];?></td>
					<td>
					<button type="button" class="btn btn-info" data-toggle="modal"
                     data-target="#dataUpdate" 
                     data-id="<?php echo $row['id_servicio']?>" 
					 data-nombre="<?php echo $row['nombre']?>"
                     data-apellido="<?php echo $row['apellido']?>"
                     data-cedula="<?php echo $row['cedula']?>"   
					 data-correo="<?php echo $row['correo']?>"
					 data-direccion="<?php echo $row['direccion']?>"   
					 data-descripcion="<?php echo $row['descripcion']?>"  
                     ><i class='nav-icon fa fa-pen'></i> </button>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#dataDelete" data-id="<?php echo $row['id_servicio']?>"  ><i class='nav-icon fa fa-trash' ></i></button>
</td>
				</tr>
				<?php
			}
		
			?>
                               
                            </tbody>
                        </table>



			<?php
			
		} else {
			?>
			<div class="alert alert-warning alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4>Aviso!!!</h4> No hay datos para mostrar
            </div>
			<?php
		}

	}
	mysqli_close($con);
?>
  <script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
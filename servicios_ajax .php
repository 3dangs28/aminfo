<?php
 

 
require_once("conn/conexion.php");
		
	$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
	if($action == 'ajax'){
	include 'pagination.php'; //incluir el archivo de paginación
	
		//Cuenta el número total de filas de la tabla*/
		$count_query   = mysqli_query($con,"SELECT count(*) AS numrows FROM usuarios");

		if ($row= mysqli_fetch_array($count_query)){$numrows = $row['numrows'];}

		$reload = 'index.php';
		//consulta principal para recuperar los datos
		$sql ='select t1.id_usuario, t1.id_cliente, t1.id_rol, t1.correo, t1.nombre, t1.apellido, 
		t1.nick, t1.pass, t2.rol from usuarios as t1, roles as t2
		   where 
	   t1.id_rol = t2.id_rol order by id_usuario';
   

        $query = mysqli_query($con,$sql);
		
		if ($numrows>0){
		
			?>


<!-- tablas -->
<table class="table text-start align-middle table-bordered table-hover mb-0" ID="example1" >
                            <thead>
                                <tr class="text-dark">
                        
                                 
                                    <td scope="col">Nombre</td>
									<th scope="col">Apellido</th>
                                    <td scope="col">Rol</td>
									<td scope="col">Correo</td>
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
                    <td><?php echo $row['rol'];?></td>
                    <td><?php echo $row['correo'];?></td>

		
					<td>
					<button type="button" class="btn btn-info" data-toggle="modal"
                     data-target="#dataupdate" 
                     data-id="<?php echo $row['id_usuario']?>" 
                     data-rol="<?php echo $row['rol']?>"   
                     data-aplicacion="<?php echo $row['id_cliente']?>"
                     data-nombre="<?php echo $row['nombre']?>"
                     data-apellido="<?php echo $row['apellido']?>"
                     data-correo="<?php echo $row['correo']?>"
                     data-nick="<?php echo $row['nick']?>"
                     data-pass="<?php echo $row['pass']?>"
                     
                     ><i class='nav-icon fa fa-pen'></i> </button>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#datadelete" data-id="<?php echo $row['id_usuario']?>"  ><i class='nav-icon fa fa-trash' ></i></button>
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
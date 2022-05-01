<?php
 

 
require_once("conn/conexion.php");
		
	$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
	if($action == 'ajax'){
	include 'pagination.php'; //incluir el archivo de paginación
	
		//Cuenta el número total de filas de la tabla*/
		$count_query   = mysqli_query($con,"SELECT count(*) AS numrows FROM clientes");

		if ($row= mysqli_fetch_array($count_query)){$numrows = $row['numrows'];}

		$reload = 'index.php';
		//consulta principal para recuperar los datos
        $query = mysqli_query($con,"SELECT id_cliente,cliente FROM clientes  order by id_cliente");
		
		if ($numrows>0){
		
			?>




<table class="table text-start align-middle table-bordered table-hover mb-0" ID="example1" >
                            <thead>
                                <tr class="text-dark">
                        
                                    <th scope="col">Código</th>
                                    <td scope="col">Nombre</td>
                                    <td scope="col">Acciones</td>
                         

                                </tr>
                            </thead>
                            <tbody>
							<?php
			while($row = mysqli_fetch_array($query)){
				?>
				<tr>
				<th scope="col"><?php echo $row['id_cliente'];?></th>
			
					<td><?php echo $row['cliente'];?></td>
					<td>
						<button type="button" class="btn btn-info" data-toggle="modal" data-target="#dataUpdate" data-id="<?php echo $row['id_cliente']?>" data-cliente="<?php echo $row['cliente']?>"  ><i class='nav-icon fa fa-pen'></i> </button>
						<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#dataDelete" data-id="<?php echo $row['id_cliente']?>"  ><i class='nav-icon fa fa-trash' ></i></button>
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
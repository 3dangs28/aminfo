<?php


require_once("../conn/conexion.php");

	/*Inicia validacion del lado del servidor*/
	if (empty($_POST['id'])) {
           $errors[] = "ID vacío";
		} 
	
		else if (empty($_POST['nombre'])){
			$errors[] = "Nombre vacío";
		} 
		else if (empty($_POST['apellido1'])){
			$errors[] = "Apellido vacío";
		} 
		else if (empty($_POST['correo'])){
			$errors[] = "Correo vacío";
		} 
		else if (empty($_POST['cedula'])){
			$errors[] = "Cédula/RUC vacío";
		} 
		else if (empty($_POST['direccion'])){
			$errors[] = "Dirección vacío";
		} 
	
		else if (empty($_POST['descripcion'])){
			$errors[] = "Descripción vacío";
		} 
		else if (
			!empty($_POST['id']) && 
			!empty($_POST['nombre']) &&
			!empty($_POST['apellido1']) &&
			!empty($_POST['correo']) &&  
			!empty($_POST['cedula']) &&  
			!empty($_POST['direccion']) &&  
			!empty($_POST['descripcion'])   
			
		){

		// escaping, additionally removing everything that could be (html/javascript-) code
		$id=intval($_POST['id']);
		$cedula=mysqli_real_escape_string($con,(strip_tags($_POST["cedula"],ENT_QUOTES)));
		$nombre=mysqli_real_escape_string($con,(strip_tags($_POST["nombre"],ENT_QUOTES)));
		$apel=mysqli_real_escape_string($con,(strip_tags($_POST["apellido1"],ENT_QUOTES)));
		$correo=mysqli_real_escape_string($con,(strip_tags($_POST["correo"],ENT_QUOTES)));
		$direccion=mysqli_real_escape_string($con,(strip_tags($_POST["direccion"],ENT_QUOTES)));
		$descripcion=mysqli_real_escape_string($con,(strip_tags($_POST["descripcion"],ENT_QUOTES)));

        $sql="update servicios set  nombre='".$nombre."', apellido='".$apel."', cedula='".$cedula."', correo='".$correo."', direccion='".$direccion."', descripcion='".$descripcion."' where id_servicio='".$id."'";
		$query_update = mysqli_query($con,$sql);
			if ($query_update){
				$messages[] = "Los datos han sido actualizados satisfactoriamente.";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
		} else {
			$errors []= "Error desconocido.";
		}
		
		if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
			}
			if (isset($messages)){
				
				?>
				<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			}

?>
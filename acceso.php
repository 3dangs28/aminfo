<?php

session_start();
require_once("conn/conexion.php");  
if($_SERVER["REQUEST_METHOD"] == "POST") {
 
   
   if (empty($_POST['usuario'])){
      $errors[] = "usuario vacío";
   } 

   else if (empty($_POST['pass'])){
      $errors[] = "pass vacío";
   } 
   else if (
      !empty($_POST['usuario']) && 
      !empty($_POST['pass'])
      
   ){

   $myusername = mysqli_real_escape_string($con,$_POST['usuario']);
   $aux = mysqli_real_escape_string($con,$_POST['pass']); 
   $mypassword=md5($aux);
   
   $sql = "SELECT id_usuario FROM usuarios WHERE nick = '$myusername' and pass = '$mypassword'";
   $result = mysqli_query($con,$sql);
   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

   
   $count = mysqli_num_rows($result);
   
   if($count == 1) {
      $_SESSION['login_user'] = $myusername;
      $_SESSION['id_usuario'] = $row["id_usuario"];
      $_SESSION['loggedin'] = TRUE;
  echo "1";
   }else {
      $errors []= "Tú usuario o pass son invalidos.";
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
  



}

}



?>
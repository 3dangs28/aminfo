<?php include("inc/librerias.php"); ?>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Cargando...</span>
            </div>
        </div>
        <!-- Spinner End -->


<?php include("inc/menu.php"); ?>
<?php include("modalServicio/modal_agregar.php");?>
<?php include("modalServicio/modal_modificar.php");?>
<?php include("modalServicio/modal_eliminar.php");?>
        <!-- Content Start -->
<div class="content">

<?php include("inc/header.php"); ?>

            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h3 class="mb-0">Servicios</h3>
                  	<button type="button" class="btn btn-success" data-toggle="modal" data-target="#dataRegister"><i class='glyphicon glyphicon-plus'></i> Agregar</button>
                    </div>
                    <div class="table-responsive" id="loader"> </div> 
                </div>
            </div>
            <!-- Recent Sales End -->

<?php include("inc/footer.php"); ?>

    <!-- Template Javascript -->
<script src="js/main.js"></script>
<script src="js/servicios.js"></script>
	<script>
		$(document).ready(function(){
			load(1);           
		});
  </script>
</body>

</html>
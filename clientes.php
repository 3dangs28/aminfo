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
<?php include("modalClientes/modal_agregar.php");?>
<?php include("modalClientes/modal_modificar.php");?>
<?php include("modalClientes/modal_eliminar.php");?>
        <!-- Content Start -->
<div class="content">

<?php include("inc/header.php"); ?>
  
          
<?php include("clientes_ajax.php"); ?>


<?php include("inc/footer.php"); ?>

    <!-- Template Javascript -->
<script src="js/main.js"></script>

</body>

</html>
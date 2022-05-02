function load(page){
    var parametros = {"action":"ajax","page":page};
    $("#loader").fadeIn('slow');
    $.ajax({
        url:'servicios_ajax.php',
        data: parametros,
         beforeSend: function(objeto){
        $("#loader").html("<img src='giphy.gif'>");
        },
        success:function(data){
          $("#loader").html(data);
        }
    })
} 
 
    $('#dataUpdate').on('show.bs.modal', function (event) {
   
     
      var button = $(event.relatedTarget) // Botón que activó el modal
      var id = button.data('id') // Extraer la información de atributos de datos
      var nombre = button.data('nombre') // Extraer la información de atributos de datos
      var apellido = button.data('apellido') // Extraer la información de atributos de datos
      var cedula = button.data('cedula') // Extraer la información de atributos de datos
      var correo = button.data('correo') // Extraer la información de atributos de datos
      var direccion = button.data('direccion') // Extraer la información de atributos de datos
      var descripcion = button.data('descripcion') // Extraer la información de atributos de datos


      var modal = $(this)
      modal.find('.modal-title').text('Modificar servicio: ')
      modal.find('.modal-body #id').val(id)
      modal.find('.modal-body #nombre').val(nombre)
      modal.find('.modal-body #apellido1').val(apellido)
      modal.find('.modal-body #cedula').val(cedula)
      modal.find('.modal-body #correo').val(correo)  
      modal.find('.modal-body #direccion').val(direccion)
      modal.find('.modal-body #descripcion').val(descripcion)
      $('.alert').hide();//Oculto alert
    })
    
    $('#dataDelete').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Botón que activó el modal
      var id = button.data('id') // Extraer la información de atributos de datos
      var modal = $(this)
      modal.find('#id').val(id)
    })

$( "#actualidarDatos" ).submit(function( event ) {
    var parametros = $(this).serialize();
    console.log("caca");
         $.ajax({
                type: "POST",
                url: "servicios/modificar.php",
                data: parametros,
                 beforeSend: function(objeto){
                    $("#datos_ajax").html("Mensaje: Cargando...");
                  },
                success: function(datos){
                $("#datos_ajax").html(datos);
                
                load(1);
              }
        });
      event.preventDefault();
    });
    
    $( "#guardarDatos" ).submit(function( event ) {
    var parametros = $(this).serialize();
         $.ajax({
                type: "POST",
                url: "servicios/agregar.php",
                data: parametros,
                 beforeSend: function(objeto){
                    $("#datos_ajax_register").html("Mensaje: Cargando...");
                  },
                success: function(datos){
                $("#datos_ajax_register").html(datos);
                
                load(1);
              }
        });
      event.preventDefault();
    });
    
    $( "#eliminarDatos" ).submit(function( event ) {
    var parametros = $(this).serialize();
         $.ajax({
                type: "POST",
                url: "servicios/eliminar.php",
                data: parametros,
                 beforeSend: function(objeto){
                    $(".datos_ajax_delete").html("Mensaje: Cargando...");
                  },
                success: function(datos){
                $(".datos_ajax_delete").html(datos);
                
                $('#dataDelete').modal('hide');
                load(1);
              }
        });
      event.preventDefault();
    });
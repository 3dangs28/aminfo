$( "#accesoForm" ).submit(function( event ) {
    var parametros = $(this).serialize();
         $.ajax({
                type: "POST",
                url: "acceso.php",
                data: parametros,
                 beforeSend: function(objeto){
                    $("#datos_ajax").html("Mensaje: Cargando...");
                  },
                success: function(datos){
                
                if(datos>0){
                    window.location.href = "index.php";
                }else{
                    $("#datos_ajax").html(datos);
                }
                
            
              }
        });
      event.preventDefault();
    });
    
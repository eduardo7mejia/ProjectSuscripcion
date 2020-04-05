/**Listado de paises (Crearemos un ajax para traer a los paises desde el plugin) */
$.ajax({
    url:"vistas/js/plugins/listadopaises.json",
    type: "GET",
    success: function(respuesta){
        //alert("respuesta",respuesta);
        respuesta.forEach(seleccionarPais);
        function seleccionarPais(item,index) {
            var pais = item.name;
            var codPais = item.code;
            var dial = item.dial_code;
            $("#inputPais").append(
                '<option value="'+pais+','+codPais+','+dial+'">'+pais+'</option>'
            )
        }
    }

})
/**Plugin select2 */
$('.select2').select2()
/*Agregar el dial code del país*/
$("#inputPais").change(function(){
    $(".dialCode").html($(this).val().split(",")[2])
})
/**Ahora se las ventajas de Guardar y saber usar los Plugins de los Cursos 
 * y ponerlos en practica en tus Codigitos
 */
/*Agregar el plugin de inputmask */
$('[data-mask]').inputmask();
/**Crear firma virtual  */
$("#signatureparent").jSignature({
    /**Color de la firma  */
    color: "#333", //Linea de la firma
    lineWidth: 1,//Grosor de la linea 
    /**Altura y Ancho  */
    width: 320, 
    height: 100
});
/**Repetir Firma */
$(".repetirFirma").click(function(){
    $("#signatureparent").jSignature("reset");
})
/**Validar Suscripción */
$(".suscribirse").click(function(){
    $(".alert").remove();
    var nombre = $("#inputName").val();
    var email = $("#inputEmail").val();
    var patrocinador = $("#inputPatrocinador").val();
    var enlaceAfiliado = $("#inputAfiliado").val();
    var pais = $("#inputPais").val().split(",")[0];
    var codigoPais = $("#inputPais").val().split(",")[1];
    var telefonoMovil = $("#inputPais").val().split(",")[2]+" "+$("#inputMovil").val();
    console.log("telefonoMovil",telefonoMovil);
    var red = $("#tipoRed").val();
    var aceptarTerminos = $("#aceptarTerminos:checked").val();
    if ($("#signatureparent").jSignature("isModified")) {
        var firma = $("#signatureparent").jSignature("getData","image/svg+xml");     
    }
    /**Validar Datos */
    if (nombre == ""|| 
        email == ""|| 
        patrocinador == ""|| 
        enlaceAfiliado == ""|| 
        pais == ""|| 
        codigoPais == ""|| 
        telefonoMovil == ""|| 
        red == ""|| 
        aceptarTerminos != "on"||
        !$("#signatureparent").jSignature("isModified")) {
         $(".suscribirse").before(`
           <div class= "alert alert-danger">Faltan Datos, no ha aceptado o no ha firmado los términos y condiciones HDP :v </div>
           `);
            return;
    }else{
       //alert("Formulario listo");
    }   
})
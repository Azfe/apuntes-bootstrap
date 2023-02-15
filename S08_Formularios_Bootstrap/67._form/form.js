//console.log("working...");

$("#form").submit(function(event){
    event.preventDefault(); // almacena los datos sin refrescar el sitio web.

    enviar();

});

function enviar(){
    var datos = $("form").serialize(); // toma los datos "name" y los almacena en un array

    $.ajax({
        type: "post",
        url: "form.php",
        data: datos,
        success: function(texto){
            if(texto.trim() === "exito"){
                correcto();
            }else{
                phperror(texto);
            }
        }
    })    
}

function correcto(){
    $("#msgsuccess").removeClass("d-none");
    $("#msgerror").addClass("d-none"); // si hubo antes errores se eliminan
}

function phperror(texto){
    $("#msgerror").removeClass("d-none");
    $("#msgerror").html(texto);

}


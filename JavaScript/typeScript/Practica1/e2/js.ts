var datos=[];
$(document).ready(function() {
    if("datos" in localStorage){
        console.log("ya hay datos")
    }else{
        cogerDatos();
    }
    window.location.href
})

function cogerDatos() {
    $.get("./datos.json",function(respuesta) {
        datos=respuesta.datos;
        llenar();
    })
}
function llenar() {
    localStorage.setItem("datos",JSON.stringify(datos));
}
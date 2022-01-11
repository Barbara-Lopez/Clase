$(document).ready(function() {
    $("#altaBaja").click(function () {
        window.location.href="./altaBaja.html"
    })
    $("#altaBaja").click(function () {
        if("libros" in localStorage){
            window.location.href="./copias.html"
        }else{
            alert("No hay libros")
        }
    })
})
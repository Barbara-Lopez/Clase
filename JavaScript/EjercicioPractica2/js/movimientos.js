window.onload = function() {
    bAcptar=document.getElementById("aceptar");
    bAcptar.addEventListener("click",mostrarMovimientos,false);
}

personas=llenarDatos();

function mostrarMovimientos(){
    let cookie=document.cookie.split('=');
    let nif=cookie[1];
}
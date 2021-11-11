window.onload = function() {
    bAcptar=document.getElementById("aceptar");
    bAcptar.addEventListener("click",mostrarMovimientos,false);
}

personas=llenarDatos();

function mostrarMovimientos(){
    let cookie=document.cookie.split('=');
    let nif=cookie[1];
    buscarPersona(nif);
}

function buscarPersona(nif){
    try {
        persona=personas.find(p => p.user.nif == nif);
        if (persona == undefined){           
            throw "Persona no encontrada";
        }else{
            visualizarMovimientos(persona);
        }
    } 
    catch (error) {
        alert(error);
    }
}
function visualizarMovimientos(persona){
    let listaMovimientos=persona.movimientosBancarios;

    listaMovimientos.sort();
    lista=""
    for (i in listaMovimientos.length) {
        lista=lista+"La fecha es: "+listaMovimientos[i].fecha+" el concepto es: "+listaMovimientos[i].concepto+" el importe es: "+listaMovimientos[i].importe+" el saldo es: "+listaMovimientos[i].saldo+"\n"; 
    }
    alert(lista);
}
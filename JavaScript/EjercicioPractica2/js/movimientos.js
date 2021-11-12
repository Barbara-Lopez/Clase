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
    modo=""
    if(document.getElementById("importe").checked){
       listaMovimientos.sort(function(a,b){return a.importe - b.importe;});
    }
    else{
        listaMovimientos.sort(function(a,b){return a.fecha - b.fecha;});
    }

    lista=""
    for (i in listaMovimientos.length) {
        let parrafo=document.createElement("p");
        let texto=document.createTextNode(listaMovimientos[i].fecha+" el concepto es: "+listaMovimientos[i].concepto+" el importe es: "+listaMovimientos[i].importe+" el saldo es: "+listaMovimientos[i].saldo);
        parrafo.appendChild(texto);
        document.body.appendChild(parrafo);
    }
}

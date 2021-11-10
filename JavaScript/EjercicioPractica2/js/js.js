

window.onload = function() {
    let numeros=crearNumAleatorios();

    for (i in numeros) {
        let boton=document.createElement("input");
        attType=document.createAttribute("type");
        attType.value="button";
        boton.setAttributeNode(attType);
        attValue=document.createAttribute("value");
        attValue.value=numeros[i];
        boton.setAttributeNode(attValue);
        attName=document.createAttribute("class");
        attName.value="tecladoNumerico";
        boton.setAttributeNode(attName);
        document.body.appendChild(boton);
        if(i==4){
            let tabulador=document.createElement("br");
            document.body.appendChild(tabulador);
        }
    }
    llenarClave();
    verificarUsuario();
}

function llenarClave(){
    let botones=document.getElementsByClassName("tecladoNumerico");
    for(x=0;x<botones.length;x++){
        botones[x].addEventListener("click",ponerClave,false);
    }

    // botones.forEach(element => element.addEventListener("click",ponerClave,false));
    // for (i in botones) { botones[i].addEventListener("click",ponerClave,false);}
};

function ponerClave(){
    let clave=this.value;
    tClave=document.getElementById("clave");
    tClave.value=tClave.value+clave;
    
};

function crearNumAleatorios(){
    let numeros=[];
    cant=10;
    while(numeros.length<cant){
        let num = Math.round(Math.random()*(cant-1));
        let repe="no";
        //for (i in botones){
        for(x=0;x<numeros.length;x++){
            if(numeros[x]==num){
                repe="si"; 
                break;
            } 
        }
        if(repe=="no"){
            numeros[x]=num;
        }
    }
    return numeros;
}

personas=llenarDatos();

function verificarUsuario(){
    
    let bEnviar=document.getElementById("enviar");
    bEnviar.addEventListener("click",verificarDatos,false);

}
function verificarDatos(){
    try {
        
        nif=document.getElementById("nif").value;
        clave=document.getElementById("clave").value;
        persona=personas.find(p => p.user.nif == nif && p.user.contrasena == clave);
        if (persona == undefined){        
            nif.value="";
            clave.value="";
            throw "Nif o contraseña incorrecta";
        }else{
            document.cookie = "nif="+nif;
            window.location="movimientosBancarios.html";
        }
            

    } catch (error) {
        alert(error);
    }
   
}


 
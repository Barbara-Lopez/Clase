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
        attName=document.createAttribute("name");
        attName.value="tecladoNumerico";
        boton.setAttributeNode(attName);
        document.body.appendChild(boton);
        if(i==4){
            let tabulador=document.createElement("br");
            document.body.appendChild(tabulador);
        }
    }
    
}

function llenarClave(){
    let botones=document.getElementsByName("tecladoNumerico");
    for (i in botones) {
        botones[i].addEventListener("click",ponerClave);
    }
}
 
function ponerClave(){
    let clave= this.value;
    alert(clave);
            
};

function crearNumAleatorios(){
    let numeros=[];
    cant=10;
    while(numeros.length<cant){
        let num = Math.round(Math.random()*(cant-1));
        let repe="no";
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
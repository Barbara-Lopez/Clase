window.onload = function() {
    let numeros=crearNumAleatorios();

    alert(numeros.length+" "+numeros[0]+" "+numeros[1]);
    
    for (i in numeros) {
        alert(numeros[i]);
        let boton=document.createElement("button");
        let num=document.createTextNode(numero[i]);
        boton.appendChild(num);
        document.body.appendChild(boton);
    }



}

function crearNumAleatorios(){
    let numeros=[];

    for(x=0;x<10;x++){
        let num = Math.round(Math.random()*10);
        repe="no";
        if(numeros.leng>0){
            for (y in numeros) {
                if (y==num) {
                    repe="si"; 
                    break;
                }
            
            }
        }
        if(repe=="no"){
            numeros.push(num);
        }
        else{
            x--;
        }
    }
    return numeros;

}
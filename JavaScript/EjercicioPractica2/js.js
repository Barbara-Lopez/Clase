window.onload = function() {
    let numeros=crearNumAleatorios();
   
    let botones=document.getElementsByTagName("button");
    for (x in numeros) {
        let num= numero[x].toString();
        botones[x]=num;
    }



}

function crearNumAleatorios(){
    let numeros=[];
    repe="no";
    x=0
    for(x=0;x<10;x++){
        let num = Math.round(Math.random()*10);
        for (y in numeros) {
            if (y==num) {
                repe="si";
            }
            break;
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
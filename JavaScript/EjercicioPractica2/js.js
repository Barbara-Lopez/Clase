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

function Persona(){
    this.nombre=nombre;
    this.apellido=apellido;
    this.user=User;
    this.movimientosBancarios=MovimientoBancario;
}
function User(){
    this.nombre=nombre;
    this.contraseña=contraseña;
}
function MovimientoBancario(){
    this.fecha=fecha;
    this.concepto=concepto;
    this.importe=importe;
    this.saldo=saldo;
}
personas=[];
users=[];
movimientosBancarios=[];
llenarDatos();
function llenarDatos(){
    user= new User("11111111E",123456);
    dia =new Date(2000,2,12);
    movimiento= new MovimientoBancario(dia,"Gasto casa",100,5000);
    movimiento1=new MovimientoBancario(dia,"Ingreso casa",50,4950);
    movimiento2= new MovimientoBancario(dia,"Gasto coche",50,5000); 
    movimientosBancarios.push(movimiento,movimiento1,movimiento2);
    persona= new Persona("Maria","Lopez",user,movimientosBancarios);
    Personas.push(persona);
}
/*
function verificarUsuario(){

}
*/
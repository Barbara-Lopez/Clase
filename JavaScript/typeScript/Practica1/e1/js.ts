$(document).ready(function() {
    $("#finalizar").click(verificarDatos);
})

function verificarDatos() {
    try {
        verificarNombre();
        let edad:string=String($("#edad").val());
        let sexo:string=String($("#sexo").val());
        let peso:string=String($("#peso").val());
        let altura:string=String($("#altura").val());
        let estadoCivil:string=String($("#estadoCivil").val());
        
        if(edad==""){
            throw "La edad esta vacía"
        }
        if(sexo==""){
            throw "El sexo esta vacío"
        }
        if(peso==""){
            throw "El peso esta vacío"
        }
        if(altura==""){
            throw "La altura esta vacía"
        }
        if(estadoCivil==""){
            throw "El nombre esta vacío"
        }
        var edadEx=RegExp("^[0-9]{1,2}$");
        var sexoEx=RegExp("^[A-Z]{1}$");
       
        if(!edadEx.test(edad)){
            throw "La edad tiene que tener numeros"
        }
        if(!sexoEx.test(sexo)){
            throw "El sexo tiene que ser una H de hombre o una M de mujer y estar en mayusculas"
        }
        if(peso==""){
            throw "El peso esta vacío"
        }
        if(altura==""){
            throw "La altura esta vacía"
        }
        if(estadoCivil==""){
            throw "El nombre esta vacío"
        }
    } catch (error) {
        alert(error)
    }
   

}

function verificarNombre(){
    let nombre:string=String($("#nombre").val());
    var nombreEx=RegExp("^[A-Za-z]{4,}$");

    if(nombre==""){
        throw "El nombre esta vacío"
    }
    if(!nombreEx.test(nombre)){
        throw "El nombre no tiene un minimo de 4 de longitud"
    }
}
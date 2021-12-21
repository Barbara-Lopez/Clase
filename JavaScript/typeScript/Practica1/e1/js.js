///<reference path="Persona.ts" />
$(document).ready(function () {
    $("#finalizar").click(verificarDatos);
});
function verificarDatos() {
    try {
        verificarNombre();
        verificarEdad();
        verificarSexo();
        verificarPeso();
        verificarAltura();
        crearPersona();
    }
    catch (error) {
        alert(error);
    }
}
function verificarNombre() {
    var nombre = $("#nombre").val().toString();
    var nombreEx = RegExp("^[A-Za-z]{4,}$");
    if (nombre == "") {
        throw "El nombre esta vacío";
    }
    if (!nombreEx.test(nombre)) {
        throw "El nombre no tiene un minimo de 4 de longitud";
    }
}
function verificarEdad() {
    var edad = String($("#edad").val());
    var edadEx = RegExp("^[0-9]{1,2}$");
    if (edad == "") {
        throw "La edad esta vacía";
    }
    if (!edadEx.test(edad)) {
        throw "La edad tiene que tener 2 numeros";
    }
}
function verificarSexo() {
    var sexo = String($("#sexo").val());
    var sexoEx = RegExp("^[A-Z]{1}$");
    if (sexo == "") {
        throw "El sexo esta vacío";
    }
    if (!sexoEx.test(sexo)) {
        throw "El sexo tiene que ser una H de hombre o una M de mujer y estar en mayusculas";
    }
}
function verificarPeso() {
    var peso = String($("#peso").val());
    var pesoEx = RegExp("^[0-9]+([,][0-9]+)?$");
    if (peso == "") {
        throw "El peso esta vacío";
    }
    if (!pesoEx.test(peso)) {
        throw "El peso esta mal escrito";
    }
}
function verificarAltura() {
    var altura = String($("#altura").val());
    var alturaEx = RegExp("^[0-9]+([,][0-9]+)?$");
    if (altura == "") {
        throw "La altura esta vacía";
    }
    if (!alturaEx.test(altura)) {
        throw "La altura esta mal escrita";
    }
}
function crearPersona() {
    var nombre = String($("#nombre").val());
    var edad = String($("#edad").val());
    var sexo = String($("#sexo").val());
    var peso = Number($("#peso").val());
    var altura = Number($("#altura").val());
    var estadoCivil = String($("#estadoCivil option:selected").val());
    var persona = new Persona(nombre, edad, sexo, peso, altura, estadoCivil);
    persona.generaDNI();
    persona.comprobarSexo();
    var imc = persona.calcularIMC();
    var pesoIdeal;
    switch (imc) {
        case -1:
            pesoIdeal = "Estas en tu peso ideal";
            break;
        case 0:
            pesoIdeal = "Estas por debajo peso ideal";
            break;
        case 1:
            pesoIdeal = "Tienes sobrepeso";
            break;
        default:
            break;
    }
    var mayorMenor = persona.esMayorDeEdad();
    var siNo;
    if (mayorMenor == false) {
        siNo = "Es menor de edad";
    }
    else {
        siNo = "Es mayor de edad";
    }
    var datosPersona = persona.toString();
    var div = $("#informacion");
    div.append("<p>" + pesoIdeal + "</p><p>" + siNo + "</p><p>" + datosPersona + "</p>");
}

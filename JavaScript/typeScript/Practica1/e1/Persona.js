// tsc 
var Persona = /** @class */ (function () {
    function Persona(nombre, edad, sexo, peso, altura, estadoCivil) {
        this.nombre = nombre;
        this.edad = edad;
        this.sexo = sexo;
        this.peso = peso;
        this.altura = altura;
        this.estadoCivil = estadoCivil;
    }
    // getter
    Persona.prototype.getNombre = function () {
        return this.nombre;
    };
    Persona.prototype.getEdad = function () {
        return this.edad;
    };
    Persona.prototype.getDni = function () {
        return this.dni;
    };
    Persona.prototype.getSexo = function () {
        return this.sexo;
    };
    Persona.prototype.getPeso = function () {
        return this.peso;
    };
    Persona.prototype.getAltura = function () {
        return this.altura;
    };
    Persona.prototype.getEstadoCivil = function () {
        return this.estadoCivil;
    };
    //setter
    Persona.prototype.setNombre = function (nombre) {
        this.nombre = nombre;
    };
    Persona.prototype.setEdad = function (edad) {
        this.edad = edad;
    };
    Persona.prototype.setSexo = function (sexo) {
        this.sexo = sexo;
    };
    Persona.prototype.setPeso = function (peso) {
        this.peso = peso;
    };
    Persona.prototype.setAltura = function (altura) {
        this.altura = altura;
    };
    Persona.prototype.setEstadoCivil = function (estadoCivil) {
        this.estadoCivil = estadoCivil;
    };
    //funciones
    Persona.prototype.calcularIMC = function () {
        var calcular = (this.peso / (this.altura * this.altura));
        if (calcular <= 20) {
            return -1;
        }
        else {
            if (calcular > 20 && calcular < 25) {
                return 0;
            }
            else {
                return 1;
            }
        }
    };
    Persona.prototype.esMayorDeEdad = function () {
        var edad = parseInt(this.edad);
        /*
        if(edad>=18){
            return true;
        }else{
            return false;
        }*/
        return edad >= 18;
    };
    Persona.prototype.comprobarSexo = function () {
        var sexo = this.sexo;
        if (sexo != "H") {
            if (sexo != "M") {
                this.sexo = "H";
            }
        }
    };
    Persona.prototype.toString = function () {
        var sexo = this.sexo;
        if (sexo == "M") {
            sexo = "mujer";
        }
        else {
            sexo = "hombre";
        }
        return "La persona llamada " + this.nombre + " tiene " + this.edad + " años, su dni es " + this.dni + ", es " + sexo + ", su peso es de " + this.peso + ", su altura es de " + this.altura + " y su estado civil es " + this.estadoCivil;
    };
    Persona.prototype.generaDNI = function () {
        var arrayLetras = ["T", "R", "’W’", "A", "G", "M", "Y’", "F", "P", "D", "X", "B", "N", "J",
            "Z", "S", "Q", "V", "H", "L", "C", "K", "E"];
        var numero;
        var DIVISOR = 23;
        var numeroInt;
        for (var x = 0; x < 8; x++) {
            var num = Math.round(Math.random());
            numero += numero.toString();
        }
        var numeroInt = parseInt(numero);
        var resto = numeroInt / DIVISOR;
        numero += arrayLetras[resto];
        this.dni = numero;
    };
    return Persona;
}());

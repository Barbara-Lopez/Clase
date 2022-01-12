var Autor = /** @class */ (function () {
    function Autor(nombre, nacionalidad, fechaNacimiento) {
        this.nombre = nombre;
        this.nacionalidad = nacionalidad;
        this.fechaNacimiento = fechaNacimiento;
    }
    // getter and setter
    Autor.prototype.get_nombre = function () {
        return this.nombre;
    };
    Autor.prototype.set_nombre = function (value) {
        this.nombre = value;
    };
    Autor.prototype.get_nacionalidad = function () {
        return this.nacionalidad;
    };
    Autor.prototype.set_nacionalidad = function (value) {
        this.nacionalidad = value;
    };
    Autor.prototype.get_fechaNacimiento = function () {
        return this.fechaNacimiento;
    };
    Autor.prototype.set_fechaNacimiento = function (value) {
        this.fechaNacimiento = value;
    };
    return Autor;
}());

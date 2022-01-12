///<reference path="Autor.ts" />
var Libro = /** @class */ (function () {
    function Libro(titulo, tipo, editorial, anyo, autor) {
        this.titulo = titulo;
        this.tipo = tipo;
        this.editorial = editorial;
        this.anyo = anyo;
        this.autor = autor;
    }
    // getter and setter
    Libro.prototype.get_titulo = function () {
        return this.titulo;
    };
    Libro.prototype.set_titulo = function (value) {
        this.titulo = value;
    };
    Libro.prototype.get_tipo = function () {
        return this.tipo;
    };
    Libro.prototype.set_tipo = function (value) {
        this.tipo = value;
    };
    Libro.prototype.get_editorial = function () {
        return this.editorial;
    };
    Libro.prototype.set_editorial = function (value) {
        this.editorial = value;
    };
    Libro.prototype.get_anyo = function () {
        return this.anyo;
    };
    Libro.prototype.set_anyo = function (value) {
        this.anyo = value;
    };
    Libro.prototype.get_autor = function () {
        return this.autor;
    };
    Libro.prototype.set_autor = function (value) {
        this.autor = value;
    };
    return Libro;
}());

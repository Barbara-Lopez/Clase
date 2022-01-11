///<reference path="Autor.ts" />
class Libro{
    private titulo: string;
    private tipo: string;
    private editorial: string;
    private anyo: string;
    private autor: Autor;
   
    constructor(titulo: string,tipo: string,editorial: string,anyo: string,autor: Autor){
        this.titulo = titulo;
        this.tipo = tipo;
        this.editorial = editorial;
        this.anyo = anyo;
        this.autor = autor;
    }
    
    // getter and setter
    public get_titulo(): string {
        return this.titulo;
    }
    public set_titulo(value: string) {
        this.titulo = value;
    }
    public get_tipo(): string {
        return this.tipo;
    }
    public set_tipo(value: string) {
        this.tipo = value;
    }
    public get_editorial(): string {
        return this.editorial;
    }
    public set_editorial(value: string) {
        this.editorial = value;
    }
    public get_anyo(): string {
        return this.anyo;
    }
    public set_anyo(value: string) {
        this.anyo = value;
    }
    public get_autor(): Autor {
        return this.autor;
    }
    public set_autor(value: Autor) {
        this.autor = value;
    }

}
///<reference path="Libro.ts" />
class Copia{
    private id: string;
    private estado: string;
    private libro: Libro;
    
    constructor(id:string,estado: string,libro: Libro){
        this.id = id;
        this.estado = estado;
        this.libro = libro;
    }
    
    // getter and setter
    public get_libro(): Libro {
        return this.libro;
    }
    public set_libro(value: Libro) {
        this.libro = value;
    }
    public get_estado(): string {
        return this.estado;
    }
    public set_estado(value: string) {
        this.estado = value;
    }
    public get_id(): string {
        return this.id;
    }
    public set_id(value: string) {
        this.id = value;
    }
}
class Autor{
    private nombre: string;
    private nacionalidad: string;
    private fechaNacimiento: string;

    constructor(nombre: string,nacionalidad: string,fechaNacimiento: string){
        this.nombre = nombre;
        this.nacionalidad = nacionalidad;
        this.fechaNacimiento = fechaNacimiento;
    }

    // getter and setter
    public get_nombre(): string {
        return this.nombre;
    }
    public set_nombre(value: string) {
        this.nombre = value;
    }
    public get_nacionalidad(): string {
        return this.nacionalidad;
    }
    public set_nacionalidad(value: string) {
        this.nacionalidad = value;
    }
    
    public get_fechaNacimiento(): string {
        return this.fechaNacimiento;
    }
    public set_fechaNacimiento(value: string) {
        this.fechaNacimiento = value;
    }

}
// tsc 
class Persona{
    private nombre:string;
    private edad:string;
    private dni: string;
    private sexo:string;
    private peso:number;
    private altura:number;
    private estadoCivil:string;
    
    constructor(nombre:string,edad:string,sexo:string,peso:number,altura:number,estadoCivil:string){
        this.nombre=nombre;
        this.edad=edad;
        this.sexo=sexo;
        this.peso=peso;
        this.altura=altura;
        this.estadoCivil=estadoCivil;
    }
    // getter
    getNombre():string{
        return this.nombre;
    }
    getEdad():string{
        return this.edad;
    }
    getDni():string{
        return this.dni;
    }
    getSexo():string{
        return this.sexo;
    }
    getPeso():number{
        return this.peso;
    }
    getAltura():number{
        return this.altura;
    }
    getEstadoCivil():string{
        return this.estadoCivil;
    }

    //setter
    setNombre(nombre:string):void{
        this.nombre=nombre;
    }
    setEdad(edad:string):void{
        this.edad=edad;
    }
    setSexo(sexo:string):void{
        this.sexo=sexo;
    }
    setPeso(peso:number):void{
        this.peso=peso;
    }
    setAltura(altura:number):void{
        this.altura=altura;
    }
    setEstadoCivil(estadoCivil:string):void{
        this.estadoCivil=estadoCivil;
    }
    
    //funciones
    calcularIMC():number{
        var calcular:number=(this.peso/(this.altura*this.altura));
        if(calcular<=20){
            return -1
        }else{
            if(calcular>20 && calcular<25){
                return 0
            }else{
                return 1
            }
        }   
    }
    esMayorDeEdad():boolean{
        var edad:number=parseInt(this.edad);
        /*
        if(edad>=18){
            return true;
        }else{
            return false;
        }*/
        return edad >= 18;
    }
    comprobarSexo():void{
        var sexo:string=this.sexo;
        if(sexo!="H"){
            if (sexo!="M" ) {
                this.sexo="H"
            }
        }
    }
    toString():string{
        var sexo:string=this.sexo;
        if(sexo=="M"){
            sexo="mujer"
        }else{
            sexo="hombre"
        }
        
        return "La persona llamada "+this.nombre+" tiene "+this.edad+" años, su dni es "+this.dni+", es "+sexo+", su peso es de "+this.peso+", su altura es de "+this.altura+" y su estado civil es "+this.estadoCivil
    }
    generaDNI():void{
        var arrayLetras:string[]=["T", "R", "’W’", "A", "G", "M", "Y’", "F", "P", "D", "X", "B", "N", "J",
         "Z", "S", "Q","V", "H", "L", "C", "K", "E"];
        var numero:string;
        const DIVISOR = 23;
        var numeroInt:number;

        for(var x:number=0;x<8;x++){
            let num = Math.round(Math.random());
            numero+=numero.toString();
        }
        var numeroInt:number=parseInt(numero);
        var resto: number = numeroInt / DIVISOR;
    
        
        numero+=arrayLetras[resto];
        this.dni=numero;
    }
}





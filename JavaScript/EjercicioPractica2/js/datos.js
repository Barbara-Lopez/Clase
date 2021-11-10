personas=[];
movimientosBancarios=[];

function Persona(nombre,apellido,user,movimientosBancarios){
    this.nombre=nombre;
    this.apellido=apellido;
    this.user=user;
    this.movimientosBancarios=movimientosBancarios;
}
function User(nif,contrasena){
    this.nif=nif;
    this.contrasena=contrasena;
}
function MovimientoBancario(fecha,concepto,importe,saldo){
    this.fecha=fecha;
    this.concepto=concepto;
    this.importe=importe;
    this.saldo=saldo;
}

function llenarDatos(){
    user= new User("11111111E",123456);
    dia =new Date(2000,2,12);
    movimiento= new MovimientoBancario(dia,"Gasto casa",100,5000);
    movimiento1=new MovimientoBancario(dia,"Ingreso casa",50,4950);
    movimiento2= new MovimientoBancario(dia,"Gasto coche",50,5000); 
    movimientosBancarios.push( movimiento,movimiento1,movimiento2);
    let persona= new Persona("Maria","Lopez",user,movimientosBancarios);
    personas[0]=persona;
    return personas;
}

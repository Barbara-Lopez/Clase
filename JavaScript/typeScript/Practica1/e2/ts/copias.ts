///<reference path="../clases/Copia.ts" />
var copias:Copia[];
$(document).ready(function() {
    if("libros" in localStorage){
        visualizarCopias();
    }else{
        alert("No hay libros") 
        localStorage.setItem("copia",JSON.stringify(copias))
    }
    $("#anadir").click(anadirCopia);
})
function visualizarCopias() {
    let copia=JSON.parse(localStorage.getItem("copia"));
    let div=$("#listadoCopias");
    copia.forEach(e => div.append('<li id="'+e.id+'"> Copia: '+e.id+', Estado:'+e.estado+', Libro;'+e.libro.titulo+'</li>'));
    accionEliminarCopia();
}
function accionEliminarCopia() {
    $("li").click(function () {
        let id:string=$(this).attr("id");
        var copia=JSON.parse(localStorage.getItem("copia"));
        $(this).remove();
        for(let x=0; x<copia.length;x++){
           if(id==copia[x].id){
               var num:number=x;
               break;
           }
        }
        copia.splice(num,1)
        localStorage.setItem("copia",JSON.stringify(copia));
    })
}

function anadirCopia() {
    try {
        let titulo:string=String($("#titulo").val());
        let id:string=String($("#id").val());
        let estado:string=String($("#estado option:selected").val());
        if(titulo==""){
            throw "El titulo no se puede dejar vacio"
        }
        if(id==""){
            throw "El id no se puede dejar vacio"
        }

        let regId:RegExp=new RegExp("^[0-9]{2}[A-Z]{1}$")
        if(!regId.test(id)){
            throw "El tiene que tener el formato 000A";   
        }
        let libros=JSON.parse(localStorage.getItem("libros"));
        let libro=libros.filter(l=> l.titulo==titulo);
        if(libro.length==0){
            throw "El libro no existe vuelva a escribirlo"            
        }else{
            var copia:Copia=new Copia(id,estado,libro[0])
            let copias=JSON.parse(localStorage.getItem("copia"));
            copias.push(copia);
            localStorage.setItem("copia",JSON.stringify(copias));
            let div=$("#listadoCopias");
            let leng=copias.length-1
            div.append('<li id="'+copias[leng].id+'"> Copia: '+copias[leng].id+', Estado:'+copias[leng].estado+', Libro;'+copias[leng].libro.titulo+'</li>')
            accionEliminarCopia();
        }

    } catch (error) {
        alert(error)
    }
}
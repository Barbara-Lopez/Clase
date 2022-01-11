///<reference path="../clases/Libro.ts" />

var libros:Libro[];
$(document).ready(function() {
    if("libros" in localStorage){
        visualizarLibros();
    }else{
        alert("No hay libros") 
        localStorage.setItem("libros",JSON.stringify(libros))
    }
    $("#anadir").click(anadirLibro);
})

function visualizarLibros() {
    var libros=JSON.parse(localStorage.getItem("libros"));
    var div=$("#listadoLibros")
    for(let x=0; x<libros.length;x++){
        div.append('<li id="'+x+'">'+libros[x].titulo+", "+libros[x].tipo+
        ", Editorial: "+libros[x].editorial+", año: "+libros[x].anyo+", Autor:"+libros[x].autor.nombre)
    }
    accionEliminarLibro();
}
function accionEliminarLibro() {
    $("li").click(function () {
        let id:number=parseInt($(this).attr("id")) 
        var libros=JSON.parse(localStorage.getItem("libros"));
        $(this).remove();
        libros.splice(id,1)
        localStorage.setItem("libros",libros);
    })
}
function anadirLibro() {
    try {
        let titulo:string=String($("#titulo").val());
        let tipo:string=String($("#tipo option:selected").val());
        let editorial:string=String($("#editorial").val());
        let anno:string=String($("#anno").val());
        let nombre:string=String($("#nombre").val());
        let nacionalidad:string=String($("#nacionalidad").val());
        let fechaNac:string=String($("#fechaNac").val());
        
        if(titulo==""){
            throw "El titulo no pude estar vacio";
        }
        if(editorial==""){
            throw "La editorial no pude estar vacia";
        }
        if(anno==""){
            throw "El año no pude estar vacio";
        }
        if(nombre==""){
            throw "El nombre no pude estar vacio";
        }
        if(nacionalidad==""){
            throw "La nacionalidad no pude estar vacia";
        }
        if(fechaNac==""){
            throw "La fecha de nacimiento no pude estar vacia";
        }

        let regFecha:RegExp=new RegExp("^([0][1-9]|[12][0-9]|3[01])(\/|-)([0][1-9]|[1][0-2])\2(\d{4})$")
        if(!regFecha.test(fechaNac)){
            throw "La fecha tiene que tener el formato 01/01/2000";   
        }
        let regAnno:RegExp=new RegExp("^[1-2]{1}[0-9]{3}$")
        if(!regAnno.test(anno)){
            throw "EL año del libro no es valido";   
        }

        let regNombres:RegExp=new RegExp("^([a-zA-Z]{2,}\s[a-zA-z]{1,}'?-?[a-zA-Z]{2,}\s?([a-zA-Z]{1,})?)$");
        if(!regNombres.test(titulo)){
            throw "El titulo tiene caracteres no validos";   
        }
        if(!regNombres.test(nombre)){
            throw "El nombre tiene caracteres no validos";   
        }
        if(!regNombres.test(editorial)){
            throw "La editorial tiene caracteres no validos";   
        }
        

        var autor:Autor=new Autor(nombre,nacionalidad,fechaNac)
        var nuevoLibro:Libro=new Libro(titulo,tipo,editorial,anno,autor)
        let libro=JSON.parse(localStorage.getItem("libros"));
        libro.push(nuevoLibro)
        localStorage.setItem("libros",JSON.stringify(libro))

        var div=$("#listadoLibros")
        let id:number=libro.length-1
        div.append('<li id="'+id+'">'+nuevoLibro.get_titulo()+", "+nuevoLibro.get_tipo()+
        ", Editorial: "+nuevoLibro.get_editorial()+", año: "+nuevoLibro.get_anyo()+", Autor:"+nuevoLibro.get_autor().get_nombre())
        accionEliminarLibro();

        $("#titulo").val("");
        $("#editorial").val("");
        $("#anno").val("");
        $("#nombre").val("");
        $("#nacionalidad").val("");
        $("#fechaNac").val("");

    } catch (error) {
        alert(error)
    }
}
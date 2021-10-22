
let numEnlaces=Array.from(document.getElementsByClassName("enlace"));
expresion=new RegExp("http://prueba");
let enlacesPrueba=Array.from(numEnlaces.filter(e=>expresion.test(e.href)));

let parrafo1=document.createElement("p");
let contenido1=document.createTextNode("El numero de enlaces es: "+numEnlaces.length);
parrafo1.appendChild(contenido1);
document.body.appendChild(parrafo1);

let parrafo2=document.createElement("p");
let contenido2=document.createTextNode("La direccion a la que enlaza el penultimo enlace es: "+numEnlaces[numEnlaces.length-2].href);
parrafo2.appendChild(contenido2);
document.body.appendChild(parrafo2);

let parrafo3=document.createElement("p");
let contenido3=document.createTextNode("La cantidad de enlaces a http://prueba es: "+enlacesPrueba.length);
parrafo3.appendChild(contenido3);
document.body.appendChild(parrafo3);



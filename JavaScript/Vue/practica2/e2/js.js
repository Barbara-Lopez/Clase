class ContadorSumaResta extends HTMLElement{
    constructor(){
        super();

    }
    connectedCallback(){        
        this.innerHTML= '<button  id="suma">+</button><input type="text" name="" id="numero" value="0" readonly><button id="resta">-</button>'
        
        document.getElementById("suma").addEventListener("click",function () {
            if(parseInt(document.getElementById("numero").value)>=0 && parseInt(document.getElementById("numero").value)<100)
                document.getElementById("numero").value=parseInt(document.getElementById("numero").value)+1;
   
        });
        document.getElementById("resta").addEventListener("click",function () {
            if(parseInt(document.getElementById("numero").value)>0 && parseInt(document.getElementById("numero").value)<=100)
                document.getElementById("numero").value=parseInt(document.getElementById("numero").value)-1;

        });
    }
}

window.customElements.define('contador-suma-resta', ContadorSumaResta)

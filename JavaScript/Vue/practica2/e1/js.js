
class HolaMundo extends HTMLElement{
    constructor(){
        super();
        
    }
    render(){
         
    }
    
    connectedCallback(){
       this. innerHTML='<p>Hola mundo</p>'
        this.addEventListener("click",function () {
            alert("Hola mundo");
        });
    }
}
    

window.customElements.define('hola-mundo', HolaMundo)
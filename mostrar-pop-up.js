const modal_container=document.getElementById("content-modal")
const abrir=document.getElementById("iniciar_sesion")
const cerrar=document.getElementById("cerrar")


abrir.addEventListener('click', ()=>{

    modal_container.classList.add("mostrar")
    
    });
    cerrar.addEventListener('click', ()=>{

        modal_container.classList.remove("mostrar")
        
        });
    



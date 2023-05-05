const modal_container=document.getElementById("content-modal")
const abrir=document.getElementById("iniciar_sesion")
const cerrar=document.getElementById("cerrar")


    cerrar.addEventListener('click', ()=>{

        modal_container.classList.add("cerrar")
        window.location.href="login.html"
        
        });
        



        
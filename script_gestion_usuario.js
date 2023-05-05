const botonAbrir = document.getElementById("create");
const modal = document.getElementById("modal");
const botonCerrar = document.querySelector(".put-close");

botonAbrir.addEventListener('click', () => {

    modal.classList.add("aparecer")
    botonAbrir.classList.add("boton-desaparecer")

})
botonCerrar.addEventListener('click', () => {

    modal.classList.remove("aparecer")
    botonAbrir.classList.remove("boton-desaparecer")

})

const botonDerSimple = document.getElementById("simply-right")
const deslizador=document.getElementById("tabla")
const botonIzqSimple = document.getElementById("izquierda")

botonDerSimple.addEventListener('click', () => {

   deslizador.scrollLeft+=1000
})


botonIzqSimple.addEventListener('click', () => {

    deslizador.scrollLeft-=1000
     })

     //aparecer edit
 
     
  





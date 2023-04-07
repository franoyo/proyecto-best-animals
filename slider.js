const izq= document.querySelector(".botoncito-izq")
const der= document.querySelector(".botoncito-derecho")
const slider= document.querySelector(".put-cards")
izq.addEventListener('click', ()=>{

slider.scrollLeft-=400

})
der.addEventListener('click', ()=>{

    slider.scrollLeft+=400
    
    })
document.addEventListener("keyup", e=>{

    if (e.target.matches("#Buscador")){
  
        document.querySelectorAll(".contenedor_productos").forEach(Zapatos =>{
  
            Zapatos.textContent.toLowerCase().includes(e.target.value.toLowerCase())
              ?Zapatos.classList.remove("filtro")
              :Zapatos.classList.add("filtro")
        })
  
    }
  
  })
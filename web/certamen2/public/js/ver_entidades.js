const iniciarEliminacion = function(){
    let id = this.idLectura;
    let resp = await Swal.fire({tittle:"Esta de acuerdo?", text:"No se puede volver atras"
    , icono:"error", showCancelButton:true});
    if(resp.isConfirmed){
        Swal.fire("Quiere eliminar")
        if(eliminarLectura(id)){
            let lecturas = await getLecturas();
            cargarTabla(lecturas);
            Swal.fire("Consola eliminada", "info");
        } else{
            Swal.fire("Error al eliminar");
        }
    } else{
        Swal.fire("Cancelado","Peticion cancelada", "info");
    }
};


const cargarTabla = (lecturas)=>{
    let tbody = document.querySelector("#tbody-entidad");
    tbody.innerHTML = "";
    for(let i=0; i < lecturas.length; ++i){
        let tr = document.createElement("tr");
        let tdFecha = document.createElement("td");
        tdFecha.innerText = lecturas[i].fecha;
        let tdHora = document.createElement("td");
        tdHora.innerText = lecturas[i].hora;
        let tdMedidor = document.createElement("td");
        tdMedidor.innerText = lecturas[i].medidor;
        let tdValor = document.createElement("td");
        tdValor.innerText = lecturas[i].valor;
        let tdAcciones = document.createElement("td");
        let botonEliminar = document.createElement("button");
        botonEliminar.innerText = "Descartar Lectura";
        botonEliminar.classList.add("btn", "btn-danger");
        botonEliminar.idLectura = lecturas[i].id;
        botonEliminar.addEventListener("click", iniciarEliminacion);
        tdAcciones.appendChild(botonEliminar);
        tr.appendChild(tdFecha);
        tr.appendChild(tdHora);
        tr.appendChild(tdMedidor);
        tr.appendChild(tdValor);
        tbody.appendChild(tr);
    }
};



document.addEventListener("DOMContentLoaded", async()=>{
     let lecturas = await getTipos();
     let lecturas = await getMedidas();
     cargarTabla(lecturas);
});
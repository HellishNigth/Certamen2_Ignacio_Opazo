
const cargarTipos = async()=>{
    let resultado = await axios.get("api/tipos/get");
    let tipos = resultado.data;

    let tipoSelect = document.querySelector("#tipo-select");
    tipos.forEach(t=>{
        let option = document.createElement("option");
        option.innerText = t;
        tipoSelect.appendChild(option);
    });
};



const cargarMedidas = async()=>{
    let res = await axios.get("api/medidas/get");
    let medidas = res.data;

    let medidaSelect = document.querySelector("#medida-select");
    medidas.forEach(m=>{
        let option = document.createElement("option");
        option.innerText = m;
        medidaSelect.appendChild(option);
    });
};


document.addEventListener("DOMContentLoaded", ()=>{
    cargarTipos();
    cargarMedidas();
});

document.querySelector("#registrar-btn").addEventListener("click", async()=>{
    let fecha = document.querySelector("#fecha-txt").value;
    let hora = document.querySelector("#hora-txt").value;
    let medidor = document.querySelector("#tipo-select").value;
    let direccion = document.querySelector("#direccion-txt").value;
    let valor = document.querySelector("#valor-txt").value;
    let medida = document.querySelector("#medida-select").value;
    let lectura = {};
    lectura.fecha = fecha;
    lectura.hora = hora;
    lectura.medidor = medidor;
    lectura.direccion = direccion;
    lectura.valor = valor;
    lectura.medida = medida;
    console.log(lectura);
    let res = await ingresarLectura(lectura);
    await Swal.fire("Lectura Registrada", "Lectura registrada con exito", "info");
    window.location.href = "ver_consolas";
    
});
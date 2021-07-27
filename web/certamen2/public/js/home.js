
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

cargarTipos();
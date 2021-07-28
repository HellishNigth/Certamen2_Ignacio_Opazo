
const cargarTip = async()=>{
    let res = await axios.get("api/tip/get");
    let tip = res.data;

    let tipSelect = document.querySelector("#tip-select");
    tip.forEach(t2=>{
        let option = document.createElement("option");
        option.innerText = t2;
        tipSelect.appendChild(option);
    });
}

cargarTip();
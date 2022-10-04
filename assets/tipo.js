document.addEventListener('DOMContentLoaded', function(){
    buscar();
})

function buscar() {
    const btnbuscar = document.querySelector('#btnConsulta');
    btnbuscar.addEventListener('click', obtenerClientes);
}
async function obtenerClientes(){
    const url = "data/cliente.php?accion=listar";
    const respuesta = await fetch(url);
    const resultado = await respuesta.json();
    if(resultado.codigo === 200){
        const data = resultado.data;
        let html = "";
        data.forEach(cliente => {
            html += "<tr>";
            html += "<td>" + cliente.id + "</td>";
            html += "<td>" + cliente.razon_social + "</td>";
            html += "<td>" + cliente.tipo_documento + "</td>";
            html += "<td>" + cliente.numero_documento + "</td>";
            html += "<td>" + cliente.direccion + "</td>";
            html += "</tr>";
        });
        const tabla = document.querySelector("#tblData");
        tabla.innerHTML = html
    }
}
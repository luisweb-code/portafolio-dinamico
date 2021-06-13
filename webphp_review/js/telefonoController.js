window.onload = iniciar;

function iniciar() {
  let $botonTelefono = document.getElementById("btn-telefono");
  $botonTelefono.addEventListener("click", crearInput);
}

function crearInput() {
  let demo = document.getElementById("telefono-extra");
  let nodoTelefono = document.createElement("input");
  nodoTelefono.setAttribute("type", "text");
  nodoTelefono.setAttribute("class", "form-control mt-2");
  nodoTelefono.setAttribute("name", "txtTelefonos[]");
  demo.appendChild(nodoTelefono);
}

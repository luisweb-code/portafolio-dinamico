window.onload = iniciar;
const d = document;

function iniciar() {
  const $btn_buscar = d.querySelector(".btnBuscar");
  $btn_buscar.addEventListener("click", buscar);
}

function buscar() {
  let $miFormulario = d.querySelector(".miFormulario");
  $codigo = $miFormulario.txtCodigo.value;
  //console.log($codigo);
  getAll($codigo);
}

const getAll = async ($codigo) => {
  let $producto = d.querySelector("#producto");
  let $precio = d.querySelector("#precio");
  let $stock = d.querySelector("#stock");
  let $fecha = d.querySelector("#fecha");
  let $table = d.querySelector(".table");
  let $imgPostre = d.querySelector("#imgPostre");

  try {
    //Recibir y convertir tu objeto es el objeto JSON
    let res = await fetch(`http://localhost:3000/postres/${$codigo}`),
      json = await res.json();

    //Manipulación del error
    if (!res.ok) throw { status: res.status, statusText: res.statusText };

    console.log(json);

    //Imprimir sin fragment , pero este es un demo para entender sincronia
    $producto.innerHTML = json.producto;
    $precio.innerHTML = json.precio;
    $stock.innerHTML = json.stock;
    $fecha.innerHTML = json.date;
    //Buscar la imagen y establecer los valores nuevos ala etiqueta de img
    $imgPostre.setAttribute("src", `./assets/img/${json.id}.jpg`);
    $imgPostre.setAttribute("alt", "imagen");
    $imgPostre.setAttribute("id", "imgPostre");
  } catch (err) {
    let message = err.statusText || "Ocurrio un error";
    /* $table.insertAdjacentHTML(
      "afterend",
      `<p><b>${err.status}: ${message}</b></p>`
    ); */
    Swal.fire({
      title: "No existe el producto!",
      icon: "error",
      confirmButtonText: "Intentelo de nuevo",
      allowOutsideClick: false,
    });
  }
};

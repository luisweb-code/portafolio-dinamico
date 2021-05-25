const d = document;

function pagoTotal(cliente, producto, cantidad, $tabla) {
  switch (producto) {
    case "cocina":
      let precio = 1200.0;
      let subTotalPago = precio * Number(cantidad);
      let montoDescuento = precio;
      let montoPagar = subTotalPago - montoDescuento;
      console.log(cliente, precio, subTotalPago, montoDescuento, montoPagar);
      console.log($tabla.rows[1].cells[0]);
      /* $tabla.rows[1].cells[0].innerText = cliente;
      $tabla.rows[1].cells[1].innerText = cliente;
      $tabla.rows[1].cells[2].innerText = cliente;
      $tabla.rows[1].cells[3].innerText = cliente;
      $tabla.rows[1].cells[4].innerText = cliente; */
      for (let i = 0; i < 5; i++) {
        $tabla.rows[1].cells[i].innerText = cliente;
          
      }
      
      break;

    default:
      break;
  }
}

export default function montoPago(formulario, procesar, tabla) {
  let $procesar = d.querySelector(procesar);
  let $tabla = d.querySelector(tabla);

  $procesar.addEventListener("click", (e) => {
    e.preventDefault();
    const $form = d.querySelector(formulario);
    let cliente = $form.txtCliente.value;
    let producto = $form.txtProducto.value;
    let cantidad = $form.txtCantidad.value;

    if (
      (cliente === "" && cantidad === "") ||
      cantidad === "" ||
      cliente === ""
    ) {
      alert("Error en los datos");
    } else {
      //console.log(cliente, producto, cantidad);
      pagoTotal(cliente, producto, cantidad, $tabla);
    }
  });
}

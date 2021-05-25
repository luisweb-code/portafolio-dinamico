const d = document;

function pagoTotal(cliente, producto, cantidad, $tabla) {
  let subTotalPago, montoDescuento, montoPagar, precio;
  switch (producto) {
    case "cocina":
      precio = 1200;
      subTotalPago = precio * Number(cantidad);
      montoDescuento = precio;
      montoPagar = subTotalPago - montoDescuento;

      $tabla.rows[1].cells[0].innerText = cliente;
      $tabla.rows[1].cells[1].innerText = `$ ${precio.toFixed(2)}`;
      $tabla.rows[1].cells[2].innerText = `$ ${subTotalPago.toFixed(2)}`;
      $tabla.rows[1].cells[3].innerText = `$ ${montoDescuento.toFixed(2)}`;
      $tabla.rows[1].cells[4].innerText = `$ ${montoPagar.toFixed(2)}`;

      break;
    case "refrigeradora":
      precio = 2500;
      subTotalPago = precio * Number(cantidad);
      montoDescuento = precio;
      montoPagar = subTotalPago - montoDescuento;
      $tabla.rows[1].cells[0].innerText = cliente;
      $tabla.rows[1].cells[1].innerText = `$${precio.toFixed(2)}`;
      $tabla.rows[1].cells[2].innerText = `$ ${subTotalPago.toFixed(2)}`;
      $tabla.rows[1].cells[3].innerText = `$ ${montoDescuento.toFixed(2)}`;
      $tabla.rows[1].cells[4].innerText = `$ ${montoPagar.toFixed(2)}`;

      break;
    case "television":
      precio = 3200;
      subTotalPago = precio * Number(cantidad);
      montoDescuento = precio;
      montoPagar = subTotalPago - montoDescuento;
      $tabla.rows[1].cells[0].innerText = cliente;
      $tabla.rows[1].cells[1].innerText = `$${precio.toFixed(2)}`;
      $tabla.rows[1].cells[2].innerText = `$ ${subTotalPago.toFixed(2)}`;
      $tabla.rows[1].cells[3].innerText = `$ ${montoDescuento.toFixed(2)}`;
      $tabla.rows[1].cells[4].innerText = `$ ${montoPagar.toFixed(2)}`;

      break;
    case "lavadora":
      precio = 1000;
      subTotalPago = precio * Number(cantidad);
      montoDescuento = precio;
      montoPagar = subTotalPago - montoDescuento;
      $tabla.rows[1].cells[0].innerText = cliente;
      $tabla.rows[1].cells[1].innerText = `$${precio.toFixed(2)}`;
      $tabla.rows[1].cells[2].innerText = `$ ${subTotalPago.toFixed(2)}`;
      $tabla.rows[1].cells[3].innerText = `$ ${montoDescuento.toFixed(2)}`;
      $tabla.rows[1].cells[4].innerText = `$ ${montoPagar.toFixed(2)}`;

      break;
    case "radiograbadora":
      precio = 700;
      subTotalPago = precio * Number(cantidad);
      montoDescuento = precio;
      montoPagar = subTotalPago - montoDescuento;
      $tabla.rows[1].cells[0].innerText = cliente;
      $tabla.rows[1].cells[1].innerText = `$${precio.toFixed(2)}`;
      $tabla.rows[1].cells[2].innerText = `$ ${subTotalPago.toFixed(2)}`;
      $tabla.rows[1].cells[3].innerText = `$ ${montoDescuento.toFixed(2)}`;
      $tabla.rows[1].cells[4].innerText = `$ ${montoPagar.toFixed(2)}`;

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

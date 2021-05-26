const d = document;

function pagoTotal(cliente, producto, cantidad, $tabla) {
  let subTotalPago, montoDescuento, montoPagar, precio;
  switch (producto) {
    case "cocina":
      if (Number(cantidad) === 1) {
        precio = 1200;
        subTotalPago = precio;
        montoDescuento = precio;
        montoPagar = precio;
        const arrDatos = [precio, subTotalPago, montoDescuento, montoPagar];

        for (let i = 0; i < arrDatos.length; i++) {
          $tabla.rows[1].cells[i].innerText = `$ ${arrDatos[i]}.00`;
        }

        $tabla.rows[1].cells[4].innerText = cliente;
      } else {
        precio = 1200;
        subTotalPago = precio * Number(cantidad);
        montoDescuento = precio;
        montoPagar = subTotalPago - montoDescuento;
        const arrDatos = [precio, subTotalPago, montoDescuento, montoPagar];

        for (let i = 0; i < arrDatos.length; i++) {
          $tabla.rows[1].cells[i].innerText = `$ ${arrDatos[i]}.00`;
        }

        $tabla.rows[1].cells[4].innerText = cliente;
      }

      break;
    case "refrigeradora":
      if (Number(cantidad) === 1) {
        precio = 2500;
        subTotalPago = precio;
        montoDescuento = precio;
        montoPagar = precio;
        const arrDatos = [precio, subTotalPago, montoDescuento, montoPagar];

        for (let i = 0; i < arrDatos.length; i++) {
          $tabla.rows[1].cells[i].innerText = `$ ${arrDatos[i]}.00`;
        }

        $tabla.rows[1].cells[4].innerText = cliente;
      } else {
        precio = 2500;
        subTotalPago = precio * Number(cantidad);
        montoDescuento = precio;
        montoPagar = subTotalPago - montoDescuento;
        const arrDatos = [precio, subTotalPago, montoDescuento, montoPagar];

        for (let i = 0; i < arrDatos.length; i++) {
          $tabla.rows[1].cells[i].innerText = `$ ${arrDatos[i]}.00`;
        }

        $tabla.rows[1].cells[4].innerText = cliente;
      }

      break;
    case "television":
      if (Number(cantidad) === 1) {
        precio = 3200;
        subTotalPago = precio;
        montoDescuento = precio;
        montoPagar = precio;
        const arrDatos = [precio, subTotalPago, montoDescuento, montoPagar];

        for (let i = 0; i < arrDatos.length; i++) {
          $tabla.rows[1].cells[i].innerText = `$ ${arrDatos[i]}.00`;
        }

        $tabla.rows[1].cells[4].innerText = cliente;
      } else {
        precio = 3200;
        subTotalPago = precio * Number(cantidad);
        montoDescuento = precio;
        montoPagar = subTotalPago - montoDescuento;
        const arrDatos = [precio, subTotalPago, montoDescuento, montoPagar];

        for (let i = 0; i < arrDatos.length; i++) {
          $tabla.rows[1].cells[i].innerText = `$ ${arrDatos[i]}.00`;
        }

        $tabla.rows[1].cells[4].innerText = cliente;
      }

      break;
    case "lavadora":
      if (Number(cantidad) === 1) {
        precio = 1000;
        subTotalPago = precio;
        montoDescuento = precio;
        montoPagar = precio;
        const arrDatos = [precio, subTotalPago, montoDescuento, montoPagar];

        for (let i = 0; i < arrDatos.length; i++) {
          $tabla.rows[1].cells[i].innerText = `$ ${arrDatos[i]}.00`;
        }

        $tabla.rows[1].cells[4].innerText = cliente;
      } else {
        precio = 1000;
        subTotalPago = precio * Number(cantidad);
        montoDescuento = precio;
        montoPagar = subTotalPago - montoDescuento;
        const arrDatos = [precio, subTotalPago, montoDescuento, montoPagar];

        for (let i = 0; i < arrDatos.length; i++) {
          $tabla.rows[1].cells[i].innerText = `$ ${arrDatos[i]}.00`;
        }

        $tabla.rows[1].cells[4].innerText = cliente;
      }

      break;
    case "radiograbadora":
      if (Number(cantidad) === 1) {
        precio = 700;
        subTotalPago = precio;
        montoDescuento = precio;
        montoPagar = precio;
        const arrDatos = [precio, subTotalPago, montoDescuento, montoPagar];

        for (let i = 0; i < arrDatos.length; i++) {
          $tabla.rows[1].cells[i].innerText = `$ ${arrDatos[i]}.00`;
        }

        $tabla.rows[1].cells[4].innerText = cliente;
      } else {
        precio = 700;
        subTotalPago = precio * Number(cantidad);
        montoDescuento = precio;
        montoPagar = subTotalPago - montoDescuento;
        const arrDatos = [precio, subTotalPago, montoDescuento, montoPagar];

        for (let i = 0; i < arrDatos.length; i++) {
          $tabla.rows[1].cells[i].innerText = `$ ${arrDatos[i]}.00`;
        }

        $tabla.rows[1].cells[4].innerText = cliente;
      }

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
      Swal.fire({
        title: 'Hay error en los datos!',
        icon: 'error',
        confirmButtonText: 'Intentelo de nuevo',
        allowOutsideClick: false
      })
    } else {
      //console.log(cliente, producto, cantidad);
      pagoTotal(cliente, producto, cantidad, $tabla);
    }
  });
}

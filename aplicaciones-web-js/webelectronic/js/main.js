window.onload = iniciar;

function iniciar() {
  document
    .getElementById("idProcesar")
    .addEventListener("click", todoListo, false);
}

/*Capturar datos */
function getNombre() {
  const idNombre = document.getElementById("idNombre");
  return idNombre.value;
}
function getProducto() {
  const idProducto = document.getElementById("idProducto");
  return idProducto.value;
}
function getCantidad() {
  const idCantidad = document.getElementById("idCantidad");
  return parseInt(idCantidad.value);
}

function formatoNumero(numero) {
  let formato = Intl.NumberFormat("es-MX", {
    style: "currency",
    currency: "MXN",
  }).format(numero);
  return formato;
}

/*Funciones de calculo*/

function getPrecio() {
  const opcion = getProducto();
  let cantidad = getCantidad();
  let montoMax = 10000;
  let descuentoDiez = 10;
  let descuentoCinco = 5;
  let descuento = 0;
  let totalPago = 0;
  let subTotal = 0;

  switch (opcion) {
    case "cocina":
      let precioCocina = 1200.0;
      subTotal = cantidad * precioCocina;
      if (subTotal > montoMax) {
        descuento = (subTotal * descuentoDiez) / 100;
        totalPago = subTotal - descuento;
      } else {
        descuento = (montoMax * descuentoCinco) / 100;
        totalPago = subTotal - descuento;
      }
      document.getElementById("idPrecio").innerText = formatoNumero(
        precioCocina
      );
      document.getElementById("idSubtotal").innerText = formatoNumero(subTotal);
      document.getElementById("idMontoDescuento").innerText = formatoNumero(
        descuento
      );
      document.getElementById("idMontoPago").innerText = formatoNumero(
        totalPago
      );
      break;
    case "refrigeradora":
      let precioRefrigeradora = 2500.0;
      subTotal = cantidad * precioRefrigeradora;
      if (subTotal > montoMax) {
        descuento = (subTotal * descuentoDiez) / 100;
        totalPago = subTotal - descuento;
      } else {
        descuento = (montoMax * descuentoCinco) / 100;
        totalPago = subTotal - descuento;
      }
      document.getElementById("idPrecio").innerText = formatoNumero(
        precioRefrigeradora
      );
      document.getElementById("idSubtotal").innerText = formatoNumero(subTotal);
      document.getElementById("idMontoDescuento").innerText = formatoNumero(
        descuento
      );
      document.getElementById("idMontoPago").innerText = formatoNumero(
        totalPago
      );
      break;
    case "television":
      let precioTelevision = 3200.0;
      subTotal = cantidad * precioTelevision;
      if (subTotal > montoMax) {
        descuento = (subTotal * descuentoDiez) / 100;
        totalPago = subTotal - descuento;
      } else {
        descuento = (montoMax * descuentoCinco) / 100;
        totalPago = subTotal - descuento;
      }
      document.getElementById("idPrecio").innerText = formatoNumero(
        precioTelevision
      );
      document.getElementById("idSubtotal").innerText = formatoNumero(subTotal);
      document.getElementById("idMontoDescuento").innerText = formatoNumero(
        descuento
      );
      document.getElementById("idMontoPago").innerText = formatoNumero(
        totalPago
      );
      break;
    case "lavadora":
      let precioLavadora = 1000.0;
      subTotal = cantidad * precioLavadora;
      if (subTotal > montoMax) {
        descuento = (subTotal * descuentoDiez) / 100;
        totalPago = subTotal - descuento;
      } else {
        descuento = (montoMax * descuentoCinco) / 100;
        totalPago = subTotal - descuento;
      }
      document.getElementById("idPrecio").innerText = formatoNumero(
        precioLavadora
      );
      document.getElementById("idSubtotal").innerText = formatoNumero(subTotal);
      document.getElementById("idMontoDescuento").innerText = formatoNumero(
        descuento
      );
      document.getElementById("idMontoPago").innerText = formatoNumero(
        totalPago
      );
      break;
    case "radiograbadora":
      let precioRadiograbadora = 700.0;
      subTotal = cantidad * precioRadiograbadora;
      if (subTotal > montoMax) {
        descuento = (subTotal * descuentoDiez) / 100;
        totalPago = subTotal - descuento;
      } else {
        descuento = (montoMax * descuentoCinco) / 100;
        totalPago = subTotal - descuento;
      }
      document.getElementById("idPrecio").innerText = formatoNumero(
        precioRadiograbadora
      );
      document.getElementById("idSubtotal").innerText = formatoNumero(subTotal);
      document.getElementById("idMontoDescuento").innerText = formatoNumero(
        descuento
      );
      document.getElementById("idMontoPago").innerText = formatoNumero(
        totalPago
      );
      break;
  }
}

function todoListo(e) {
  getPrecio();
  e.preventDefault();
}

import montoPago from "./calculos/pagar.js";

const d = document;

d.addEventListener("DOMContentLoaded", (e) => {
  montoPago("#miFormulario", "#idProcesar", "#idTabla");
});

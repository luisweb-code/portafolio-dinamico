import contadorVotos from "./modulos/votos.js";

const d = document;

d.addEventListener("DOMContentLoaded", (e) => {
  contadorVotos(
    "#candidataUno",
    "#candidataDos",
    "#candidataTres",
    "#candidataCuatro"
  );
});

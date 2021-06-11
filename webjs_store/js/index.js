import {cajaCobros, compra} from "./module/caja_cobros.js";



document.addEventListener("DOMContentLoaded", (e) => {
  cajaCobros(
    "#p001",
    "#p002",
    "#p003",
    "#p004",
    "#p005",
    "#p006",
    "#p007",
    "#p008",
    "#p009",
    "#p010",
    "#p011",
    "#p012"
  );
  compra("#linkCompra");
});

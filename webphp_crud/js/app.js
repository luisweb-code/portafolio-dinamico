//variables
const $exito = !!document.getElementById("exito");
const $fracaso = !!document.getElementById("fracaso");

if ($exito) {
  setTimeout(() => {
    document.querySelector(".exito").style.display = "none";
  }, 4000);
}
if ($fracaso) {
  setTimeout(() => {
    document.querySelector(".fracaso").style.display = "none";
  }, 4000);
}

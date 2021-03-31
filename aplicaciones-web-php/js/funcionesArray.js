document.getElementById("btn-envio").addEventListener("click", myFunction);

function myFunction() {
    var x = document.getElementById("myOcultar");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }
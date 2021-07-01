window.onload = iniciar;

function getMes() {
  let numMes;
  var mes = new Date();
  let month = new Array();

  month[0] = "1";
  month[1] = "2";
  month[2] = "3";
  month[3] = "4";
  month[4] = "5";
  month[5] = "6";
  month[6] = "7";
  month[7] = "8";
  month[8] = "9";
  month[9] = "10";
  month[10] = "11";
  month[11] = "12";

  numMes = month[mes.getMonth()];

  return Number(numMes);
}

function iniciar() {
  let $icoCalendar = document.querySelector("#calendario");
  let $inpFecha = document.querySelector("#fecha");

  $icoCalendar.addEventListener("click", (e) => {
    let fecha = new Date();

    let dia = fecha.getDate();

    let anio = fecha.getFullYear();
    //console.log(dia, getMes(), anio);
    $inpFecha.value = `${anio}/${getMes()}/${dia}`;
  });
}

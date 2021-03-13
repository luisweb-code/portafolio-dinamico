var votos1 = 0;

function voto1() {
  votos1++;
  publicacionCandidta1(votos1);
  porcentajeCandidata1(votos1);
}

function publicacionCandidta1(votos1) {
  let candidata1 = document.getElementById("idTotalVotos1");
  candidata1.innerText = votos1;
}

function porcentajeCandidata1(votos1) {
  let porcentaje1 = (votos1 * 100) / getTotales();
  let porcentajePublicacion = document.getElementById("idPorVotos1");
  porcentajePublicacion.innerText = porcentaje1.toFixed(2);
}

var votos2 = 0;

function voto2() {
  votos2++;
  publicacionCandidta2(votos2);
  porcentajeCandidata2(votos2);
}

function publicacionCandidta2(votos2) {
  let candidata2 = document.getElementById("idTotalVotos2");
  candidata2.innerText = votos2;
}

function porcentajeCandidata2(votos2) {
  let porcentaje2 = (votos2 * 100) / getTotales();
  let porcentajePublicacion = document.getElementById("idPorVotos2");
  porcentajePublicacion.innerText = porcentaje2.toFixed(2);
}

var votos3 = 0;

function voto3() {
  votos3++;
  publicacionCandidta3(votos3);
  porcentajeCandidata3(votos3);
}

function publicacionCandidta3(votos3) {
  let candidata3 = document.getElementById("idTotalVotos3");
  candidata3.innerText = votos3;
}

function porcentajeCandidata3(votos3) {
  let porcentaje3 = (votos3 * 100) / getTotales();
  let porcentajePublicacion = document.getElementById("idPorVotos3");
  porcentajePublicacion.innerText = porcentaje3.toFixed(2);
}

var votos4 = 0;

function voto4() {
  votos4++;
  publicacionCandidta4(votos4);
  porcentajeCandidata4(votos4);
}

function publicacionCandidta4(votos4) {
  let candidata4 = document.getElementById("idTotalVotos4");
  candidata4.innerText = votos4;
}

function porcentajeCandidata4(votos4) {
  let porcentaje4 = (votos4 * 100) / getTotales();
  let porcentajePublicacion = document.getElementById("idPorVotos4");
  porcentajePublicacion.innerText = porcentaje4.toFixed(2);
}

function getTotales() {
  let total = votos1 + votos2 + votos3 + votos4;
  return total;
}

function ganadora() {
  if (votos1 > votos2) {
    let candidata = document.getElementById("idGanadora");
    candidata.innerHTML = "Danna Garcia";
    let votos = document.getElementById("idVotos");
    votos.innerHTML = votos1;
    let totalesvotos = document.getElementById("idTotalVotantes");
    totalesvotos.innerHTML = getTotales();
  }

  if (votos2 > votos1) {
    let candidata = document.getElementById("idGanadora");
    candidata.innerHTML = "Victoria Jenkins";
    let votos = document.getElementById("idVotos");
    votos.innerHTML = votos2;
    let totalesvotos = document.getElementById("idTotalVotantes");
    totalesvotos.innerHTML = getTotales();
  } 
}

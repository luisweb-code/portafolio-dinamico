const d = document;

function totalVotos(votoUno, votoDos, votoTres, votoCuatro) {
  let total = 0;
  total = Number(votoUno + votoDos + votoTres + votoCuatro);
  d.getElementById("total_votantes").innerText = total;
  return total;
}

function porcentajeVotos(cVoto, cien, total) {
  let porcentaje = (cVoto * cien) / total;
  if (porcentaje > cien) {
    return (porcentaje = "100.00");
  }
  return porcentaje.toFixed(2);
}

function ganadora(votoUno, votoDos, votoTres, votoCuatro) {
  const arrVotos = [votoUno, votoDos, votoTres, votoCuatro];
  let max = Math.max(...arrVotos);

  if (votoUno === max) {
    d.querySelector(
      "#ganadora_nombre"
    ).innerText = `Marisol Romero (${max}) votos`;
  } else if (votoDos === max) {
    d.querySelector(
      "#ganadora_nombre"
    ).innerText = `Jesica Fernández (${max}) votos`;
  } else if (votoTres == max) {
    d.querySelector(
      "#ganadora_nombre"
    ).innerText = `Natalia Petrov (${max}) votos`;
  } else if (votoCuatro === max) {
    d.querySelector(
      "#ganadora_nombre"
    ).innerText = `Tasani Saeli (${max}) votos`;
  }
}

export default function contadorVotos(cUno, cDos, cTres, cCuatro) {
  let votoUno = 0,
    votoDos = 0,
    votoTres = 0,
    votoCuatro = 0,
    cien = 100,
    total = 1;

  d.addEventListener("click", (e) => {
    e.preventDefault();
    if (e.target.matches(cUno)) {
      votoUno++;
      let porVotos = porcentajeVotos(votoUno, cien, total);
      d.getElementById("cantidad_uno_votos").innerText = votoUno;
      d.getElementById("porcentaje_uno_votos").innerText = porVotos;
    }
    if (e.target.matches(cDos)) {
      votoDos++;
      let porVotos = porcentajeVotos(votoDos, cien, total);
      d.getElementById("cantidad_dos_votos").innerText = votoDos;
      d.getElementById("porcentaje_dos_votos").innerText = porVotos;
    }
    if (e.target.matches(cTres)) {
      votoTres++;
      let porVotos = porcentajeVotos(votoTres, cien, total);
      d.getElementById("cantidad_tres_votos").innerText = votoTres;
      d.querySelector("#porcentaje_tres_votos").innerText = porVotos;
    }
    if (e.target.matches(cCuatro)) {
      votoCuatro++;
      let porVotos = porcentajeVotos(votoCuatro, cien, total);
      d.getElementById("cantidad_cuatro_votos").innerText = votoCuatro;
      d.querySelector("#porcentaje_cuatro_votos").innerText = porVotos;
    }
    total = totalVotos(votoUno, votoDos, votoTres, votoCuatro);
    ganadora(votoUno, votoDos, votoTres, votoCuatro);
  });
}

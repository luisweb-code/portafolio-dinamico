const d = document;
let cp1 = 0,
  cp2 = 0,
  cp3 = 0,
  cp4 = 0,
  cp5 = 0,
  cp6 = 0,
  cp7 = 0,
  cp8 = 0,
  cp9 = 0,
  cp10 = 0,
  cp11 = 0,
  cp12 = 0;
let pago_total = 0;
let $total = d.getElementById("totalPago");
let arrCompra = [];
let arrCantidadP = [
  cp1,
  cp2,
  cp3,
  cp4,
  cp5,
  cp6,
  cp7,
  cp8,
  cp9,
  cp10,
  cp11,
  cp12,
];

function listaProductos(arrCompra) {
  let lista = "";
  for (let i = 0; i < arrCompra.length; i++) {
    lista += `${arrCompra[i]}\n`;
  }
  return lista;
}
function listaCantidad(arrCantidadP) {
  let lista = "";
  for (let i = 0; i <= 11; i++) {
    if (arrCantidadP[i] !== 0) {
      lista += `${arrCantidadP[i]}\n`;
    }
  }
  return lista;
}

function cantidadP(
  cp1,
  cp2,
  cp3,
  cp4,
  cp5,
  cp6,
  cp7,
  cp8,
  cp9,
  cp10,
  cp11,
  cp12,
  arrCantidadP
) {
  if (cp1 > 0) {
    arrCantidadP[0] = `${cp1} xtremes`;
  } else {
    arrCantidadP[0] = 0;
  }
  if (cp2 > 0) {
    arrCantidadP[1] = `${cp2} bolsa surtido`;
  } else {
    arrCantidadP[1] = 0;
  }
  if (cp3 > 0) {
    arrCantidadP[2] = `${cp3} gomitas`;
  } else {
    arrCantidadP[2] = 0;
  }
  if (cp4 > 0) {
    arrCantidadP[3] = `${cp4} lunetas`;
  } else {
    arrCantidadP[3] = 0;
  }
  if (cp5 > 0) {
    arrCantidadP[4] = `${cp5} chocolates`;
  } else {
    arrCantidadP[4] = 0;
  }

  if (cp6 > 0) {
    arrCantidadP[5] = `${cp6} panditas`;
  } else {
    arrCantidadP[5] = 0;
  }

  if (cp7 > 0) {
    arrCantidadP[6] = `${cp7} bombones`;
  } else {
    arrCantidadP[6] = 0;
  }

  if (cp8 > 0) {
    arrCantidadP[7] = `${cp8} gusanitos`;
  } else {
    arrCantidadP[7] = 0;
  }

  if (cp9 > 0) {
    arrCantidadP[8] = `${cp9} bote paletas`;
  } else {
    arrCantidadP[8] = 0;
  }

  if (cp10 > 0) {
    arrCantidadP[9] = `${cp10} jumbo cereza`;
  } else {
    arrCantidadP[9] = 0;
  }

  if (cp11 > 0) {
    arrCantidadP[10] = `${cp11} amaranto`;
  } else {
    arrCantidadP[10] = 0;
  }

  if (cp12 > 0) {
    arrCantidadP[11] = `${cp12} obleas mini`;
  } else {
    arrCantidadP[11] = 0;
  }
}

export function cajaCobros(p1, p2, p3, p4, p5, p6, p7, p8, p9, p10, p11, p12) {
  d.addEventListener("click", (e) => {
    if (e.target.matches(p1)) {
      let $cantidad = d.getElementById("cp001");
      cp1++;
      let $codigo = d.querySelector(p1);
      pago_total += 25;
      $cantidad.innerHTML = cp1;
      arrCompra.push(`${$codigo.value} xtremes $25`);
    }
    if (e.target.matches(p2)) {
      let $cantidad = d.getElementById("cp002");
      cp2++;
      let $codigo = d.querySelector(p2);
      pago_total += 85;
      $cantidad.innerHTML = cp2;
      arrCompra.push(`${$codigo.value} bolsa surtido $85`);
    }
    if (e.target.matches(p3)) {
      let $cantidad = d.getElementById("cp003");
      cp3++;
      let $codigo = d.querySelector(p3);
      pago_total += 55;
      $cantidad.innerHTML = cp3;
      arrCompra.push(`${$codigo.value} gomitas $55`);
    }
    if (e.target.matches(p4)) {
      let $cantidad = d.getElementById("cp004");
      cp4++;
      let $codigo = d.querySelector(p4);
      pago_total += 30;
      $cantidad.innerHTML = cp4;
      arrCompra.push(`${$codigo.value} gomitas $30`);
    }
    if (e.target.matches(p5)) {
      let $cantidad = d.getElementById("cp005");
      cp5++;
      let $codigo = d.querySelector(p5);
      pago_total += 250;
      $cantidad.innerHTML = cp5;
      arrCompra.push(`${$codigo.value} chocolates $250`);
    }

    if (e.target.matches(p6)) {
      let $cantidad = d.getElementById("cp006");
      cp6++;
      let $codigo = d.querySelector(p6);
      pago_total += 35;
      $cantidad.innerHTML = cp6;
      arrCompra.push(`${$codigo.value} panditas $35`);
    }

    if (e.target.matches(p7)) {
      let $cantidad = d.getElementById("cp007");
      cp7++;
      let $codigo = d.querySelector(p7);
      pago_total += 50;
      $cantidad.innerHTML = cp7;
      arrCompra.push(`${$codigo.value} bombones $50`);
    }

    if (e.target.matches(p8)) {
      let $cantidad = d.getElementById("cp008");
      cp8++;
      let $codigo = d.querySelector(p8);
      pago_total += 40;
      $cantidad.innerHTML = cp8;
      arrCompra.push(`${$codigo.value} gusanitos $40`);
    }

    if (e.target.matches(p9)) {
      let $cantidad = d.getElementById("cp009");
      cp9++;
      let $codigo = d.querySelector(p9);
      pago_total += 120;
      $cantidad.innerHTML = cp9;
      arrCompra.push(`${$codigo.value} bote paletas $120`);
    }

    if (e.target.matches(p10)) {
      let $cantidad = d.getElementById("cp010");
      cp10++;
      let $codigo = d.querySelector(p10);
      pago_total += 45;
      $cantidad.innerHTML = cp10;
      arrCompra.push(`${$codigo.value} jumbo cereza $45`);
    }

    if (e.target.matches(p11)) {
      let $cantidad = d.getElementById("cp011");
      cp11++;
      let $codigo = d.querySelector(p11);
      pago_total += 40;
      $cantidad.innerHTML = cp11;
      arrCompra.push(`${$codigo.value} amaranto $40`);
    }

    if (e.target.matches(p12)) {
      let $cantidad = d.getElementById("cp012");
      cp12++;
      let $codigo = d.querySelector(p12);
      pago_total += 25;
      $cantidad.innerHTML = cp12;
      arrCompra.push(`${$codigo.value} obleas mini $25`);
    }

    cantidadP(
      cp1,
      cp2,
      cp3,
      cp4,
      cp5,
      cp6,
      cp7,
      cp8,
      cp9,
      cp10,
      cp11,
      cp12,
      arrCantidadP
    );
    $total.innerHTML = `$ ${pago_total}`;
  });
}

export function compra(linkCompra) {
  d.addEventListener("click", (e) => {
    if (e.target.matches(linkCompra)) {
      var doc = new jsPDF();
      doc.setFontSize(22);
      doc.setTextColor(25, 25, 12);
      doc.text(20, 20, "Tienda Niño Jesus");
      doc.text(100, 20, `Total: $ ${pago_total}`);

      doc.setFontSize(14);
      doc.setTextColor(119, 136, 153);
      doc.text(100, 30, "CVE: 110 222 3569821368 4");

      doc.setFontSize(14);
      doc.setTextColor(255, 0, 0);
      doc.text(100, 40, "Cantidad");
      doc.text(100, 50, `${listaCantidad(arrCantidadP)}`);

      doc.setTextColor(0, 0, 0);
      doc.setFontSize(12);
      doc.text(22, 30, "Lista de la compra");
      doc.text(22, 40, "Codigo");
      doc.setFontSize(8);
      doc.text(22, 45, `${listaProductos(arrCompra)}`);

      doc.save("test.pdf");
    }
  });
}

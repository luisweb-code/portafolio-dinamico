const d = document;
let pago_total = 0;
let $total = d.getElementById("totalPago");
let arrCompra = [];

function listaProductos(arrCompra) {
  let lista = "";
  for (let i = 0; i < arrCompra.length; i++) {
    lista += `${arrCompra[i]}\n`;
  }
  return lista;
}

export function cajaCobros(p1, p2) {
  let cp1 = 0, cp2 = 0;
  d.addEventListener("click", (e) => {
    if (e.target.matches(p1)) {
      cp1++;
      let $codigo = d.querySelector(p1);
      pago_total += 25;
      arrCompra.push(`${$codigo.value} xtremes $25`);
    }
    if (e.target.matches(p2)) {
      cp2++;
      let $codigo = d.querySelector(p2);
      pago_total += 85;
      arrCompra.push(`${$codigo.value} bolsa surtido $85`);
    }
    console.log(arrCompra);
    console.log(cp1, cp2);
    $total.innerHTML = `$ ${pago_total}`;
  });
}

export function compra(linkCompra) {
  let $compra = d.querySelector(linkCompra);

  d.addEventListener("click", (e) => {
    if (e.target.matches(linkCompra)) {
      var doc = new jsPDF();
      doc.setFontSize(22);
      doc.text(20, 20, "Tienda Niño Jesus");
      doc.text(100, 20, `Total: $ ${pago_total}`);

      doc.setFontSize(14);
      doc.setTextColor(0, 0, 255);
      doc.text(22, 30, "Lista de la compra");
      doc.text(100, 30, "CVE: 110 222 3569821368 4");

      doc.setTextColor(0, 0, 0);
      doc.setFontSize(11);
      doc.text(22, 40, "Codigo");

      doc.setFontSize(12);
      doc.text(25, 45, `${listaProductos(arrCompra)}`);

      doc.save("test.pdf");
    }
  });
}

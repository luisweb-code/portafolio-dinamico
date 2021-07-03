var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
  type: "bar",
  data: {
    datasets: [
      {
        label: "Stock de productos",
        backgroundColor: [
          "rgba(255, 99, 132, 0.2)",
          "rgba(54, 162, 235, 0.2)",
          "rgba(255, 206, 86, 0.2)",
          "rgba(75, 192, 192, 0.2)",
          "rgba(153, 102, 255, 0.2)",
          "rgba(255, 159, 64, 0.2)",
        ],
        borderColor: ["white"],
        boderWidth: 1,
      },
    ],
  },
  options: {
    scales: {
      y: {
        beginAtZero: true,
      },
    },
  },
});



let url = "../assets/productos.json";
fetch(url)
  .then((res) => (res.ok ? res.json() : Promise.reject(res)))//Rechaza la promesa en fuerza
  .then((json) => {
    console.log(json);
    //Imprimimos los atributos que deseamos publicar en el documento.
    json.forEach((el) => {
      myChart.data['labels'].push(element.descripcion)
    });

  })
  //Captura el error de la promesa
  .catch((err) => {
    console.log(err);
  })

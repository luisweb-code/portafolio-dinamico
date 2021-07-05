var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
  type: "bar",
  data: {
    datasets: [{
        label: '# Stock de produtos',
        backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)'
        ],
        borderColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1
    }]
},
  options: {
    scales: {
      y: {
        beginAtZero: true,
      },
    },
  },
});

let url = "https://jsonplaceholder.typicode.com/users";
fetch(url)
  .then((res) => (res.ok ? res.json() : Promise.reject(res))) //Rechaza la promesa en fuerza
  .then((json) => {
    //console.log(json);
    //myChart.data["labels"].push(json.descripcion)
    json.forEach((el) => {
      //console.log(el.descripcion);
      myChart.data["labels"].push(el.name)
      //myChart.data["datasets"][0].data.push(el.stock)
    });
    //Imprimimos los atributos que deseamos publicar en el documento.
    console.log(myChart.data);
  })
  //Captura el error de la promesa
  .catch((err) => {
    console.log(err);
  });

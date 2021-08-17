const d = document,
  $number = d.getElementsByName("number"),
  $operation = d.getElementsByName("operation"),
  $same = d.getElementsByName("same")[0],
  $reset = d.getElementsByName("rest")[0];
let $result = d.querySelector("#result"),
  operation_actually = "",
  operation_previous = "",
  operation = undefined;

//Recorremos el array de numeros
$number.forEach((boton) => {
  boton.addEventListener("click", () => {
    //alert(boton.innerText);
    addNumber(boton.innerText);
  });
});

//Recorremos el array de operaciones
$operation.forEach((boton) => {
  boton.addEventListener("click", () => {
    //alert(boton.innerText);
    selectOperation(boton.innerText);
  });
});

//Accion del boton same
$same.addEventListener("click", () => {
  calculate();
  updateDisplay();
});

//Accion del boton rest
$reset.addEventListener("click", () => {
  clear();
  updateDisplay();
});

//Selecionar operación
function selectOperation(op) {
  if (operation_actually === "") return;
  if (operation_previous !== "") {
    calculate();
  }
  operation = op.toString();
  operation_previous = operation_actually;
  operation_actually = "";
}

//Calcular
function calculate() {
  let calculo;
  const previus = parseFloat(operation_previous),
    current = parseFloat(operation_actually);
  if (isNaN(previus) || isNaN(current)) {
    return;
  }
  switch (operation) {
    case "+":
      calculo = previus + current;
      break;
    case "-":
      calculo = previus - current;
      break;
    case "X":
      calculo = previus * current;
      break;
    case "/":
      calculo = previus / current;
      break;
    default:
      return;
  }
  operation_actually = calculo;
  operation = undefined;
  operation_previous = "";
}

//Agregar numero
function addNumber(num) {
  operation_actually = operation_actually.toString() + num.toString();
  updateDisplay();
}

//Limpiar pantalla
function clear() {
  operation_actually = "";
  operation_previous = "";
  operation = undefined;
}

//Actualizar pantalla
function updateDisplay() {
  $result.value = operation_actually;
}

//Llamamos a la funcion limpiar pantalla
clear();

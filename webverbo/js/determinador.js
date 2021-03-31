//Conociendo el formulario
var miFormulario = document.getElementById("miFormulario");

window.onload = iniciar; //Sin paréntesis

//Que todo el formulario este en orden, para llamar a la funcion validar() y enviar los datos
function iniciar() {
    document.getElementById("btn-enviar").addEventListener("click", validar, false);
}

//Se valida el primer input presente tense
function validaPresentTense() {
    var idPresentTense = document.getElementById("idPresentTense");
        //alert(idPresentTense.value);
        idPresentTense.value.trim();
        idPresentTense.value.toString();
        idPresentTense.value.toLowerCase();
    if (idPresentTense.value == "") {
        //alert("El campo no puede ser vacío");
        error(idPresentTense);
        return false;
    }
   
    return true;
}

//Se valida el segundo input past tense
function validaPastTense() {
    var idPastTense = document.getElementById("idPastTense");
        //alert(idPastTense.value);
        idPastTense.value.trim();
        idPastTense.value.toString();
        idPastTense.value.toLowerCase();
        
    if (idPastTense.value == "") {
        //alert("El campo no puede ser vacío");
        error(idPastTense);
        return false;
    }
  
    return true;
}

//Se valida el tercer input past partice
function validaPastParticipe() {
    var idPastParticipe = document.getElementById("idPastParticipe");
        //alert(idPastParticipe.value);
        idPastParticipe.value.trim();
        idPastParticipe.value.toString();
        idPastParticipe.value.toLowerCase();

    if (idPastParticipe.value == "") {
        //alert("El campo no puede ser vacío");
        error(idPastParticipe);
        return false;
    }
    
    return true;
}

/* Enfocador de la clase para mostrar los datos */
function error(elemento) {
    elemento.className = "error";
    elemento.focus();
}

//Validacion que sea una cadena
function cadena(elemento) {
    
    if(elemento.toString()){
        alert("Deve ser una cadena");
        return false
    }
    return true;
}

/* Validamos antes de enviar los datos */
function validar(e) {
    if (validaPresentTense() && validaPastTense() && validaPastParticipe()) {
        return true;
    } else {
        e.preventDefault();
        return false;
    }
}


    








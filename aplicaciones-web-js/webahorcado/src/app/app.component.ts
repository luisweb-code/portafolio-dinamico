import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html'
})
export class AppComponent {
  //Definimos la palabra para adivinar
  palabra = "TOMATE";
  palabraOculta = "";
  intentos = 0;
  gano = false;
  perdio = false;

  //Array del abecedario
  letras = ['A','B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 
            'M', 'N', 'Ñ', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];  

  constructor(){
    this.palabraOculta = '_ '.repeat( this.palabra.length);
  }

  comprobar(letra: string) {
    this.existeLetra(letra);
    const palabraOcultarArr = this.palabraOculta.split(' ');
    //Recorremos el largo de la palabra
    for (let i = 0; i < this.palabra.length; i++) {
      
        if (this.palabra[i] === letra) {
          palabraOcultarArr[i] = letra;
        }      
    }

    this.palabraOculta = palabraOcultarArr.join(' ');
    this.verificaGane();

  }

  verificaGane(){
    const palabraArr = this.palabraOculta.split(' ');
    const palabraEvaluar = palabraArr.join('');

    if (palabraEvaluar === this.palabra) {
      this.gano = true;
    }

    if (this.intentos >= 9) {
      this.perdio = true;
    }

  }

  existeLetra(letra: string){
      if (this.palabra.indexOf(letra) >= 0) {
      /*console.log("Letra existe" + letra); */
      }else{
      /*console.log("Letra No existe" + letra); */
        this. intentos++;
      }
  }
}

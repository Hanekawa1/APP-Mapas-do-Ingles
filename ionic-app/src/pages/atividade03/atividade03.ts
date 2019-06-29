import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams } from 'ionic-angular';
import { Atividade04Page } from '../atividade04/atividade04';
import { UsuariosServiceProvider } from '../../providers/usuarios-service/usuarios-service';
import { Atividade01ServiceProvider } from '../../providers/atividade01-service/atividade01-service';
import { Atividade03 } from '../../modelos/atividade03';

@IonicPage()
@Component({
  selector: 'page-atividade03',
  templateUrl: 'atividade03.html',
})
export class Atividade03Page {

  check: Boolean = false;
  private respostas : string[];
  i: number;
  
  private resposta01: string;
  private resposta02: string;
  private resposta03: string;
  private resposta04: string;

  constructor(public navCtrl: NavController, public navParams: NavParams, private _usuariosService: UsuariosServiceProvider,
    private _atividade03: Atividade01ServiceProvider) {
      this._atividade03.pegaAtividade03().subscribe(
        (atividade03: Atividade03) => {
          console.log(atividade03);
          this.pegaRespostas();
          return atividade03;
        },
        () => {
          console.log("Erro");
        }
      );
  }


  proxAtividade04(){
    this.navCtrl.push(Atividade04Page.name);
  }
  get usuarioLogado(){
    return this._usuariosService.obtemUsuarioLogado();
  }
  get atividade03(){
    return this._atividade03.puxaAtividade03();
  }
  checked(){
    return this.check = true;
  }

  pegaRespostas(){
    for (this.i = 0; this.i < 1; this.i++){
      this.resposta01 = this.atividade03[this.i].respostaErrada01Atividade03;
      this.resposta02 = this.atividade03[this.i].respostaErrada02Atividade03;
      this.resposta03 = this.atividade03[this.i].respostaErrada03Atividade03;
      this.resposta04 = this.atividade03[this.i].respostaCorretaAtividade03;
    }
    this.respostas = [this.resposta01, this.resposta02, this.resposta03, this.resposta04];
    this.respostas = this.shuffle(this.respostas);
    return this.respostas;
  }
  //O array ta sendo retornado, tentar dar shuffle nele e retornar por item;
  //shuffle(respostas);

  shuffle(array) {
    var currentIndex = array.length, temporaryValue, randomIndex;
  
    // While there remain elements to shuffle...
    while (0 !== currentIndex) {
  
      // Pick a remaining element...
      randomIndex = Math.floor(Math.random() * currentIndex);
      currentIndex -= 1;
  
      // And swap it with the current element.
      temporaryValue = array[currentIndex];
      array[currentIndex] = array[randomIndex];
      array[randomIndex] = temporaryValue;
    }
    console.log(array);
    return array;
  }
}

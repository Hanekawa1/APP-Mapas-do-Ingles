import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams } from 'ionic-angular';
import { Atividade03Page } from '../atividade03/atividade03';
import { UsuariosServiceProvider } from '../../providers/usuarios-service/usuarios-service';
import { Atividade01ServiceProvider } from '../../providers/atividade01-service/atividade01-service';
import { Atividade02 } from '../../modelos/atividade02';

@IonicPage()
@Component({
  selector: 'page-atividade02',
  templateUrl: 'atividade02.html',
})
export class Atividade02Page {

  check : Boolean = false;
  respostas : string[];
  i: number;
  
  resposta01: string;
  resposta02: string;
  resposta03: string;
  resposta04: string;
  

  constructor(public navCtrl: NavController, public navParams: NavParams, private _usuariosService: UsuariosServiceProvider, 
    private _atividade02: Atividade01ServiceProvider) {
      this._atividade02.pegaAtividade02().subscribe(
        (atividade02: Atividade02) => {
          console.log(atividade02);
          this.pegaRespostas();
          console.log(this.respostas);
          return atividade02;
        },
        () => {
          console.log("Erro");
        }
      );

  }

  proxAtividade03(){
    this.navCtrl.push(Atividade03Page.name);
  }
  get usuarioLogado(){
    return this._usuariosService.obtemUsuarioLogado();
  }
  get atividade02(){
    return this._atividade02.puxaAtividade02();
  }
   checked(){
    return this.check = true;
  }
  
  pegaRespostas(){
    for (this.i = 0; this.i < 1; this.i++){
      this.resposta01 = this.atividade02[this.i].respostaErrada01Atividade02;
      this.resposta02 = this.atividade02[this.i].respostaErrada02Atividade02;
      this.resposta03 = this.atividade02[this.i].respostaErrada03Atividade02;
      this.resposta04 = this.atividade02[this.i].respostaCorretaAtividade02;
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
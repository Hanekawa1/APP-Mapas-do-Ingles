import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams } from 'ionic-angular';
import { UsuariosServiceProvider } from '../../providers/usuarios-service/usuarios-service';
import { Atividade01Page } from '../atividade01/atividade01';

@IonicPage()
@Component({
  selector: 'page-dias',
  templateUrl: 'dias.html',
})
export class DiasPage {


  constructor(public navCtrl: NavController, public navParams: NavParams, private _usuariosService: UsuariosServiceProvider) {

  }
  get usuarioLogado(){
    return this._usuariosService.obtemUsuarioLogado();
  }
  selecionaAtividade(){
    this.navCtrl.push(Atividade01Page.name);
  }
}

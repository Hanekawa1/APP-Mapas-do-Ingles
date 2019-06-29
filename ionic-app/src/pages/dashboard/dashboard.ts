import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams } from 'ionic-angular';
import { Atividade01Page } from '../atividade01/atividade01';
import { UsuariosServiceProvider } from '../../providers/usuarios-service/usuarios-service';
import { Usuario } from '../../modelos/usuario';

@IonicPage()
@Component({
  selector: 'page-dashboard',
  templateUrl: 'dashboard.html',
})
export class DashboardPage {
  public usuarioT: Usuario;

  constructor(public navCtrl: NavController, public navParams: NavParams, private _usuariosService: UsuariosServiceProvider) {
    this.usuarioT = this._usuariosService.obtemUsuarioLogado();
    this.usuarioLogado
  }
  selecionaAtividade(){
    this.navCtrl.push(Atividade01Page.name);
  }
  usuarioLogado(){
    return this.usuarioT;
}

}
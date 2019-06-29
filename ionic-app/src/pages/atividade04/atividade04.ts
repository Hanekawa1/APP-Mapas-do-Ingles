import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams } from 'ionic-angular';
import { Atividade05Page } from '../atividade05/atividade05';
import { UsuariosServiceProvider } from '../../providers/usuarios-service/usuarios-service';
import { Atividade01ServiceProvider } from '../../providers/atividade01-service/atividade01-service';
import { Atividade04 } from '../../modelos/atividade04';


@IonicPage()
@Component({
  selector: 'page-atividade04',
  templateUrl: 'atividade04.html',
})
export class Atividade04Page {

  check: boolean = false;

  constructor(public navCtrl: NavController, public navParams: NavParams, private _usuariosService: UsuariosServiceProvider,
    private _atividade04: Atividade01ServiceProvider) {
      this._atividade04.pegaAtividade04().subscribe(
        (atividade04: Atividade04) => {
          console.log(atividade04);
          return atividade04;
        },
        () => {
          console.log("Erro");
        }
      );
     
  }
  proxAtividade05(){
    this.navCtrl.push(Atividade05Page.name);
  }
  get usuarioLogado(){
    return this._usuariosService.obtemUsuarioLogado();
  }
  get atividade04(){
    return this._atividade04.puxaAtividade04();
  }
  checked(){
    return this.check = true;
  }
}

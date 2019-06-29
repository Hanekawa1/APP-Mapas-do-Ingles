import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams, AlertController } from 'ionic-angular';
import { Atividade02Page } from '../atividade02/atividade02';

import { Atividade01 } from '../../modelos/atividade01';

import { Usuario } from '../../modelos/usuario';
import { UsuariosServiceProvider } from '../../providers/usuarios-service/usuarios-service';
import { Atividade01ServiceProvider } from '../../providers/atividade01-service/atividade01-service';
import { HomePage } from '../home/home';

@IonicPage()
@Component({
  selector: 'page-atividade01',
  templateUrl: 'atividade01.html',
})
export class Atividade01Page {

  public usuarioTeste: Usuario;
  public emailt: string;
  public textoa01: string;
  public i: number;
  public t1: Atividade01;

  constructor(public navCtrl: NavController, public navParams: NavParams, 
    private _usuariosService : UsuariosServiceProvider,
    private _atividade01 : Atividade01ServiceProvider,
    private _alertCtrl : AlertController) {

    this._usuariosService.obtemUsuarioLogado();
    this._atividade01.puxaAtividade01();
    
      this._atividade01.pegaAtividade01().subscribe(
        (atividade01: Atividade01) => {
          console.log(atividade01);
          this.t1 = atividade01;
          console.log(this.t1);
          return this.t1;
        },
        () => {
          //Criar um alerta aqui pra caso não exista a atividade e evitar que o usuário atualize suas informações
          console.log('erro');
          this._alertCtrl.create({
            title: 'Alerta!',
            subTitle: 'Atividade não cadastrada ainda ou não disponível. Tente mais tarde.',
            buttons: [{text : 'Ok', handler: () => {
              this.navCtrl.setRoot(HomePage);
            }}]
          }).present();
        }
      );
     
      /*
      for(this.i = 0; this.i <1 ; this.i ++){
        this.textoa01 = this.t[this.i].textoAtividade01;
      }
      */
  
  }
  proxAtividade02(){
    this.navCtrl.push(Atividade02Page.name);
  }
  get usuarioLogado(){
    return this._usuariosService.obtemUsuarioLogado();
  }
  get atividade01(){
    return this._atividade01.puxaAtividade01();
  }

}

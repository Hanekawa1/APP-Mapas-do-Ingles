import { Component } from '@angular/core';
import { NavController, NavParams, Platform, AlertController} from 'ionic-angular';
import { UsuariosServiceProvider } from '../../providers/usuarios-service/usuarios-service';
//import { Atividade01Page } from '../atividade01/atividade01';
import { Usuario } from '../../modelos/usuario';
import { DiasPage } from '../dias/dias';
import { Atividade01ServiceProvider } from '../../providers/atividade01-service/atividade01-service';
import { LocalNotifications } from '@ionic-native/local-notifications';
import { LoginPage } from '../login/login';

@Component({
  selector: 'page-home',
  templateUrl: 'home.html'
})
export class HomePage {

  public usuarioT: Usuario;
  public emailT: string;
  public dataAtual: string;
  public dataUsuario: string;

  private i: number;

  constructor(public navCtrl: NavController, public navParams: NavParams, private _usuariosService: UsuariosServiceProvider, 
    private _atividadeService: Atividade01ServiceProvider, private _localNotifications: LocalNotifications, private plt: Platform,
    private _alertCtrl: AlertController) {
    this.plt.ready().then((rdy) => { 
      this._localNotifications.on('click')});

    this.usuarioT = this._usuariosService.obtemUsuarioLogado();
    this.emailT = this.usuarioT.email;
    this.verificaDataExp();
  }

  selecionaDia(){    
    this._usuariosService.obtemUsuarioLogado();
    this._atividadeService.pegaDadosUsuario();
    this._atividadeService.atualizaAtividades();

    this.navCtrl.push(DiasPage.name);

  }

  get usuarioLogado(){
    return this._usuariosService.obtemUsuarioLogado();
  }
  get emailUsuario(){
    return this._usuariosService.obtemEmailUsuario();
  }

  //Notificação: Necessita ser habilitada pelo usuário sempre que finalizar uma atividade;
  agendarNotificacao(){
      this._localNotifications.schedule({
        id: 1,
        title: 'Nova Atividade',
        text: 'Você tem uma nova atividade!',
        trigger: {at: new Date(new Date().getTime() + 72000 * 1000)},
        vibrate: true,
        sound: 'res://platform_default',
        data: { myData : 'Uma atividade nova foi cadastrada e está disponível para resolução.'}
      });
  }

  verificaDataExp(){
    
    console.log(this.dataAtual);

    for(this.i = 0; this.i < 1; this.i ++){
      this.dataUsuario = this.usuarioLogado[this.i].expiracaoConta;
    }
    this.dataAtual = this.formatDate();
    console.log(this.dataUsuario);
    console.log(this.dataAtual);
    if(this.dataAtual > this.dataUsuario){
      this._alertCtrl.create({
        title: 'Conta Expirada',
        subTitle: 'Essa conta está expirada. Favor entrar em contato com a administração para mais detalhes.',
        buttons: [{text: 'Sair'}]
      }).present();
      this.navCtrl.setRoot(LoginPage.name);
    }
  }
  formatDate() {
    var d = new Date(),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();

    if (month.length < 2) month = '0' + month;
    if (day.length < 2) day = '0' + day;

    return [year, month, day].join('-');
}
}

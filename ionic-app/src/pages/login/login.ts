import { Component } from '@angular/core';
import { NavController, AlertController, IonicPage, LoadingController} from 'ionic-angular';
import { NavLifecycles } from '../../utils/ionic/nav/nav-lifecycles';
import { Usuario } from '../../modelos/usuario';
import { UsuariosServiceProvider } from '../../providers/usuarios-service/usuarios-service';
import { HomePage } from '../home/home';

@IonicPage()
@Component({
  selector: 'page-login',
  templateUrl: 'login.html',
})
export class LoginPage implements NavLifecycles{
  email: string ;
  senha: string ;
  public usuario: Usuario;

  constructor(public navCtrl: NavController,
    private _alertCtrl: AlertController,
    private _usuarioService: UsuariosServiceProvider,
     private _loadingCtrl: LoadingController
    ) {

  }
  ionViewDidLoad(){
    this._alertCtrl.create({
      title: 'Bem-vindo aluno!',
      subTitle: 'Seja bem vindo ao aplicativo Mapas do Inglês! Bons estudos!',
      buttons: [
        { text: 'Logar'}
      ]
    }).present();
  }
  efetuaLogin(){
    this._usuarioService
      .Login(this.email, this.senha)
      .subscribe(
        (usuario: Usuario) => {
          console.log(usuario);
          //let loading = this._loadingCtrl.create({content: 'Logando, por favor aguarde...'}).present();
          this.presentLoadingText();
          //this.navCtrl.setRoot(HomePage);
          //this._loadingCtrl.dismiss();
        },
        () => {
          this._alertCtrl.create({
            title: 'Falha no Login',
            subTitle: 'Email ou senha incorretos. Favor verificar.',
            buttons: [{text: 'Ok'}]
          }).present();
        }
      )

    
  }
  presentLoadingText() {
    let loading = this._loadingCtrl.create({
      spinner: 'circles',
      content: 'Logando, aguarde...'
    });
  
    loading.present();
  
    setTimeout(() => {
      this.navCtrl.setRoot(HomePage);
    }, 1000);
  
    setTimeout(() => {
      loading.dismiss();
    }, 3000);
  }

}

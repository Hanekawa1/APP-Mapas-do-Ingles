import { Component, ViewChild } from '@angular/core';
import { Platform, Nav, AlertController } from 'ionic-angular';
import { StatusBar } from '@ionic-native/status-bar';
import { SplashScreen } from '@ionic-native/splash-screen';
import { UsuariosServiceProvider } from '../providers/usuarios-service/usuarios-service';
import { LoginPage } from '../pages/login/login';
@Component({
  templateUrl: 'app.html'
})
export class MyApp {
  rootPage:any = LoginPage.name;

  @ViewChild(Nav) public nav: Nav;
  

  //Aqui fica as páginas navegaveis, ou basicamente as opções do menu
  public paginas = [
    { titulo: 'Ir para o Anki', componente: "Anki" ,icone: 'md-at'}, 
    { titulo: 'Sobre' , componente: "Sobre", icone: 'md-information-circle'},
    { titulo: 'Logout' , componente: LoginPage.name, icone: 'md-person'}
  ];


  constructor(platform: Platform, statusBar: StatusBar, splashScreen: SplashScreen, private _alert: AlertController,
              private _usuariosService: UsuariosServiceProvider){
    platform.ready().then(() => {
      // Okay, so the platform is ready and our plugins are available.
      // Here you can do any higher level native things you might need.
      statusBar.styleDefault();
      splashScreen.hide();

      //Configuração One Signal - Desnecessário
    /*
      this._oneSignal.startInit('ca84a136-fb85-4c3e-8ecc-e373288bc540','709488939459');
      this._oneSignal.inFocusDisplaying(this._oneSignal.OSInFocusDisplayOption.Notification);
      this._oneSignal.handleNotificationReceived().subscribe(
        (notificacao: OSNotification) => {
          
      });
      this._oneSignal.endInit();*/

    });
    
  }
  irParaPagina(componente){
    if(componente == LoginPage.name){
      this._alert.create({
        title: 'Logout',
        subTitle: 'Tem certeza que deseja realizar Logout?',
        buttons: [
          {text: 'Sim', handler: () => {this.nav.setRoot(componente);} },
          {text: 'Não'}
        ]
      }).present();
    }
    if(componente == "Anki"){
      this._alert.create({
        title: 'Redirecionamento',
        subTitle: 'Essa ação te redirecionará à página principal do site do Anki. Tem certeza de que quer fazer isso?',
        buttons: [
          {text: 'Sim', handler: () => { window.open("https://apps.ankiweb.net/",'_system', 'location=yes'); } },
          {text: 'Não'}
        ] 
      }).present();
    }
    if(componente == "Sobre"){
      this._alert.create({
        title: 'Sobre os Desenvolvedores',
        subTitle: 'Aplicação desenvolvida com Ionic 3, AngularJS e TypeScript por alunos do UNIPAM, 4º Período de Sistemas de Informação.',
        buttons: [
          {text: 'Ok'} 
        ] 
      }).present();
    }
    
  }
  get usuarioLogado(){
    return this._usuariosService.obtemUsuarioLogado();
  }

}


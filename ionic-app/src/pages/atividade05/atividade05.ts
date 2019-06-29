import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams, AlertController} from 'ionic-angular';
import { UsuariosServiceProvider } from '../../providers/usuarios-service/usuarios-service';
import { HomePage } from '../home/home';
import { Atividade01ServiceProvider } from '../../providers/atividade01-service/atividade01-service';
import { Atividade05 } from '../../modelos/atividade05';
import { MediaCapture } from '@ionic-native/media-capture';
import { Storage } from '@ionic/storage';
import { Media, MediaObject } from '@ionic-native/media';

const MEDIA_FILES_KEY = 'mediaFiles';

@IonicPage()
@Component({
  selector: 'page-atividade05',
  templateUrl: 'atividade05.html',
})
export class Atividade05Page {

  mediaFiles = [];

  constructor(public navCtrl: NavController, public navParams: NavParams, private _alertCtrl: AlertController,
    private _usuariosService: UsuariosServiceProvider,
    private _atividade05: Atividade01ServiceProvider,
    private _mediaCapture: MediaCapture, private _storage: Storage, private _media: Media) {
                
      this._atividade05.pegaAtividade05().subscribe(
        (atividade05: Atividade05) => {
          console.log(atividade05);
          return atividade05;
        },
          () => {
            console.log("Erro");
          }
        );
  }

  ionViewDidLoad(){
    this._storage.get(MEDIA_FILES_KEY).then(res => {
      this.mediaFiles = JSON.parse(res) || [];
    })
  }

  finalizaAtividades(){
    this._atividade05.atualizaUsuario();
    this._atividade05.pegaDadosUsuario();
    this._atividade05.atualizaAtividades();
     this._alertCtrl.create({
      subTitle: 'Volte amanhã para realizar mais atividades',
      buttons:[
        {text: 'Ok', handler: () => {
          this.navCtrl.setRoot(HomePage);
        }}
      ] 
    }).present();
  }
  get usuarioLogado(){
    return this._usuariosService.obtemUsuarioLogado();
  }
  get atividade05(){
    return this._atividade05.puxaAtividade05();
  }

  //Funcionamento do microfone
  capturaAudio(){
    this._mediaCapture.captureAudio().then(res => {
      this.storeMediaFiles(res);
    })
  }
  play(myFile){
    if(myFile.name.indexOf('.wav')){
      const audioFile: MediaObject = this._media.create(myFile.localURL);
      audioFile.play();
    } else {
      return;
    }
  }
  storeMediaFiles(files){
    this._storage.get(MEDIA_FILES_KEY).then(res => {
      if (res){
        let arr = JSON.parse(res);
        arr = arr.concat(files);
        this._storage.set(MEDIA_FILES_KEY, JSON.stringify(arr))
      } else {
        this._storage.set(MEDIA_FILES_KEY, JSON.stringify(files));
      }
      this.mediaFiles = this.mediaFiles.concat(files);
    })
  }
}

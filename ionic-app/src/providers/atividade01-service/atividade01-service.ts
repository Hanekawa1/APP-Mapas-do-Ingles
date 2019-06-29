import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Atividade01 } from '../../modelos/atividade01';
import { UsuariosServiceProvider } from '../usuarios-service/usuarios-service';
import { Usuario } from '../../modelos/usuario';
import 'rxjs/add/operator/do';
import { Atividade02 } from '../../modelos/atividade02';
import { Atividade03 } from '../../modelos/atividade03';
import { Atividade04 } from '../../modelos/atividade04';
import { Atividade05 } from '../../modelos/atividade05';

@Injectable()
export class Atividade01ServiceProvider {

  private _atividade01catch: Atividade01;
  private _atividade02catch: Atividade02;
  private _atividade03catch: Atividade03;
  private _atividade04catch: Atividade04;
  private _atividade05catch: Atividade05;

  //Atributos do Usuário para atualização
  public modulo: number;
  public dia: number;
  public email: string;
  public senha: number;
  public cpf: number;
  public expiracaoConta: string;
  public idUsuario: number;
  public diaM: number;

  public usuarioS: string;
  public usuarioO: Usuario;
  public i: number;

  constructor(private _http: HttpClient, private _usuariosService: UsuariosServiceProvider) {
    this.pegaDadosUsuario();

    //this.usuarioS = JSON.stringify(this._usuariosService.obtemUsuarioLogado());
    //this.usuarioO = JSON.parse(this.usuarioS);
    //console.log(this.usuarioO);
    //console.log(this.usuarioO);
    //this.modulo = this._usuariosService.obtemModulo();
    
  }
  get usuarioLogado(){
    return this._usuariosService.obtemUsuarioLogado();
  }

  pegaAtividade01(){
    return this._http.get<Atividade01>('https://projetopisi.000webhostapp.com/api/public/atividade01/' + this.modulo + '/' + this.dia)
              .do((atividade01: Atividade01) =>  this._atividade01catch = atividade01);
  }

  pegaAtividade02(){
    return this._http.get<Atividade02>('https://projetopisi.000webhostapp.com/api/public/atividade02/' + this.modulo + '/' + this.dia)
              .do((atividade02: Atividade02) =>  this._atividade02catch = atividade02);
  }
  pegaAtividade03(){
    return this._http.get<Atividade03>('https://projetopisi.000webhostapp.com/api/public/atividade03/' + this.modulo + '/' + this.dia)
              .do((atividade03: Atividade03) =>  this._atividade03catch = atividade03);
  }
  pegaAtividade04(){
    return this._http.get<Atividade04>('https://projetopisi.000webhostapp.com/api/public/atividade04/' + this.modulo + '/' + this.dia)
              .do((atividade04: Atividade04) =>  this._atividade04catch = atividade04);
  }
  pegaAtividade05(){
    return this._http.get<Atividade05>('https://projetopisi.000webhostapp.com/api/public/atividade05/' + this.modulo + '/' + this.dia)
              .do((atividade05: Atividade05) =>  this._atividade05catch = atividade05);
  }

  puxaAtividade01(){
    return this._atividade01catch;
  }
  puxaAtividade02(){
    return this._atividade02catch;
  }
  puxaAtividade03(){
    return this._atividade03catch;
  }
  puxaAtividade04(){
    return this._atividade04catch;
  }
  puxaAtividade05(){
    return this._atividade05catch;
  }
  
  atualizaUsuario(){
    /*
    var header = {headers: {'Content-Type': 'application/json'}};
    this._http.put('http://testeapi/api/cadastros/update/' + this.idUsuario,
    {
      'email': this.email,
      'senha': this.senha,
      'cpf': this.cpf,
      'moduloInicial': this.modulo,
      'expiracaoConta': this.expiracaoConta,
      'statusDia': this.diaM
      
    }, header);
    */
    
    this.diaM = this.dia;
    this.diaM++;
    this.dia++;
    if(this.diaM == 8){
      this.diaM = 1;
      this.modulo++;
    }
    return this._http.get('https://projetopisi.000webhostapp.com/api/public/cadastros/update/' + this.modulo
    + "/" + this.diaM
    + "/" + this.idUsuario
    + "/" + this.email
    + "/" + this.senha
    + "/" + this.cpf
    + "/" + this.expiracaoConta
    ).subscribe(
      () => {this._usuariosService.obtemUsuarioLogado();},
      () => {return;}
    );
    
    
  }
  pegaDadosUsuario(){
    for(this.i = 0; this.i <1; this.i++){
      this.idUsuario = this.usuarioLogado[this.i].idUsuario;
      this.modulo = this.usuarioLogado[this.i].moduloInicial;
      this.dia = this.usuarioLogado[this.i].statusDia;
      this.email = this.usuarioLogado[this.i].email;
      this.senha = this.usuarioLogado[this.i].senha;
      this.cpf = this.usuarioLogado[this.i].cpf;
      this.expiracaoConta = this.usuarioLogado[this.i].expiracaoConta;
    }
  }
  atualizaAtividades(){
    this.puxaAtividade01();
    this.puxaAtividade02();
    this.puxaAtividade03();
    this.puxaAtividade04();
    this.puxaAtividade05();
  }
}

import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Usuario } from '../../modelos/usuario';
import 'rxjs/add/operator/map';
import 'rxjs/add/operator/do';


@Injectable()
export class UsuariosServiceProvider {

  private _usuarioLogado: Usuario;
  public usuario;

  constructor(private _http: HttpClient) {

  }

  Login(email, senha){
    return this._http.get<Usuario>('https://projetopisi.000webhostapp.com/api/public/cadastros/' + email + '/' + senha)
                  .do((usuario: Usuario)  => this._usuarioLogado = usuario);            
  }
  
  obtemUsuarioLogado(){
    return this._usuarioLogado;
  }
  obtemEmailUsuario(){
    return this._usuarioLogado.email;
  }
  obtemModulo(){
    return this._usuarioLogado.moduloInicial;
  }

}

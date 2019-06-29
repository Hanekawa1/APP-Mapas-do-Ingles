import { NgModule } from '@angular/core';
import { IonicPageModule } from 'ionic-angular';
import { Atividade02Page } from './atividade02';

@NgModule({
  declarations: [
    Atividade02Page,
  ],
  imports: [
    IonicPageModule.forChild(Atividade02Page),
  ],
  exports: [
    Atividade02Page
  ]
})
export class Atividade02PageModule {}

import { NgModule } from '@angular/core';
import { IonicPageModule } from 'ionic-angular';
import { Atividade01Page } from './atividade01';

@NgModule({
  declarations: [
    Atividade01Page,
  ],
  imports: [
    IonicPageModule.forChild(Atividade01Page),
  ],
  exports: [
    Atividade01Page
  ]
})
export class Atividade01PageModule {}

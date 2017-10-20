import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import {routingChild} from "../conteudo/conteudo-routing";
import {MuralComponent} from "../conteudo/mural/mural.component";
import {EventosComponent} from "../conteudo/eventos/eventos.component";

@NgModule({
  imports: [
    CommonModule,
      routingChild
  ],
  declarations: [
      EventosComponent,
      MuralComponent
  ]
})
export class ConteudosModulloModule { }

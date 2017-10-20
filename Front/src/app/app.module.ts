import {BrowserModule} from '@angular/platform-browser';
import {NgModule} from '@angular/core';

import {AppComponent} from './app.component';
import {MenuadminComponent} from './menuadmin/menuadmin.component';
import {MenunormalComponent} from './menunormal/menunormal.component';
import {UsuarioComponent} from './usuario/usuario.component';
import {PedidoComponent} from './pedido/pedido.component';
import {PaginaInicialComponent} from './pagina-inicial/pagina-inicial.component';
import {FormsModule} from "@angular/forms";
import {HttpModule} from "@angular/http";
import {routing} from "./app.routing";
import { ConteudoComponent } from './conteudo/conteudo.component';
import { EventosComponent } from './conteudo/eventos/eventos.component';
import { MuralComponent } from './conteudo/mural/mural.component';
import {routingChild} from "./conteudo/conteudo-routing";
import {ConteudosModulloModule} from "./conteudos-modullo/conteudos-modullo.module";


@NgModule({
    declarations: [
        AppComponent,
        MenuadminComponent,
        MenunormalComponent,
        UsuarioComponent,
        PedidoComponent,
        PaginaInicialComponent,
        ConteudoComponent,

    ],
    imports: [
        BrowserModule,
        FormsModule,
        HttpModule,
        routing,
        ConteudosModulloModule

    ],
    providers: [],
    bootstrap: [AppComponent]
})
export class AppModule {
}

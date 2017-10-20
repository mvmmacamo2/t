
import {RouterModule, Routes} from "@angular/router";
import {ConteudoComponent} from "./conteudo.component";
import {EventosComponent} from "./eventos/eventos.component";
import {MuralComponent} from "./mural/mural.component";
import {ModuleWithProviders} from "@angular/core";

const Rotas:Routes = [
    {path: '' , component: ConteudoComponent,
        children : [
            {path: 'eventos', component:EventosComponent},
            {path: 'admin', component:MuralComponent}
        ],
    },

];


export const routingChild: ModuleWithProviders = RouterModule.forChild(Rotas);
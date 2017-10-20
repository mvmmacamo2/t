import {RouterModule, Routes} from "@angular/router";
import {PaginaInicialComponent} from "./pagina-inicial/pagina-inicial.component";
import {MenuadminComponent} from "./menuadmin/menuadmin.component";
import {ModuleWithProviders} from "@angular/core";

const Rotas:Routes = [
    {path: '' , component: PaginaInicialComponent},
    {path: 'admin', component: MenuadminComponent}
];


export const routing: ModuleWithProviders = RouterModule.forRoot(Rotas);
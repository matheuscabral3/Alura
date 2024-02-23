import { ClientesComponent } from './componentes/clientes/clientes.component';
import { NaoEncontradoComponent } from './componentes/nao-encontrado/nao-encontrado.component';
import { HomeComponent } from './componentes/home/home.component';
import { NgModule, Component } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';

import { CadastrarClienteComponent } from './componentes/cadastrar-cliente/cadastrar-cliente.component';

const routes: Routes = [
  {
    path: '',
    component: HomeComponent,
    // pathMatch: 'full',
  },
  {
    path: 'clientes',
    component: ClientesComponent,
  },
  {
    path: 'cadastrar-cliente',
    component: CadastrarClienteComponent,
  },
  {
    path: '**',
    component: NaoEncontradoComponent,
  },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule],
})
export class AppRoutingModule {}

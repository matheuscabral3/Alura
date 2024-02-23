import { RouterModule } from '@angular/router';
import { FormsModule } from '@angular/forms'
import { NgModule } from '@angular/core';
import { HttpClientModule } from '@angular/common/http';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HeaderComponent } from './componentes/header/header.component';
import { ClientesComponent } from './componentes/clientes/clientes.component';
import { FooterComponent } from './componentes/footer/footer.component';
import { CadastrarClienteComponent } from './componentes/cadastrar-cliente/cadastrar-cliente.component';
import { NavegacaoComponent } from './componentes/navegacao/navegacao.component';
import { HomeComponent } from './componentes/home/home.component';
import { NaoEncontradoComponent } from './componentes/nao-encontrado/nao-encontrado.component';

@NgModule({
  declarations: [
    AppComponent,
    ClientesComponent,
    CadastrarClienteComponent,
    HeaderComponent,
    NavegacaoComponent,
    HomeComponent,
    FooterComponent,
    NaoEncontradoComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule,
    RouterModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }

//      COMPONENTES
import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { RouterModule } from '@angular/router';
import { FormsModule } from '@angular/forms';     // <- Habilita as manipulações no HTML (Ex: *ngFor)

//      MÓDULOS
import { appRoutes } from './rotas/app.routes'; // Deve vir primeiro
import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { MenuComponent } from './menu/menu.component';    

//      USANDO AS ROTAS
import { LogoComponent } from './logo/logo.component';
import { ListaComponent } from './lista/lista.component';
import { CadastroComponent } from './cadastro/cadastro.component';
import { notFoundComponent } from './erro/notFound.component';
import { MasterDetailComponent } from './masterdetail/masterdetail.component';

//      SERVICES  
import { CursoService } from './services/curso.service';

@NgModule({
  declarations: [
    AppComponent,
    MenuComponent,
    LogoComponent,
    ListaComponent,
    CadastroComponent,
    notFoundComponent,
    MasterDetailComponent
  ],
  imports: [
    BrowserModule,
    RouterModule.forRoot(appRoutes),
    FormsModule
    ],
  providers: [CursoService],
  bootstrap: [AppComponent]
})
export class AppModule { }

import { Routes } from '@angular/router';

// Importar Componentes Externos.
import { LogoComponent } from '../logo/logo.component';
import { ListaComponent } from '../lista/lista.component';
import { CadastroComponent } from '../cadastro/cadastro.component';
import { notFoundComponent } from '../erro/notFound.component';
import { MasterDetailComponent } from '../masterdetail/masterdetail.component';

// Direcionar cada Component utilizando uma constante para isso.
// 1º Pg Inicial.   /   2º demais rotas /   3º (**) indica qualquer outra rota, que nao seja nenhuma mencionada.
export const appRoutes : Routes = [
    { path:"", component : LogoComponent },
    { path:"cadastro", component : CadastroComponent },
    { path:"lista", component : ListaComponent },
    { path:"masterdetail", component : MasterDetailComponent },
    { path:"**", component : notFoundComponent }
];


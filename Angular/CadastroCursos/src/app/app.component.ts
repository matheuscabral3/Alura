import { Component } from '@angular/core';

// Importar o COMPONENTE menu que foi criado anteriormente.
import { MenuComponent } from './menu/menu.component';

//  SELETOR(TAG do html) & COMPONENTE(template) criado.
@Component({
  selector: 'app-root',
  template: '<menu></menu>'
})

export class AppComponent {
  title = 'Meu Primeiro Projeto em Angular 4';
}

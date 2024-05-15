import { Router, RouterModule } from '@angular/router';
import { PensamentoService } from './../pensamento.service';
import { Component } from '@angular/core';
import { Pensamento } from '../pensamento';

@Component({
  selector: 'app-criar-pensamento',
  templateUrl: './criar-pensamento.component.html',
  styleUrls: ['./criar-pensamento.component.css'],
})
export class CriarPensamentoComponent {
  pensamento: Pensamento = {
    conteudo: '',
    autoria: '',
    modelo: 'modelo1',
  };

  constructor(private service: PensamentoService, private Router: Router) {}

  criarPensamento() {
    // alert("Pensamento Criado!")

    // FOI CRIADO O PENSAMENTO NO BANCO > DB.JSON
    this.service.criar(this.pensamento).subscribe(() => {
      this.Router.navigate(['/listarPensamento']);
    });
  }

  cancelar() {
    // alert('Cancelar');
    this.Router.navigate(['/listarPensamento']);
  }
}

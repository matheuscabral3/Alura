import { ActivatedRoute, Router } from '@angular/router';
import { PensamentoService } from './../pensamento.service';
import { Component } from '@angular/core';
import { Pensamento } from '../pensamento';

@Component({
  selector: 'app-excluir-pensamento',
  templateUrl: './excluir-pensamento.component.html',
  styleUrls: ['./excluir-pensamento.component.css'],
})

export class ExcluirPensamentoComponent {
  pensamento: Pensamento = {
    id: 0,
    conteudo: '',
    autoria: '',
    modelo: '',
  };

  // ActivatedRoute - Disponibiliza informações sobre os parâmetros e Rotas ...
  // que virão do Componente Pensamento
  constructor(
    private service: PensamentoService,
    private router: Router,
    private route: ActivatedRoute
  ) {}

  // snapshot - captura a rota no momento em que foi efetuado alguma coisa
  // Observable - transferência de dados assíncrona
  ngOnInit(): void {
    const id = this.route.snapshot.paramMap.get('id'); // Obter o ID para conseguir Excluir
    this.service.buscarPorId(parseInt(id!)).subscribe((pensamento) => {
      this.pensamento = pensamento;
    });
  }

  excluirPensamento() {
    if (this.pensamento.id) {
      this.service.excluir(this.pensamento.id).subscribe(() => {
        this.router.navigate(['/listarPensamento']);
      });
    }
  }

  cancelarPensamento() {
    this.router.navigate(['/listarPensamento']);
  }
}

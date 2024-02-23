import { PensamentoService } from './../pensamento.service';
import { Component, OnInit } from '@angular/core';
import { Pensamento } from '../pensamento';

@Component({
  selector: 'app-listar-pensamento',
  templateUrl: './listar-pensamento.component.html',
  styleUrls: ['./listar-pensamento.component.css'],
})
export class ListarPensamentoComponent implements OnInit {
  listaPensamentos: Pensamento[] = [];

  constructor(private service: PensamentoService) {}

  // FAZ PARTE DO CICLO DE VIDA DO COMPONENTE
  // TODA LÓGICA QUANDO O COMPONENTE FOR CARREGADO
  ngOnInit(): void {
    // OBTER O MÉTODO DO Service
    this.service.listar().subscribe((listaPensamentos) => {
      this.listaPensamentos = listaPensamentos;
    });

    // throw new Error('Method not implemented.');
  }
}

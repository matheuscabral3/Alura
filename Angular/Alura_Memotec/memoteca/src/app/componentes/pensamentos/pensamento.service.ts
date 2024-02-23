import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Pensamento } from './pensamento';
import { Observable } from 'rxjs';

// SERVIÇO PODE SER INJETÁVEL EM TODA APLICAÇÃO...
@Injectable({
  providedIn: 'root',
})
export class PensamentoService {
  // Pensamentos obtidos através do => DB.JSON
  private readonly API = 'http://localhost:3000/pensamentos';
  constructor(private http: HttpClient) {}

  // -----------------
  //  OBSERVABLE
  // Ao fazer requisições o HttpClient retorna observable da chamada desses métodos.
  // O Observable é utilizado internamente pelo framework e já é instalado quando você cria uma nova aplicação Angular e é uma funcionalidade da biblioteca RXJS.
  // -----------------

  // SERVIÇO DE LISTAGEM
  listar(): Observable<Pensamento[]> {
    return this.http.get<Pensamento[]>(this.API);
  }

  // CRIAR
  criar(pensamento: Pensamento): Observable<Pensamento> {
    return this.http.post<Pensamento>(this.API, pensamento);
  }

  // EDITAR
  editar(pensamento: Pensamento): Observable<Pensamento> {
    const url = `${this.API}/${pensamento.id}`;
    return this.http.put<Pensamento>(url, pensamento);
  }

  // EXCLUIR
  excluir(id: number): Observable<Pensamento> {
    // CRIAÇÃO DA URL, levando em consideração o ID
    const url = `${this.API}/${id}`;

    // EXCLUIR O PENSAMENTO COM BASE NA URL
    return this.http.delete<Pensamento>(url);
  }

  // COMPLEMENTO DO EXCLUIR - Utilizado para Identificar o ID
  buscarPorId(id: number): Observable<Pensamento> {
    const url = `${this.API}/${id}`;
    return this.http.get<Pensamento>(url);
  }
}

// Atenção: Cuidado ao selecionar o terminal.
// O back-end deve continuar em execução no terminal secundário, separado da aplicação.

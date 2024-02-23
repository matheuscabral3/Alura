import { Component } from '@angular/core';
import { ICurso } from '../classes/interface.curso';
import { CursoService } from '../services/curso.service';


@Component({
    moduleId: module.id,
    templateUrl: 'views/cadastro.component.html'

    // template: `
    //     <div class="container margem">
    //         <h1>CADASTRO DE CURSOS</h1>
    //         <h3>Código:{{curso.codigo}}</h3>
    //         <h3>Descrição:{{curso.descricao}}</h3>
    //         <h3>Carga Horária:{{curso.ch}}</h3>
    //     </div>
    // `
})

export class CadastroComponent {
    // Simulação: definindo apenas um objeto
     public curso : ICurso = {
         codigo: 10,
         descricao: 'Node JS',
         ch: 24
    };

    // Utilizando o SERVIÇO DE INJEÇÃO no componente
    public listaCursos : ICurso[];
    constructor(cursosService : CursoService){
         this.listaCursos = cursosService.getListaCurso();
    }

}
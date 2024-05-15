import { Component } from '@angular/core';
import { CursoService } from '../services/curso.service';
import { ICurso } from '../classes/interface.curso';

@Component({
    moduleId: module.id,
    templateUrl: 'views/masterdetail.component.html'
})



export class MasterDetailComponent {

    //PARA UM CURSO SELECIONADO
    public cursoSelecionado: ICurso = {
        codigo: null,
        descricao: ``,
        ch: null
    };

    // Modelo não funciona igual ao Curso :
    // Necessário Construtor
    //public cursoSelecionado : ICurso;

    public selecionar(item: ICurso): void {
        this.cursoSelecionado = item;
    }


    // Utilizando o SERVIÇO DE INJEÇÃO no componente
    public listaCursos: ICurso[];
    constructor(cursosService: CursoService) {
        this.listaCursos = cursosService.getListaCurso();
    }
}
import { Injectable } from '@angular/core';
import { ICurso } from '../classes/interface.curso';


// Serviço que será utilizado em outros componentes
@Injectable()
export class CursoService{
    public getListaCurso() : ICurso[] {
        //      ARRAY
        return [
            {codigo: 11, descricao: 'Desenvolvimento JAVA', ch: 30},
            {codigo: 12, descricao: 'Desenvolvimento C#', ch: 28},
            {codigo: 13, descricao: 'Desenvolvimento Front-End', ch: 34},
            {codigo: 16, descricao:'Algoritmos', ch:15},
            {codigo: 14, descricao:'Lógica de Programação', ch:15},
            {codigo: 15, descricao:'Desenvolvimento Angular 4', ch:15}
        ]  
    }
}
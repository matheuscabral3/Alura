//  EXEMPLO CLASSE
class Pessoa {
    
    static total: number ;

    //  Para criar o objPessoa será NECESSÁRIO esses três parâmetros.
    //  Cada vez que criar um Aluno, será acrescentado o Parametro > Total
    constructor(protected nome: string, protected idade: number){
        Pessoa.total += 1;
    }
}

//  EXEMPLO CLASSE Aluno
//  Que utiliza uma extensao da Classe Pessoa
class Aluno extends Pessoa {
    //  Atríbutos
    private curso : string = "";

    // Métodos
    public setCurso(curso: string):void {
        this.curso = curso;
    }

    public getCurso() : string{
        return this.nome;
    }

    constructor (curso: string, nome: string, idade:number){
        // Parâmetros que a super Classe espera receber...
        super(nome, idade);
    }
}

// INTERFACE CONTENDO SOMENTE A DEFINIÇÃO...
interface IPonto {
    x: number;
    y: number;
    ehQuadrado() : boolean;
}

// Classe PONTO que utiliza implementação da Interface IPonto...
class Ponto implements IPonto {
    public x : number = 0;
    public y : number = 0;

    public ehQuadrado() : boolean {
        return this.x == this.y;
    }
}

//  TESTE COM AS CLASSES
class Teste {
    public testar(): void{
        // 
        let aluno = new Aluno("JavaScript", "Matheus M.", 23);
        aluno.setCurso("Angular 4");

        let ponto = new Ponto();
        ponto.x = 10;
        ponto.y = 10;

        // IIF
        alert(ponto.ehQuadrado() ? "É um quadrado!" : "Não é um Quadrado.");
    }
}
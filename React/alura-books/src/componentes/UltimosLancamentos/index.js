import { livros } from "./dadosUltimosLancamentos";
import { Titulo } from "../Titulo";
import CardRecomenda from "../CardRecomenda";
import styled from "styled-components";
import Livro2 from "../../imagens/livro2.png";

const UltimosLancamentosContainer = styled.section`
  background-color: #ebecee;
  padding-bottom: 20px;
  display: flex;
  flex-direction: column;
`;

const NovosLivrosContainer = styled.div`
  margin-top: 30px;
  display: flex;
  width: 100%;
  justify-content: center;
  cursor: pointer;
`;

export default function UltimosLancamentos() {
  return (
    <UltimosLancamentosContainer>
      <Titulo cor="#eb9b00" tamanhoFonte="36px">
        ÚLTIMOS LANÇAMENTOS
      </Titulo>
      <NovosLivrosContainer>
        {livros.map((livro) => (
          <img src={livro.src} alt="logo"></img>
        ))}
      </NovosLivrosContainer>
      <CardRecomenda
        titulo="Talvez você se interesse por ..."
        subtitulo="Angular 11"
        descricao="Construindo uma aplicação com a plataforma google."
        img={Livro2}
      />
      <br />
      <CardRecomenda
        titulo="Talvez você se interesse por ..."
        subtitulo="Angular 12"
        descricao="Construindo uma aplicação com integração API."
        img={Livro2}
      />
    </UltimosLancamentosContainer>
  );
}

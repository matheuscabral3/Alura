import Input from "../Input";
import styled from "styled-components";
import { livros } from "./dadosPesquisa";

import { useState } from "react";

const PesquisaContainer = styled.section`
  background-image: linear-gradient(90deg, #002f52 35%, #326589 165%);
  color: #fff;
  text-align: center;
  padding: 85px 0;
  height: 270px;
  width: 100%;
`;

const Titulo = styled.h2`
  color: #fff;
  font-size: 36px;
  text-align: center;
  width: 100%;
  margin-bottom: 15px;
`;

const SubTitulo = styled.h3`
  font-size: 16px;
  font-weight: 500;
  margin-bottom: 40px;
`;

const Resultado = styled.div`
  display: flex;
  justify-content: center;
  align-items: center;
  margin-bottom: 20px;
  cursor: pointer;
  p {
    width: 200px;
  }
  img {
    width: 100px;
  }
  &:hover {
    border: 1px solid white;
  }
`;

export default function Pesquisa() {
  const [livrosPesquisados, setLivrosPesquisados] = useState([]);

  return (
    <PesquisaContainer>
      <Titulo>Já sabe por onde começar?</Titulo>
      <SubTitulo>Encontre seu livro em nossa estante.</SubTitulo>
      <Input
        placeholder="Escreva sua próxima leitura"
        onBlur={(event) => {
          const textoDigitado = event.target.value;
          const resultadoPesquisa = livros.filter((livro) =>
            livro.nome.includes(textoDigitado)
          );
          setLivrosPesquisados(resultadoPesquisa);
        }}
      />

      {livrosPesquisados.map((livro) => (
        <Resultado>
          <p>{livro.nome}</p>
          <img src={livro.src} alt="logo"></img>
        </Resultado>
      ))}
    </PesquisaContainer>
  );
}

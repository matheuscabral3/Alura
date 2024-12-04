import Perfil from "../../imagens/perfil.svg";
import Sacola from "../../imagens/sacola.svg";
import styled from "styled-components";

const Icones = styled.ul`
  display: flex;
  align-items: center;
  cursor: pointer;
`;

const Icone = styled.li`
  margin-right: 40px;
  width: 25px;
`;

const icones = [Perfil, Sacola];

function IconesHeader() {
  return (
    <Icones>
      {icones.map((icone) => (
        <Icone>
          <img src={icone} alt="logo"></img>
        </Icone>
      ))}
    </Icones>
  );
}

export default IconesHeader;

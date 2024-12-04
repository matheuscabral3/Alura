import LogoImagem from "../../imagens/logo.svg";
import styled from "styled-components";

const LogoContainer = styled.div`
  display: flex;
  font-size: 30px;
`;

const ImagemLogo = styled.img`
  margin-right: 10px;
`;

export default function Logo() {
  return (
    <LogoContainer className="logo-container">
      <ImagemLogo src={LogoImagem} alt="Logo" className="logo-img" />
      <p>
        <strong>Alura Books</strong>
      </p>
    </LogoContainer>
  );
}

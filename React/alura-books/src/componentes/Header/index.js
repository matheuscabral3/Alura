import Logo from "../Logo";
import IconesHeader from "../IconesHeader";
import OpcoesHeader from "../OpcoesHeader";
import styled from "styled-components";

const HeaderContainer = styled.header`
  display: flex;
  background-color: #fff;
  justify-content: space-evenly;
  align-items: center;
  height: 100px;
  gap: 40px;
`;

function Header() {
  return (
    <HeaderContainer>
      <Logo />
      <OpcoesHeader />
      <IconesHeader />
    </HeaderContainer>
  );
}

export default Header;

import Header from "./componentes/Header";
import Pesquisa from "./componentes/Pesquisa";
import UltimosLancamentos from "./componentes/UltimosLancamentos";
import styled from "styled-components";

const AppContainer = styled.div`
  width: 100vw;
  height: 100vh;
  overflow-x: hidden;
  background-image: linear-gradient(90deg, #002f52 35%, #326589 165%);
`;

export default function App() {
  return (
    <AppContainer className="App">
      <Header />
      <Pesquisa />
      <UltimosLancamentos />
    </AppContainer>
  );
}

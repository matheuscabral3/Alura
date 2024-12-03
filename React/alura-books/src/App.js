import "./App.css";
import Logo from "./componentes/Logo";
import Perfil from "./imagens/perfil.svg";
import Sacola from "./imagens/sacola.svg";

const textoOpcoes = ["CATEGORIAS", "FAVORITOS", "MINHA ESTANTE"];
const icones = [Perfil, Sacola];

export default function App() {
  return (
    <div className="App">
      <header className="App-header">
        <Logo />
        <ul className="opcoes">
          {textoOpcoes.map((texto) => (
            <li className="opcao">
              <p>{texto}</p>
            </li>
          ))}
        </ul>

        <ul className="icones">
          {icones.map((icone) => (
            <li>
              <img className="icone" src={icone}></img>
            </li>
          ))}
        </ul>
      </header>
    </div>
  );
}

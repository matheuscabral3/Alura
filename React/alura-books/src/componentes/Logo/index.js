import LogoImagem from "../../imagens/logo.svg";
import "../../componentes/Logo/estilo.css";

export default function Logo() {
  return (
    <div className="logo">
      <img src={LogoImagem} alt="Logo" className="logo-img"></img>
      <p className="header-titulo">
        <strong>Alura Books</strong>
      </p>
    </div>
  );
}

// COMENTARIO PARA REMOVER OS ERROS INCONSISTENTES DO VSCODE.
/* eslint-disable react/prop-types */
import Code from "./assets/code.svg";
import Share from "./assets/share.svg";
import Chat from "./assets/chat.svg";
import "./styles.css";

export default function Card({
  id,
  imagemUrl,
  titulo,
  resumo,
  linhasDeCodigo,
  compartilhamentos,
  comentarios,
  usuario,
}) {
  return (
    <div className="container-cards">
      <article className="card" id={id}>
        <div className="card__imagem">
          <img src={imagemUrl} alt="imagem do post" />
        </div>
        <div className="card__conteudo">
          <div className="conteudo__texto">
            <h3>{titulo}</h3>
            <p>{resumo}</p>
          </div>

          <div className="conteudo__rodape">
            <ul>
              <li>
                <img src={Code} alt="códigos" />
                {linhasDeCodigo}
              </li>
              <li>
                <img src={Share} alt="compartilhamentos" />
                {compartilhamentos}
              </li>
              <li>
                <img src={Chat} alt="comentários" />
                {comentarios}
              </li>
            </ul>

            <div className="rodape__usuario">
              <img src={usuario.imagem} alt="imagem do usuário" />
              {usuario.nome}
            </div>
          </div>
        </div>
      </article>
    </div>
  );
}

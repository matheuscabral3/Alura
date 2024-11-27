import "./styles.css";

export default function Ordenacao() {
  return (
    <section className="ordenacao">
      <ul>
        <li>
          <a href="#" className="ordenacao__item__link--ativo">
            Antigos
          </a>
        </li>
        <li>
          <a href="#" className="ordenacao__item__link">
            Recentes
          </a>
        </li>
      </ul>
    </section>
  );
}

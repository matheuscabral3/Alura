import "./App.css";
import BarraDePesquisa from "./componentes/BarraDePesquisa";
import Sidebar from "./componentes/sidebar";
import Filtro from "./componentes/Filtro";

function App() {
  return (
    <div className="container">
      <Sidebar />
      <div>
        <BarraDePesquisa />
        <Filtro />
      </div>
    </div>
  );
}

export default App;

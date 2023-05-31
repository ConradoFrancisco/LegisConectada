
import { BrowserRouter as Router,Route,Routes} from 'react-router-dom';
import './App.css';
import ListarProductos from './componentes/ListarProductos';
import CrearProducto from './componentes/CrearProducto';

function App() {
  return (
    <Router>
      <div className='container'>
        <Routes>
          <Route exact path='/' element={<ListarProductos/>}/>
        
          <Route exact path='add/:id' element={<CrearProducto/>}/>
          
        
        </Routes>
      </div>
    </Router>
  );
}

export default App;

import './App.css';
import 'bootstrap/dist/css/bootstrap.min.css';
import {BrowserRouter as Router,Routes,Route} from 'react-router-dom';
import Notaprensa from './componentes/vistas/NotaPrensa';
import Index from './componentes/vistas/Index';
import Admin from './componentes/vistas/Admin';
import AddNoticia from './componentes/vistas/AddNoticia';



function App() {
  return (
    <div className="App">
      <Router>
        <Routes>
          <Route exact path='/' element={<Index/>}/>   
          <Route exact path='/prensa/:id' element={<Notaprensa/>}/>
          <Route exact path='/admin' element={<Admin/>}/>
          <Route exact path='/AddNoticia' element={<AddNoticia/>}/>
        </Routes>
      </Router>
    </div>
  );
}


export default App;


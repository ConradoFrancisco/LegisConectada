import axios from "axios";
import React, {useState,useEffect}from "react";
import './Tabla.css'
import { Link } from "react-router-dom";

import BootstrapTable from 'react-bootstrap-table-next';
function Tabla(){
    
  const [noticias,setNoticias] = useState([]);
  const [bandera,setbandera] = useState(0);
  const getNoticias = async () =>{
      let noticias = await axios.get('http://localhost:8080/admin');
      console.log(noticias.data.datos);
      setNoticias(noticias.data.datos);
  }

  const handlePublicar = async (idNoticia) => {
    
    try {
      await axios.put(`http://localhost:8080/admin/${idNoticia}`);
      // Realizar acciones adicionales después de la modificación en la base de datos
      // Por ejemplo, actualizar la lista de noticias o mostrar un mensaje de éxito
      console.log('Noticia publicada con éxito');
      setbandera(bandera + 1)
    } catch (error) {
      console.log(error);
      // Manejar el error y mostrar un mensaje de error si es necesario
    }
  }

  const handlePublicars = async (idNoticia) => {
    
    try {
      await axios.put(`http://localhost:8080/admin/${idNoticia}/up`);
      // Realizar acciones adicionales después de la modificación en la base de datos
      // Por ejemplo, actualizar la lista de noticias o mostrar un mensaje de éxito
      console.log('Noticia publicada con éxito');
      setbandera(bandera + 1)
    } catch (error) {
      console.log(error);
      // Manejar el error y mostrar un mensaje de error si es necesario
    }
  }
  useEffect(()=>{
      getNoticias();
  },[bandera])

    const columns = [
        { dataField: 'id_noticia', text: 'ID' },
        { dataField: 'fecha', text: 'Fecha' },
        { dataField: 'titulo_noticia', text: 'Titulo' },
        { dataField: 'nombre_organismo', text: 'Legislatura' },
        { dataField: 'autor_noticia', text: 'Usuario' },
        { dataField: 'estado', text: 'Estado' },
        { dataField: 'acciones', text: 'Acciones' },
        // Otras columnas...
      ];
    let array = [];
      for(let i = 0 ; i < noticias.length; i++){
        let noticia = {
          'id_noticia' : noticias[i].id_noticia,
          'fecha': noticias[i].fecha,
          'titulo_noticia' : noticias[i].titulo_noticia,
          'nombre_organismo' : noticias[i].nombre_organismo,
          'autor_noticia' : noticias[i].autor_noticia,
          'estado' : noticias[i].Noticia_publicada === "si" ? <button className="btn btn-sm btn-success">Publicado</button>: <button className="btn btn-sm btn-danger">Sin publicar</button>,
          'acciones' : noticias[i].Noticia_publicada === "no" ? <button
          className='btn btn-sm btn-primary'
          onClick={() => handlePublicar(noticia.id_noticia)}>Publicar</button> : <button
          className='btn btn-sm btn-primary'
          onClick={() => handlePublicars(noticia.id_noticia)}>DesPublicar</button> 
         }
         array.push(noticia);
      }
    return (

        <div className="caja">
          <BootstrapTable
          keyField="id"
          data={array}
          columns={columns}
          striped
          hover
          condensed
          parentClassName='asd'
                />
        </div>


    );

}

export default Tabla
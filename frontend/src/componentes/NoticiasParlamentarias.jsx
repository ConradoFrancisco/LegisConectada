import {React,useEffect,useState} from "react";
import axios from 'axios';
import { Card, CardImg } from "react-bootstrap";
import './NoticiasParlamentarias.css';
import {Link} from 'react-router-dom';


function NoticiasParlamentarias(){
    const [noticias,SetNoticias] = useState([]);
    const [notis,setNotis] = useState([]);

    useEffect(()=>{
        getNoticiasParl();

        getNoticias();
    },[])


    const getNoticias = async () =>{
        let nota = await axios.get('http://localhost:8080/');
        SetNoticias(nota.data.datos);
        console.log(nota.data.datos[0]);
    }

    const getNoticiasParl = async () =>{
        let notas = await axios.get ('http://localhost:8080/notparl');
        console.log (notas.data.datos);
        setNotis(notas.data.datos);
    }

    return (
        <div className="pt-3 pb-3 bg-light">
            <h1 className="h1 pt-4 pb-4">Noticias Institucionales</h1>
            <div className="container-fluid notParl fondo p-0">
                <div className="container">
                    <div className="row pt-5">
                        {}
                        {noticias.map((noticia,index)=>{
                            return(
                                <div className="col-md-4 carta pb-5" key={index}>
                                    <Card style={{maxHeight:'600px',height:'100%'}} className="bg-light">
                                        <Card.Header>
                                        <div className="cuerpocarta">
                                                <span className="fechaypais">{noticia.Nombre_pais}</span>
                                                <span className="fechaypais">{noticia.fecha}</span>
                                            </div>
                                        </Card.Header>
                                        <CardImg
                                            src={noticia.Portada_noticia}
                                            style={{maxHeight:'216px',}}
                                        />
                                        <Card.Body>
                                            <span style={{fontStyle:'italic',fontSize:'13px',fontWeight:'550',color:'rgba(114,141,153,255)'}}>{noticia.nombre_organismo}</span>
                                            <Card.Title className="titulo">{noticia.titulo_noticia}</Card.Title>
                                            <Card.Text className="desc">{noticia.resumen_noticia}</Card.Text>
                                        </Card.Body>
                                        <Card.Footer className="futer" style={{backgroundColor:'rgba (145,182,199,255) !important'}}>
                                        <div className="d-grid gap-2">
                                            <Link to={'/prensa/'+noticia.id_noticia} className='botonazo'>leer mas</Link>
                                            </div>
                                        </Card.Footer>
                                    </Card>
                                </div>
                            )
                        })}
                    </div>
                </div>
                <div className="container-fluid p-0" style={{backgroundColor:'rgba(var(--bs-light-rgb),var(--bs-bg-opacity))'}}>
                    <h2 className="h2 p-2">Noticias Parlamentarias</h2>
                </div>
                    <div className="container">
                    <div className="row pt-5">
                        {}
                        {notis.map((noticia,index)=>{
                            return(
                                <div className="col-md-4 carta pb-5" key={index}>
                                    <Card style={{maxHeight:'600px',height:'100%'}} className="bg-light">
                                        <Card.Header>
                                        <div className="cuerpocarta">
                                                <span className="fechaypais">{noticia.Nombre_pais}</span>
                                                <span className="fechaypais">{noticia.fecha}</span>
                                            </div>
                                        </Card.Header>
                                        <CardImg
                                            src={noticia.Portada_noticia}
                                            style={{maxHeight:'216px',}}
                                        />
                                        <Card.Body>
                                            <span style={{fontStyle:'italic',fontSize:'13px',fontWeight:'550',color:'rgba(114,141,153,255)'}}>{noticia.nombre_organismo}</span>
                                            <Card.Title className="titulo">{noticia.titulo_noticia}</Card.Title>
                                            <Card.Text className="desc">{noticia.resumen_noticia}</Card.Text>
                                        </Card.Body>
                                        <Card.Footer className="futer" style={{backgroundColor:'rgba (145,182,199,255) !important'}}>
                                        <div className="d-grid gap-2">
                                            <Link to={'/prensa/'+noticia.id_noticia} className='botonazo'>leer mas</Link>
                                            </div>
                                        </Card.Footer>
                                    </Card>
                                </div>
                            )
                        })}
                    </div>
                </div>
                
            </div>
        </div>

    );
}

export default NoticiasParlamentarias;
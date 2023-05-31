import {React} from "react";
import {useEffect,useState} from "react";
import Topmenu from "../Topmenu";
import NavBarMidle from "../NavbarMidle";
import axios from "axios";
import './notaprensa.css';
import Carousel from "react-bootstrap/Carousel";
import { CarouselItem } from "react-bootstrap";
import {BsGlobeAmericas,BsTelephonePlusFill} from 'react-icons/bs';
import {GrMail} from 'react-icons/gr';
import {CiLocationOn} from 'react-icons/ci';
import {useParams} from 'react-router-dom';
function Notaprensa(){
    const [notasa, Setnotasa] = useState([]);
    const [fotos, SetFotos] = useState([]);
    const {id} = useParams();
    useEffect(()=>{
        getNoticia();
    },[])

    const getNoticia = async () =>{
        let nota = await axios.get('http://localhost:8080/prensa/'+ id);
        console.log(nota.data[0]);
        SetFotos(([nota.data[0].imagen_src,nota.data[0].imagen_src1,nota.data[0].imagen_sr2,nota.data[0].imagen_sr3].filter(foto=> foto !== undefined).filter(foto=> foto !== '')));
        Setnotasa(nota.data[0]);
    }

    return(

        <>
            <Topmenu></Topmenu>
            <NavBarMidle></NavBarMidle>
            <div className="pb-3 Banner" style={{display:'flex',flexDirection:'column',alignItems:'center', justifyContent:'center', color:'#fff' }}>
                {<h1>{notasa.nombre_organismo}</h1>}
                <h3>Noticias</h3>
            </div>

            <div className="container">
                <div className="row">
                    <div className="col-md-8" style={{textAlign:'start'}}>
                        <div className="card p-2" style={{maxHeight:'fit-content' , maxWidth:'fit-content'}}>
                            <Carousel>
                                {fotos.map((foto,index) =>{

                                    return(
                                    <CarouselItem style={{ maxHeight:'fit-content', padding:'0px'}}>
                                        <img
                                            src={foto}
                                            style={{maxHeight:'30rem', }}
                                            alt={index}
                                        />
                                    </CarouselItem>
                                    );
                                })}
                            </Carousel>
                        </div>
                        <h5 style={{fontSize:'20px' , lineHeight: '1.3'}}><b>{notasa.titulo_noticia}</b></h5>
                        <br />
                        <p>{notasa.Noticia_completa}</p>
                    </div>
                    <div className="col-md-4">
                        <div className="card p-3">
                            <div className="card " style={{maxWidth:'fit-content'}}>
                                <img
                                    src={notasa.logo_organismo}
                                    alt=""
                                    style={{maxHeight:'300px', padding:'5px', maxWidth:'300px'}}
                                 />
                            </div>
                            <div >
                            {notasa.Tematica !== "" ? <><hr /> <div style={{display:'flex', paddingLeft:'10px'}} ><span style={{display:'inline-block'}}>Temática:</span> <span style={{display:'inline-block' }}>{notasa.Tematica}</span></div></> : ""}                                 
                            {notasa.fecha !== "" ? <><hr /><div ><span style={{display:'inline-block' }}>Fecha:</span> <span style={{display:'inline-block' ,width:'80%'}}>{notasa.fecha}</span></div></> : ""}
                            <hr />
                            <div>
                                <span style={{color: 'grey' ,display:'flex' , paddingLeft:'10px'}}>Informacion de contacto:</span>
                            </div>
                            {notasa.pagina_organismo !== "" ? <><hr/><div className="pagina"><BsGlobeAmericas/><a className="pagina" href={notasa.pagina_organismo}>{notasa.pagina_organismo}</a></div> </> : ""}
                            {notasa.mail_organismo !== "" ?<><hr/><div><span><GrMail/>{notasa.mail_organismo}</span></div> </> : ""}
                            {notasa.telefono_organismo !== "" ? <><hr /><div><span><BsTelephonePlusFill/>{notasa.telefono_organismo}</span> </div></> : ""}
                            {notasa.direccion_organismo !== "" ? <><hr /><div><span><CiLocationOn/>{notasa.direccion_organismo}</span></div></> : ""}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </>

    );
}

export default Notaprensa
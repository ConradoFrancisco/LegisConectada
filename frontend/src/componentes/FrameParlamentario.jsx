import React from "react";
import {FaInstagram,FaYoutube,FaLinkedin,FaFacebook,FaTwitter} from 'react-icons/fa';
import './FrameParlamentario.css'

function FrameParlamentario(){

    let color = 'rgb(37,55,70)';

    return (
    <>
        <div className="pt-5 bg-light">
            
        <div className="container contenedor">
            <div className="row font-italic">
                <div className="col-md-6">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/AbJeqgXO4WM?controls=0&autoplay=1&showinfo=0&rel=0" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div className="col-md-6">
                    <strong className="font-italic">la RED interparlamentaria ABIERTA a la participación CIUDADANA.</strong>
                    <p className="mt-3">Legislaturas Conectadas es una red institucional interactiva que comunica los parlamentos entre sí y con la ciudadanía.
                    Contamos con tres medios de comunicación</p>
                    <ol>
                        <li>
                        La plataforma interactiva www.legislaturasconectadas.gob.ar que elaboramos entre todos.
                        </li>
                        <li>
                        Nuestras RRSS:
                        <ul className="iconos-frame-parlamentario font-italic">
							<li><a className="" href="https://www.facebook.com/legislaturas.conectadas.arg/"> <FaFacebook className="botones facebook" style={{color:color,height:'40px', width:'40px'}}></FaFacebook>  <span>@legislaturas.conectadas.arg</span></a></li>
							<li> <a href="https://twitter.com/lconectadas?lang=es"><FaTwitter className="botones twitter" style={{color:color,height:'40px', width:'40px'}}/> <span>@lconectadas</span></a></li>
							<li className=""> <a  href="https://www.instagram.com/legislaturasconectadas/?hl=es-la"> <FaInstagram className="botones instagram" style={{color:color,height:'40px', width:'40px'}}/> <span>@legislaturasconectadas</span></a></li>
							<li className=""><a href="https://www.youtube.com/channel/UC5ACdrMW0Q8GubYtDoD2Gqg" > <FaYoutube className="botones youtube" style={{color:color,height:'40px', width:'40px'}}/><span>Legislaturas Conectadas</span></a></li>
							<li className=""><a href="https://www.linkedin.com/in/parlamentos-en-red-legislaturas-conectadas-55353b206" className="" ><FaLinkedin className="botones linkedin" style={{color:color,height:'40px', width:'40px'}}/> <span>Legislaturas Conectadas</span></a></li>
                        </ul>
                        </li>
                        <li>
                        Una síntesis semanal de noticias :"Breves de noticias Parlamentarias"
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        </div>
    </>

    );
}

export default FrameParlamentario;
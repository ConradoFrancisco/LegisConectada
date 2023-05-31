import React from "react";
import './Footer.css';
import {FaFacebook,FaInstagram,FaTwitter,FaLinkedin,FaYoutube} from 'react-icons/fa';
function Footer(){
    let color = 'rgba(12,11,11,1)';

    return(
        <footer className="container-fluid bg-light" style={{height:'900px'}}>
            <div className="container">
                <div className="row pt-3">
                    <div className="col-md-3" style={{paddingLeft:'0px'}}>
                        <img src="https://www.legislaturasconectadas.gob.ar/static/web/images/logos/LC_logo.png" alt="" />
                    </div>
                    <div className="col-md-6 offset-3 linksu" style={{height:'100px'}}>
                        <ul>
                            <li>
                                <span>Legislaturas</span>
                            </li>
                            <li>
                                <span>Contacto</span>
                            </li>
                            <li>
                                <span>Links de interes</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div className="container">
                <hr />
            </div>
            <div className="container">
                <div className="row">
                    <div className="col-md-4" style={{display:"flex",justifyContent:'center', alignItems:'center'}}><span>© 2023 - Legislaturas Conectadas</span></div>
                    <div className="col-md-4" style={{display:"flex",flexDirection:"column", alignItems:'center'}}>
                        <img style={{height:'50px', width:'50px'}} src="https://www.legislaturasconectadas.gob.ar/static/web/images/premioaltares.png" alt="" />
                        <span>Web premiada con el Premio Internacional OX</span>
                    </div>
                    <div className="col-md-4 m-0"><ul className="top-nav-social topnav">
							<li className="facebook"><a className="facebook" href="https://www.facebook.com/legislaturas.conectadas.arg/"> <FaFacebook className="botones" style={{color:color,height:'30px', width:'30px'}}></FaFacebook> </a></li>
							<li className="twitter" > <a href="https://twitter.com/lconectadas?lang=es"><FaTwitter className="botones" style={{color:color,height:'30px', width:'30px'}}/></a></li>
							<li className="instagram"> <a  href="https://www.instagram.com/legislaturasconectadas/?hl=es-la"> <FaInstagram className="botones" style={{color:color,height:'30px', width:'30px'}}/></a></li>
							<li className="youtube"><a href="https://www.youtube.com/channel/UC5ACdrMW0Q8GubYtDoD2Gqg" > <FaYoutube className="botones" style={{color:color,height:'30px', width:'30px'}}/></a></li>
							<li className="linkedin"><a href="https://www.linkedin.com/in/parlamentos-en-red-legislaturas-conectadas-55353b206" className="linkedin" ><FaLinkedin className="botones" style={{color:color,height:'30px', width:'30px'}}/></a></li>
                        </ul></div>
                </div>
            </div>
        </footer>

    );
}

export default Footer;
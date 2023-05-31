import React from "react";
import './Banner.css';
import {Button} from 'react-bootstrap';
function Banner(){

    return(
        <div className="container-fluid fondo">
            <div className="container" style={{paddingBottom:'40px'}}>
                <h2 className="h4" style={{color:'#eaeff0', paddingTop:'50px', paddingBottom:'20px'}}>Te invitamos a interiorizarte sobre las leyes y proyectos y las actividades de las Legislaturas</h2>
                <Button id="bot" variant="primary" size="lg" >Quiero Saber Más</Button>{' '}
            </div>
        </div>

    );
}

export default Banner;

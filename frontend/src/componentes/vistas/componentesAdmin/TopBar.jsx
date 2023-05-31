import React from "react";
import {} from 'react-icons';
import { FaAdjust } from "react-icons/fa";
import './Topbar.css'
function Topbar(){


    return(
        <div className="navbar">
            <ul>
                <li><img src="https://www.legislaturasconectadas.gob.ar/static/web/images/logos/logo_backend.png" /></li>
                <li>LEGISLATURAS CONECTADAS ADMIN</li>
                <li><FaAdjust/></li>
            </ul>

        </div>

    );
}

export default Topbar;
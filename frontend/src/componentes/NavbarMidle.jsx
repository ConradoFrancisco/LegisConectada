import React from "react";
import { FaAngleDown} from "react-icons/fa";
import {GiMagnifyingGlass} from 'react-icons/gi'
import {Navbar,NavDropdown,NavbarBrand,Dropdown,Nav} from 'react-bootstrap';

import {Link} from 'react-router-dom';

//Falta Aplicar Logica del Router cuando defina las Rutas en codeigniter.

function NavBarMidle(){
    return(
        <div className="container-fluid" bg='warning'>
            <div className="container">
            <div className="row" style={{fontWeight:'600'}}>
                <div className="col-md-12">
                    <Navbar bg=""> 
                        <Navbar.Brand href="#"><img src="https://www.legislaturasconectadas.gob.ar/static/web/images/logos/LC_logo.png" alt="" /></Navbar.Brand>
                        <Navbar.Toggle aria-controls="basic-navbar-nav"/>
                        <Navbar.Collapse id="basic-navbar-nav"></Navbar.Collapse>
                        <Nav className="me-auto"/>
                        <Nav.Link href="#home" className="m-3">INICIO</Nav.Link>
                        {/* Primer drop */}
                        <NavDropdown title="ARGENTINA" id="basic-nav-dropdown" className="m-3">
                            <NavDropdown.Item href="#action/3.1">Legislaturas Privinciales</NavDropdown.Item>
                            <NavDropdown.Item href="#action/3.1">Concejos Deliberales</NavDropdown.Item>
                            <NavDropdown.Item href="#action/3.1">Noticias</NavDropdown.Item>
                            <NavDropdown.Item href="#action/3.1">Normativas</NavDropdown.Item>
                        </NavDropdown>
                        {/* Segundo drop */}
                        <NavDropdown title="PAISES" id="basic-nav-dropdown" className="m-3">
                            <NavDropdown.Item href="#action/3.1">Legislaturas</NavDropdown.Item>
                            <NavDropdown.Item href="#action/3.1">Concejos Internacionales</NavDropdown.Item>
                            <NavDropdown.Item href="#action/3.1">Noticias</NavDropdown.Item>
                            <NavDropdown.Item href="#action/3.1">Normativas</NavDropdown.Item>
                        </NavDropdown>
                        <Nav.Link href="#home">CONTACTO</Nav.Link>
                        <NavDropdown title="REDES Y LINKS" id="basic-nav-dropdown" className="m-3">
                            <NavDropdown.Item href="#action/3.1">Red de medios</NavDropdown.Item>
                            <NavDropdown.Item href="#action/3.1">Links de interés</NavDropdown.Item>
                        </NavDropdown>
                        <Nav.Link href="#home" className="m-3"><GiMagnifyingGlass style={{height:'30px',width:'30px'}}/></Nav.Link>
                    </Navbar>

                </div>
            </div>
            </div>
        </div>

    );


}

export default NavBarMidle;
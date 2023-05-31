import React from "react";
import Carousel from "react-bootstrap/Carousel";
import imagen from '../slider/buenos_aires_1.png';
import imagen_1 from '../slider/fachada_2.jpg';
import imagen_2 from '../slider/la_paz_15.jpg';
import imagen_3 from '../slider/banner_1.png';

//Agregar La descripcion en cada una de las imagenes;


export function Carrusel(){

    const imagenes = [
        imagen,imagen_1,imagen_2,imagen_3
    ];

    return (
        <div className="containfer-fluid">
            <Carousel className="pb-3">
                {imagenes.map((imagen) =>{
                    return (
                        <Carousel.Item>
                            <img
                                className="d-block w-100 h-80"
                                style={{maxHeight:'450px'}}
                                src={imagen}
                                alt="primer slide"
                            />
                        </Carousel.Item>
                    );
                })}
            </Carousel>
        </div>
    );
}
import React from "react";
import Topmenu from "../Topmenu";
import NavBarMidle from "../NavbarMidle";
import { Carrusel } from "../Carrusel";
import FrameParlamentario from "../FrameParlamentario";
import NoticiasParlamentarias from "../NoticiasParlamentarias";
import Faqs from "../faqs";
import Banner from "../banner";
import Footer from "../Footer";

function Index(){
    return (
        <>
            <Topmenu></Topmenu>
            <NavBarMidle></NavBarMidle>
            <Carrusel></Carrusel>
            <FrameParlamentario></FrameParlamentario>
            <NoticiasParlamentarias></NoticiasParlamentarias>
            <Faqs></Faqs>
            <Banner></Banner>
            <Footer/>
        </>
    );
}

export default Index;

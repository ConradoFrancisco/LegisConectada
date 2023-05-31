import React,{useState,useEffect} from "react";
import Sidebar from './componentesAdmin/Sidebar';
import Topbar from "./componentesAdmin/TopBar";
import axios from "axios";
import { useTable } from 'react-table';
import Tabla from "./componentesAdmin/Tabla";

function Admin (){


    return(
    <>
            <Topbar/>
            <Sidebar/>
            <Tabla/>
        </>
    );
}


export default Admin;
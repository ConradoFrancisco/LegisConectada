import React from "react";
import Topbar from "./componentesAdmin/TopBar";
import SideBar from "./componentesAdmin/Sidebar";
import FormNota from "./componentesAdmin/FormNota";

function AddNoticia(){


    return(
        <>
            <Topbar/>
            <div className="d-flex">
                <SideBar/>
                <FormNota/>
            </div>
        </>

    );
}
export default AddNoticia;
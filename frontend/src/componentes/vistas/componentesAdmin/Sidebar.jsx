import React from "react";
import { FaReact } from "react-icons/fa"; 
import { Link } from "react-router-dom";
import './Sidebar.css'
function SideBar(){


    return(
        <div className="sidebar">
        <ul>
          <li>
          <Link to='/admin/Noticia'>Noticias</Link>
          </li>
          <li>
          <Link to='/admin/Noticia'>Noticias</Link>
          </li>
          <li>
            <Link to='/admin/Noticia'>Noticias</Link>
          </li>
        </ul>
      </div>

    );
}

export default SideBar;
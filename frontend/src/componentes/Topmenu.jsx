import {React,useState,useEffect} from "react";
import {FaCalendar, FaFacebook, FaInstagram, FaLinkedin, FaTwitter, FaYoutube} from 'react-icons/fa'
import 'react-bootstrap';
import './Topmenu.css'

function Topmenu(){
//Integrar fecha desde codeigniter, actualizada automaticamente;
	let [strDate,SetstrDate] = useState([]);
    let color = 'rgba(236,236,236,255)';
	
	const traerfecha = () =>{

		let fecha = new Date();
		let mes;
		let dia;
		const meses = ['Enero', 'Febrero', 'Marzo', 'Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];
		const dias = ['Domingo','Lunes', 'Martes','Miercoles','Jueves','Viernes','Sabado' ];
		for(let i = 1;i<meses.length;i++){
			if (parseInt(fecha.getMonth().toLocaleString()) === i){
				mes = meses[i]
				console.log(mes)
				break;
			}
		}
		for(let i = 0;i<dias.length;i++){
			if (parseInt(fecha.getDay().toLocaleString()) === i){
				dia = dias[i];
				break
			}
		}
	
		const fechaCompleta = dia + ', ' + (fecha.getDate().toLocaleString()) + ' de ' + mes;


		return fechaCompleta;
	}

	useEffect(()=>{
		SetstrDate (traerfecha());
	},[])


    return (
        <div className="top-menu-1x"> 
        <div className="container">
			<div className="row">
				<div className="col-md-6">
					<div className="top-menu-left" style={{color:color,display:"flex",flexDirection:"row",justifyContent:'flex-start',margin:'1rem 0 0 0'}}>
						<FaCalendar on style={{color:'rgba(38,73,114,255)', height:'25px', width:'25px', margin:'0 10px 0 0'}}/><p>{strDate}</p>
					</div>
				</div>
				<div className="col-md-6">
					<div className="top-menu-right">
						<ul className="top-nav-social topnav">
							<li className="facebook"><a className="facebook" href="https://www.facebook.com/legislaturas.conectadas.arg/"> <FaFacebook className="botones" style={{color:color,height:'30px', width:'30px'}}></FaFacebook> </a></li>
							<li className="twitter" > <a href="https://twitter.com/lconectadas?lang=es"><FaTwitter className="botones" style={{color:color,height:'30px', width:'30px'}}/></a></li>
							<li className="instagram"> <a  href="https://www.instagram.com/legislaturasconectadas/?hl=es-la"> <FaInstagram className="botones" style={{color:color,height:'30px', width:'30px'}}/></a></li>
							<li className="youtube"><a href="https://www.youtube.com/channel/UC5ACdrMW0Q8GubYtDoD2Gqg" > <FaYoutube className="botones" style={{color:color,height:'30px', width:'30px'}}/></a></li>
							<li className="linkedin"><a href="https://www.linkedin.com/in/parlamentos-en-red-legislaturas-conectadas-55353b206" className="linkedin" ><FaLinkedin className="botones" style={{color:color,height:'30px', width:'30px'}}/></a></li>
                        </ul>    
                    </div>
                </div>
            </div>
        </div>
    </div>
    );

}

export default Topmenu;
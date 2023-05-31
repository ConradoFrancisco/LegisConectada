import {React,useState,useEffect} from "react";
import axios from "axios";
import {Accordion} from 'react-bootstrap';
import './faqs.css'

function Faqs (){
    let [Faqs,SetFaqs] = useState([]);

    useEffect(() =>{
        getFaqs();
    },[])

    const getFaqs = async () =>{
        let faq = await axios.get('http://localhost:8080/faqs');
        console.log(faq.data);
        SetFaqs(faq.data);
    }

    return (

        <div className="container-fluid bg-light">
            <div className="container" style={{marginTop:'0px',paddingTop:'0px', paddingBottom:'15px'}}>
                <h2 className="h2">Algunas Preguntas Que pueden Ayudarte</h2>
                <div className="p-3"></div>
                <div className="row">
                    <div className="col-md-12">
                        {Faqs.map((faq,index)=>{
                            return (
                                <Accordion className="p-2">
                                    <Accordion.Item eventKey="0">
                                        <Accordion.Header className="fw-bold">{faq.titulo_faq}</Accordion.Header>
                                        <Accordion.Body className="acordeones">
                                            {faq.descripcion_faq}
                                        </Accordion.Body>
                                    </Accordion.Item>
                                </Accordion>
                            );
                        })}
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Faqs

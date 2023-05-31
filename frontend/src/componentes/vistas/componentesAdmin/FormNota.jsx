import React,{useState, useEffect,useRef} from "react";
import axios from 'axios';
import ReactQuill from 'react-quill';
import 'react-quill/dist/quill.snow.css';
import {useForm} from 'react-hook-form';
import './FormNota.css'
import {Accordion} from 'react-bootstrap';
import {BsImages, BsFillCameraVideoFill} from 'react-icons/bs';
import {MdOutlineAttachFile} from 'react-icons/md'

 function FormNota(){
    const [organismos,SetOrganismos] = useState([]);
    const [paises,SetPaises] = useState([]); 
    const [tematicas,SetTematicas] = useState([]);
    const [mostrar,SetMostrar] = useState(true);
    const inputRef = useRef(null);
    const {register, handleSubmit, formState: {errors}} = useForm ({});
    const [datos,Setdatos] = useState([]);
    const [ima,Setima] = useState(false);
    const [imagenes, Setimagenes] = useState([]);
    const [imagenesurl, Setimagenesurl] = useState([]);
    const [file ,setfile] = useState();
    const [flag,setFlag] = useState(0);
    const [id, Setid] = useState();

    
    const [resumen, setContent] = useState('');
    const [cuerpo, setContent1] = useState('');
    const editorRef = useRef(null);
    const editorRef1 = useRef(null);
    
    const handleData = () => {
        const editor = editorRef.current.getEditor();
        const delta = editor.getContents();
        
        console.log(delta.ops[0].insert);
        setContent(delta.ops[0].insert);
      };

      const handleData1 = () => {
        const editor = editorRef1.current.getEditor();
        const delta = editor.getContents();
        const content = JSON.stringify(delta);
        console.log(content);
        setContent1(content);
      };

    const handleButtonClick = () => {
        Setima(true);
        
            const formData = new FormData();
            formData.append('data',file);
            formData.append('titulo',datos['titulo']);
            formData.append('cuerpo',cuerpo);
            formData.append('legislatura',datos['legislatura']);
            formData.append('tematica',datos['tematica']);
            formData.append('pais',datos['pais']);
            formData.append('resumen',resumen);
            formData.append('autor',datos['autor']);
            formData.append('flag',flag);
            formData.append('id',id);
            
            axios.post('http://localhost:8080/AddNoticia/', formData).then(response => {
                    console.log(response);
                    Setid(response.data.id);
                    console.log(id);
                    console.log('no hay error');
                }).catch(error => {
                console.log(error);
                console.log('ocurrio un error');
            });
            setFlag(1)
      };

      const handleFileChange = (event) => {
        const files = event.target.files[0];

        if (files && files.type.startsWith('image/')){
            console.log(files)
            setfile(files);
            Setimagenes([...imagenes, files]);
            Setimagenesurl([...imagenesurl,URL.createObjectURL(files)])
        }
        
      };  

    const validateSelect = (value) => {
        if (value === '0') { // verifica si el valor es igual a "-SELECCIONAR-"
            return "Por favor seleccione una opción"; // retorna un mensaje de error personalizado
        }
    }

    const onSubmit = (data) => {
        console.log(data);
        Setdatos(data);
        SetMostrar(false);
        /* let DataForm = new FormData();

        DataForm.append('titulo',datos['titulo']);
        DataForm.append('cuerpo',cuerpo);
        DataForm.append('legislatura',datos['legislatura']);
        DataForm.append('tematica',datos['tematica']);
        DataForm.append('pais',datos['pais']);

        axios.post('http://localhost:8080/AddNoticia', DataForm).then(response => {
            console.log(response);
            console.log('no hay error');
        }).catch(error => {
        console.log(error);
        console.log('ocurrio un error');
    }) */;
    };
    useEffect(()=>{
        getOrganismos();
    },[])

    const getOrganismos = async () =>{
        let org = await axios.get('http://localhost:8080/AddNoticia');
        SetOrganismos(org.data.data);
        SetPaises(org.data.data2);
        SetTematicas(org.data.data3);
    }

    return(
        <>
        {mostrar === true ? <>
        <div className="container conte">
            <div className="row">
                <div className="form-group col-md-3" style={{textAlign: 'left'}}>
                    <label>Pais:</label>   
                    <select name="" id="" style={{width:'100%'}} {...register("pais",{validate:validateSelect})}>
                        <option value='0'>-SELECCIONAR-</option>
                        {paises.map((pais,index) =>{
                            return (
                                <option value={index + 1}>{pais.Nombre_pais}</option>
                            );
                            
                        })}
                    </select>
                    {errors.pais && <p className="error">* {errors.pais.message}</p>}
                </div>
                <div className="form-group col-md-6" style={{textAlign: 'left'}}>
                <label>Legislatura</label>   
                    <select name="" id="" style={{width:'100%'}} {...register("legislatura",{validate:validateSelect})}>
                        <option value='0'>-SELECCIONAR-</option>

                    {organismos.map((organismo, index)=>{
                        return(
                            <option value={index + 1}>{organismo.nombre_organismo}</option>
                        )
                        
                    })}
                    </select>
                    {errors.legislatura && <p className="error">* {errors.legislatura.message}</p>}
                </div>
                <div className="col-md-2">
                    <label htmlFor="">Tipo de publicación</label>
                    <select name="" id="" style={{width:'100%'}} {...register("tpp",{validate:validateSelect})}>
                        <option value="0">-SELECCIONAR-</option>
                        <option value="1">Noticia</option>
                        <option value="2">Normativa</option>
                        <option value="3">Emergente</option>
                    </select>
                    {errors.tpp && <p className="error">* {errors.tpp.message}</p>}
                </div>
            </div>
            <div className="row mt-5">
                <div className="form-group col-md-2">
                    <label htmlFor="">Ámbito</label>
                    <select name="" id="" style={{width:'100%'}} {...register("ambito",{validate:validateSelect})}>
                        <option value="0">-SELECCIONAR-</option>
                        <option value="1">Internacional</option>
                        <option value="2">Nacional</option>
                        <option value="3">Local</option>
                    </select>
                    
                    {errors.ambito && <p className="error">* {errors.ambito.message}</p>}
                </div>
                <div className="form-group col-md-2">
                    <label htmlFor="">Temática</label>
                    <select name="" id="" style={{width:'100%'}} {...register("tematica",{validate:validateSelect})}>
                        <option value="0">-SELECCIONAR-</option>
                        {tematicas.map((tematica,index)=>{
                            return(
                                <option value={index + 1}>{tematica.Nombre_tematica}</option>
                            );
                        })}

                    </select>
                    {errors.tematica && <p className="error">* {errors.tematica.message}</p>}
                </div>
                <div className="form-group col-md-4">
                    <label htmlFor="">Autor: </label>
                    <input type="text" style={{width:'100%'}} {... register("autor",{required:'true'})}/>
                    {errors.autor && <p className="error">* {errors.autor.message}</p>}
                    
                </div>
            </div>
            <div className="row mt-5">
                <div className="form-group col-md-11">
                    <label htmlFor="">Título: </label>
                    <input type="text" style={{width:'100%'}} {... register ("titulo",{required: 'true'}) }/>
                    <span className="aclaracion">* Campo Requerido</span>
                    <span className="aclaracion">0 de 90 catacteres - requiere un mínimo de 35 caracteres</span>
                    {errors.titulo && <span className="error">* Este campo es requerido</span>}
                </div>
            </div>
            <div className="row">
                <div className="div col-md-11 mt-5">
                <label htmlFor="">Resumen:</label>
                    <ReactQuill style={{height:'200px'}} onChange={handleData} ref={editorRef}/>
                </div>
            </div>
            <div className="row mt-5">
                <div className="div col-md-11">
                <label htmlFor="">Cuerpo:</label>
                    <ReactQuill style={{height:'300px'}} onChange={handleData1} ref={editorRef1}></ReactQuill>
                </div>
                <div className="row p-0">
                    <div className="col-md-2"><button onClick={handleSubmit(onSubmit)} className="btn btn-success" style={{marginTop:'50px'}}>Enviar Datos</button></div>
                </div>
            </div>
        </div>
        </> : <div className="container conte pt-4">
                    <div className="row">
                        <Accordion className="p-2 col-md-11 ">
                            <Accordion.Item eventKey="0">
                                <Accordion.Header className="fw-bold"><BsImages className="me-2"/> Añadir Imagen</Accordion.Header>
                                <Accordion.Body className="acordeones" >
                                <div className="row"> 
                                    {ima === false ?  <div className="col-md-4 noimg"><h3 className="h5">Publicacion sin imagenes</h3> <hr/> <span>Todavía no se han subido imagenes a la publicacion</span></div> :  imagenesurl.map((imagen,key)=>{
                                        return(
                                            <div className="col-md-3"><img style={{maxHeight:'250px', maxWidth:'250px',display:'flex' ,msFlexDirection:'row'}} src={imagen} key={key}alt="" /></div>
                                        );
                                    })}
                                </div>
                                    <input type="file" name='data' className="mt-3" onChange={handleFileChange}/>
                                    <div className="row"><button onClick={handleButtonClick} className="btn btn-success col-md-6 mt-3">Subir Imagenes</button></div>
                                </Accordion.Body>
                            </Accordion.Item>
                        </Accordion>
                    </div>
                    <div className="row">
                        <Accordion className="p-2 col-md-11 ">
                            <Accordion.Item eventKey="0">
                                <Accordion.Header className="fw-bold"><BsFillCameraVideoFill className="me-2"/>Añadir Video</Accordion.Header>
                                <Accordion.Body className="acordeones">
                                <div>

                                    <div className="row"></div>

                                    <input
                                        ref={inputRef} 
                                        type="file"
                                        onChange={handleFileChange}
                                        multiple
                                    />
                                    
                                </div>
                                </Accordion.Body>
                            </Accordion.Item>
                        </Accordion>
                    </div>
                    <div className="row">
                        <Accordion className="p-2 col-md-11 ">
                            <Accordion.Item eventKey="0">
                                <Accordion.Header className="fw-bold"><MdOutlineAttachFile className="me-2"/>Archivos Adjuntos</Accordion.Header>
                                <Accordion.Body className="acordeones">
                                    <input type="file"/>
                                </Accordion.Body>
                            </Accordion.Item>
                        </Accordion>
                    </div>
                    
            </div>}
        </>
    );
}

export default FormNota;
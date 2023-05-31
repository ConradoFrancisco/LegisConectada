<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ImagesModel;
use App\Models\NoticiasParlamentariasModel;
use CodeIgniter\API\ResponseTrait;

class ImagesController extends BaseController
{
    protected $load;
    use ResponseTrait;
    
    public function insertImage(){
        $flag = $this->request->getPost('flag');
        $id = 0;

        if($flag == "0"){
            $data = $this->request->getFile('data');
            $titulo = $this->request->getPost('titulo');
            $cuerpo = $this->request->getPost('cuerpo');
            $legislatura = $this->request->getPost('legislatura');
            $tematica = $this->request->getPost('tematica');
            $pais = $this->request->getPost('pais');
            $resumen = $this->request->getPost('resumen');
            $autor = $this->request->getPost('autor');
            $db = db_connect();
            $nombre_archivo = $data->getRandomName();
            $data->move('./uploads/', $nombre_archivo);
            $url_imagen = base_url('uploads/' . $nombre_archivo);
            
            if($db->query("INSERT INTO noticiasparlamentarias (titulo_noticia,Portada_noticia,Noticia_completa,organismo,Pais,Tematica,resumen_noticia,autor_noticia) VALUES (?,?,?,?,?,?,?,?)",[$titulo,$url_imagen,$cuerpo,$legislatura,$pais,$tematica,$resumen,$autor])){
                $id = $db->insertID(); 
                return $this->response->setJSON([
                    'img' => $data,
                    'titulo' => $titulo,
                    'cuerpo' => $cuerpo,
                    '$legislatura' => $legislatura,
                    'tematica' => $tematica,
                    'pais' => $pais,
                    'resumen' => $resumen,
                    'autor' => $autor,
                    'flag' => $flag,
                    "id" => $id
                
                ]);
            }else{
                return $this->response->setJSON([
                    'success' => false,
                    'error' => 'error al ingresar los datos'
                ]);
            }
        }else{
                $data = $this->request->getFile('data');
                $id = $this->request->getPost('id');
                $nombre_archivo = $data->getRandomName();
                $data->move('./uploads/', $nombre_archivo);
                $url_imagen = base_url('uploads/' . $nombre_archivo);
                db_connect()->query("INSERT INTO imagenes_noticia(url_imagen_noticia,id_noticia) VALUES (?,?)",[$url_imagen,$id]);
                return $this->response->setJSON([
                    'id' => $id,
                    'mensaje' => 'el id es: ' . $id,
                ]);
        }
        

        
        /* if ($data !== null && $data->isValid()) {
            $nombre_archivo = $data->getRandomName();
            $data->move('./uploads/', $nombre_archivo);
    
            // Guardar la URL en la base de datos
            $url_imagen = base_url('uploads/' . $nombre_archivo);
            if($db->query("INSERT INTO images (url_imagen) VALUES ('$url_imagen')")){
                $id = $db->insertID();
                if($db->query("INSERT INTO noticiasparlamentarias (titulo_noticia,Noticia_completa,organismo,Pais,Tematica,imagen,resumen_noticia) VALUES ('$titulo','$cuerpo',$legislatura,$pais,$tematica,$id,$resumen)")){
                    $mensaje = 'toda la data ingresada correctamente';

                }else{
                    $mensaje = 'error en la noticiaparlamentaria';
                }
                
                return $this->response->setJSON([
                    'success' => true,
                    'url_imagen' => $url_imagen,
                    'mensaje' => 'imagen Subida a la base de datos exitosamente',
                    'mensaje2'
                ]);
            

            }else{ 
                return $this->response->setJSON([
                    'success' => false,
                    'error' => 'Error al introducir imagen en la base de datos'
                ]);
            }
        } else {
            return $this->response->setJSON([
                'success' => false,
                'error' => 'No se ha proporcionado una imagen válida',
            ]);
        } */
    }
}




?>
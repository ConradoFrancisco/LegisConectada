<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\NoticiasParlamentariasModel;
use CodeIgniter\API\ResponseTrait;

class NoticiasParlamentarias extends BaseController
{
    use ResponseTrait;
    

    public function index()
    {
        $db = db_connect();
        $array = [];
        $imagenes = [];
        $ids = $db->query('select (id_noticia) from NoticiasParlamentarias')->getResultArray();
        for($x = 0 ; $x < count($ids); $x++){
            array_push($array,$db->query('select * from NoticiasParlamentarias where id_noticia =?',[$ids[$x]])->getResultArray());
            array_push($imagenes,$db->query('select * from imagenes_noticia where id_noticia = ?',[$ids[$x]])->getResultArray());
        }  
        return $this->response->setJSON([
            'imagenes' => $imagenes,
            'noticias' => $array
        ]);
    }


    public function listarNoticias(){
        if($data = db_connect()->query('SELECT np.id_noticia,np.fecha, np.Portada_noticia, np.titulo_noticia, np.resumen_noticia, np.Noticia_completa, p.Nombre_pais, t.nombre_tematica, o.nombre_organismo FROM noticiasparlamentarias AS np JOIN paises AS p ON np.Pais = p.id_pais JOIN tematicas AS t ON np.Tematica = t.id_tematica JOIN organismos AS o ON np.organismo = o.id_organismo  where noticia_publicada = "si" and organismo = ?',[2])->getResultArray()){
            return $this->response->setJSON([
                'success' => true,
                'msj' => 'datos conseguidos correctamente not parl',
                'datos' => $data,
            ]);
        }else{
            return $this->response->setJSON([
                'success' => false,
                'msj' => 'Datos no conseguidos'
            ]);
        }

    }
    public function listarNoticiasParl(){
        if($data = db_connect()->query('SELECT np.id_noticia,np.fecha, np.Portada_noticia, np.titulo_noticia, np.resumen_noticia, np.Noticia_completa, p.Nombre_pais, t.nombre_tematica, o.nombre_organismo FROM noticiasparlamentarias AS np JOIN paises AS p ON np.Pais = p.id_pais JOIN tematicas AS t ON np.Tematica = t.id_tematica JOIN organismos AS o ON np.organismo = o.id_organismo  where noticia_publicada = "si" and organismo != ?',[2])->getResultArray()){
            return $this->response->setJSON([
                'success' => true,
                'msj' => 'datos conseguidos correctamente parl',
                'datos' => $data,
            ]);
        }else{
            return $this->response->setJSON([
                'success' => false,
                'msj' => 'Datos no conseguidos'
            ]);
        }

    }

    public function listarNoticiasCompletas(){
        if($data = db_connect()->query('SELECT np.id_noticia,np.fecha, np.Portada_noticia, np.titulo_noticia, np.resumen_noticia, np.Noticia_completa, p.Nombre_pais, t.nombre_tematica, o.nombre_organismo, np.Noticia_publicada, np.autor_noticia FROM noticiasparlamentarias AS np JOIN paises AS p ON np.Pais = p.id_pais JOIN tematicas AS t ON np.Tematica = t.id_tematica JOIN organismos AS o ON np.organismo = o.id_organismo')->getResultArray()){
            return $this->response->setJSON([
                'success' => true,
                'msj' => 'datos conseguidos correctamente',
                'datos' => $data,
            ]);
        }else{
            return $this->response->setJSON([
                'success' => false,
                'msj' => 'Datos no conseguidos'
            ]);
        }

    }
    public function bringNote($id = null)
    {
        
        /* $model = new NoticiasParlamentariasModel();
        $data = $model->find(['id' => $id]);
        return $this->respond($data); */
    }

    public function joins($id = null){
        
        $id = intval($id);
        
        $db = db_connect();
        $id = intval($id);
            $data = $db->query("SELECT o.nombre_organismo, o.logo_organismo, o.pagina_organismo, o.mail_organismo, o.telefono_organismo, o.direccion_organismo, n.imagen_src, n.imagen_src1, n.imagen_src2, n.imagen_src3, n.titulo_noticia, n.Noticia_completa, n.fecha, n.Tematica FROM organismos AS o JOIN noticiasparlamentarias AS n ON o.id_organismo = n.organismo WHERE id_noticia = $id")->getResultArray();
        return $this->respond($data);
    }

    public function InsertarNoticia(){
        $titulo = $this->request->getPost('titulo');
        $cuerpo = $this->request->getPost('cuerpo');
        $legislatura = $this->request->getPost('legislatura');
        $tematica = $this->request->getPost('tematica');
        $pais = $this->request->getPost('pais');
        $autor = $this->request->getPost('autor');


        if(db_connect()->query("INSERT INTO noticiasparlamentarias (titulo_noticia,Noticia_completa,organismo,Pais,Tematica,autor_noticia) VALUES ('$titulo','$cuerpo',$legislatura,$pais,$tematica,$autor)")){
            return $this->response->setJSON([
                'titulo' => $titulo,
                'pais' => $pais,
                'legis' => $legislatura,
                'tematica' => $tematica,
                'autor' => $autor,
                'success' => 'todo ok'
            ]);
            
        }else{
            return $this->response->setJSON([
                'success' => false,
                'error' => 'hubo un error en la conexion a la DB',
            ]);
        }
        
    }

    public function getOrganismos() {
        $db = db_connect();
        $data = $db->query('Select nombre_organismo from organismos order by nombre_organismo')->getResultArray();
        $data2 = $db->query('Select * from paises')->getResultArray();
        $data3 = $db->query("select Nombre_tematica from Tematicas")->getResultArray();
        return $this->respond(['data' => $data, 'data2' => $data2, 'data3' => $data3]);
    }
    
    public function update($id = null){
        $db = db_connect();
        if($db->query("update noticiasparlamentarias set noticia_publicada = 'si' where id_noticia = ?",[$id])){
            return $this->response->setJSON(['joya' => 'todo ok']);
        }else{
            return $this->response->setJSON(['se pudrio todo' => 'todo mal']);
        }
    }

    public function updates($id = null){
        $db = db_connect();
        if($db->query("update noticiasparlamentarias set noticia_publicada = 'no' where id_noticia = ?",[$id])){
            return $this->response->setJSON(['joya' => 'todo ok']);
        }else{
            return $this->response->setJSON(['se pudrio todo' => 'todo mal']);
        }
    }
    
}

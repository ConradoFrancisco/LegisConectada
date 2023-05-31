<?php

namespace App\Models;

use CodeIgniter\Model;

class NoticiasParlamentariasModel extends Model
{
    public function __construct(){
        parent::__construct();
        $this->obtenerids();
    }

    public function obtenerids(){
        $noticias = $this->findAll();
        $ids = array_column($noticias,'id_noticia');
        return $ids;
    }

    protected $DBGroup          = 'default';
    protected $table            = 'noticiasparlamentarias';
    protected $primaryKey       = 'id_noticia';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_noticia','titulo_noticia','resumen_noticia','Noticia_completa','fecha','provincia','Tematica','organismo','Pais','autor_noticia'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];


}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\OrganismosModel;
use CodeIgniter\API\ResponseTrait;

class Organismos extends BaseController{
    use ResponseTrait;

    public function getOrganismos() {
        $db = db_connect();
        $data = $db->query('Select nombre_organismo from organismos')->getResultArray();
        $data2 = $db->query('Select Nombre_pais from paises')->getResultArray();
        $data3 = $db->query("select Nombre_tematica from Tematicas")->getResultArray();
        return $this->respond(['data' => $data, 'data2' => $data2, 'data3' => $data3]);
    }
}

?>
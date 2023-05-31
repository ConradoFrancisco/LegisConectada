<?php

namespace App\Controllers;
use App\Models\FaqModel;
use CodeIgniter\API\ResponseTrait;

class Home extends BaseController
{
    use ResponseTrait;
    public function index()
    {
        $model = new FaqModel();
        $data = $model->findAll();
        var_dump($data);
    }
    public function getOrganismos() {
        $db = db_connect();
        $data = $db->query('Select * from organismos');
        var_dump($data);
    }
}

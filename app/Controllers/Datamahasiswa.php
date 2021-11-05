<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\Datamhsku;
use CodeIgniter\HTTP\RequestTrait;

class Datamahasiswa extends ResourceController
{

    use RequestTrait;
    use ResponseTrait;


    public function index()
    {

        $model = new Datamhsku();
        $data = $model->findAll();
        return $this->respond($data, 200);
    }

    public function tampil($id = null)
    {

        $model = new Datamhsku();
        $data = $model->getWhere(['id' => $id])->getResult();

        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('Data tidak ditemukan' . $id);
        }
    }

    public function tambahdata()
    {

        $model = new Datamhsku();
        $data = $this->request->getJSON();

        $model->insert($data);

        return $this->respondCreated($data);
    }

    public function ubahdata($id = null)
    {
        $model = new Datamhsku();
        $id = $this->request->getVar('id');
        $data = $this->request->getJSON();
        $model->update($id, $data);

        return $this->respondUpdated($data);
    }


    public function hapusdata($id = null)
    {

        $model = new Datamhsku();
        $data = $model->delete($id);

        return $this->respondDeleted($data);
    }
}

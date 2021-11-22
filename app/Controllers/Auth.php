<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\AuthM;
use App\Models\MahasiswaModel;
use CodeIgniter\HTTP\RequestTrait;

class Auth extends ResourceController
{

    use RequestTrait;
    use ResponseTrait;



    public function regis()
    {
        $model = new AuthM();
        $data = $this->request->getJSON();
        $data->password = password_hash($data->password, PASSWORD_DEFAULT);
        $hasil = $model->insert($data);
        return $this->respondCreated($hasil);
    }

    public function login()
    {
        $model = new AuthM();
        $mahasiswaModel = new MahasiswaModel();
        $data = $this->request->getJSON();
        $user = $model->where('username', $data->username)->get()->getRowObject();
        if (password_verify($data->password, $user->password)) {
            $mahasiswa = $mahasiswaModel->where('userid', $user->id)->get()->getRowObject();
            $user->nama = $mahasiswa->nama;
            $user->email = $mahasiswa->email;
            $user->isLogin = true;
            session()->set($user);
        }
        return redirect()->to(base_url('admin/home'));
    }
}

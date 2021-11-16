<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\AuthM;
use CodeIgniter\HTTP\RequestTrait;

class Auth extends ResourceController
{

    use RequestTrait;
    use ResponseTrait;



    public function regis()
    {
        $model = new AuthM();
        $data = [
            "username" => $this->request->getVar("username"),
            "password" => password_hash($this->request->getVar("password"), PASSWORD_DEFAULT)
        ];
        $data = $this->request->getJSON();
        $hasil = $model->insert($data);
        var_dump($hasil);
        // $this->respondCreated($data);
    }

    public function login()
    {
        $rules = [
            'username' => 'required|',
            'password' => 'required|min_length[6]'
        ];
        if (!$this->validate($rules)) return $this->fail($this->validator->getErrors());
        $model = new AuthM();
        $user = $model->where("username", $this->request->getVar('username'))->first();
        if (!$user) return $this->failNotFound('Username Not Found');

        $verify = password_verify($this->request->getVar('password'), $user['password']);
        if (!$verify) return $this->fail('Wrong Password');

        return $this->respond();
    }
}

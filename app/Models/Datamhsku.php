<?php

namespace App\Models;

use CodeIgniter\Model;

class Datamhsku extends Model
{

    protected $table = 'databaru';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'npm', 'nama', 'jurusan', 'alamat'];
}

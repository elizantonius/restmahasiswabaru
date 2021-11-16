<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthM extends Model
{
    protected $table = "users";
    protected $primaryKey = "id";
    protected $useTimestamps = true;
    protected $allowedFields = ['id', 'username', 'password'];
}

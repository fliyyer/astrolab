<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'password', 'country', 'address', 'kecamatan', 'province', 'postalCode', 'phone', 'created_at', 'updated_at'];
}

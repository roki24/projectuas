<?php
namespace App\Models;
use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table = 'auth';
    protected $primaryKey = 'id_user';
    protected $allowedFields = [
        'nama', 'username', 'password', 'email', 'no_hp', 'alamat', 'role', 'created_at', 'updated_at'
    ];
}

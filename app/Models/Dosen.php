<?php

namespace App\Models;

use CodeIgniter\Model;

class Dosen extends Model
{
    protected $table = 'dosen';
    protected $primaryKey = 'id';
    protected $returnType = 'array';

    protected $allowedFields = [
        'nama',
        'nidn',
        'nrp',
        'prodi',
        'no_hp',
        'email'
    ];
}
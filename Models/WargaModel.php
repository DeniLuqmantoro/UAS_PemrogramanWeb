<?php

namespace App\Models;

use CodeIgniter\Model;

class WargaModel extends Model
{
    protected $table			= "warga";
    protected $primaryKey		= "id";
    protected $returnType		= "object";
	protected $useAutoIncrement = true;
    protected $allowedFields 	= ['id', 'nik', 'nama', 'kelamin', 'alamat', 'no_rumah', 'status'];
}
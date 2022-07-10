<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanModel extends Model
{
    protected $table			= "laporan";
    protected $primaryKey		= "nik";
    protected $returnType		= "object";
	protected $useAutoIncrement = true;
    protected $allowedFields 	= ['nik', 'nama', 'status', 'jumlah'];
	
}
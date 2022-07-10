<?php

namespace App\Database\Seeds;
 
use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;
 
class WargaSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
				'nik'			=>  '312010078',
				'nama'          =>  'Anton',
				'kelamin'		=>  'P',
				'alamat'		=>  'Jl. Mawar Putih No. 190, Waru Sidoarjo',
				'no_rumah'		=>	'45',
			],	
		];
		$this->db->table('warga')->insertBatch($data);
	}
}
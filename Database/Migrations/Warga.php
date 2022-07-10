<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Warga extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'nik'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '50'
			],
			'nama'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '200'
			],
			'kelamin' => [
				'type'           => 'ENUM',
				'constraint'     => 'L','P'
			],
			'alamat'      => [
				'type'           => 'TINYTEXT',
			],
			'no_rumah'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '10'
		]);

		$this->forge->addKey('id', TRUE);

		$this->forge->createTable('warga', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('warga');
    }
}
<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PesertaVideografi extends Migration
{
	public function up()
	{
		//Tabel Peserta Videografi
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'auto_increment' => 'true'
			],
			'id_ketua' => [
				'type' => 'INT'
			],
			'nama' => [
				'type' => 'VARCHAR',
				'default' => NULL,
				'null' => true,
				'constraint' => 128,
			],
			'email' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'asal_daerah' => [
				'type' => 'VARCHAR',
				'default' => NULL,
				'null' => true,
				'constraint' => 255,
			],
			'no_wa' => [
				'type' => 'VARCHAR',
				'default' => NULL,
				'null' => true,
				'constraint' => 20,
			],
			'sosial_media' => [
				'type' => 'VARCHAR',
				'default' => NULL,
				'null' => true,
				'constraint' => 128,
			]
		]);

		$this->forge->addPrimaryKey('id');
		$this->forge->addForeignKey('id_ketua', 'users', 'id', 'cascade', 'cascade');
		$this->forge->createTable('peserta_videografi');
	}

	public function down()
	{
		// Drop Tabel Peserta Videografi
		$this->forge->dropTable('peserta_videografi');
	}
}

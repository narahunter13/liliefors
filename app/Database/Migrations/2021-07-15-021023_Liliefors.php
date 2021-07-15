<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pengumuman extends Migration
{
	public function up()
	{
		//Membuat Tabel Pengumuman
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'auto_increment' => true,
			],
			'judul' => [
				'type' => 'VARCHAR',
				'constraint' => 128,
			],
			'konten' => [
				'type' => 'TEXT',
			],
			'last_edited TIMESTAMP DEFAULT CURRENT_TIMESTAMP'
		]);

		$this->forge->addKey('id', true);
		$this->forge->createTable('pengumuman');
	}

	public function down()
	{
		//DROP TABEL PENGUMUMAN
		$this->forge->dropTable('pengumuman');
	}
}

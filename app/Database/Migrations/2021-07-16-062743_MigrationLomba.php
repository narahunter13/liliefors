<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MigrationLomba extends Migration
{
	public function up()
	{
		//Tabel Lomba
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'auto_increment' => true
			],
			'lomba' => [
				'type' => 'INT',
				'constraint' => 1
			],
			'id_peserta' => [
				'type' => 'INT'
			],
			'jumlah_dibayar' => [
				'type' => 'INT'
			],
			'status_pembayaran' => [
				'type' => 'INT',
				'constraint' => 1
			]
		]);

		$this->forge->addPrimaryKey('id');
		$this->forge->addForeignKey('id_peserta', 'users', 'id', 'cascade', 'cascade');
		$this->forge->createTable('peserta_lomba');
	}

	public function down()
	{
		//Drop Tabel Lomba
		$this->forge->dropTable('peserta_lomba');
	}
}

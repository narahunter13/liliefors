<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class KodeReferal extends Migration
{
	public function up()
	{
		//Tabel Kode Referal
		$this->forge->addField([
			'kode_referal' => [
				'type' => 'CHAR',
				'constraint' => 10
			],
			'sisa_penggunaan' => [
				'type' => 'INT',
				'constraint' => 1,
				'default' => 1
			],
			'pemilik' => [
				'type' => 'INT'
			],
			'penerima' => [
				'type' => 'INT',
				'NULL' => true,
				'default' => NULL
			],
		]);

		$this->forge->addPrimaryKey('kode_referal');
		$this->forge->addForeignKey('pemilik', 'users', 'id', 'cascade', 'cascade');
		$this->forge->addForeignKey('penerima', 'users', 'id', 'cascade', 'cascade');
		$this->forge->createTable('kode_referal');
	}

	public function down()
	{
		//Drop Tabel kode_referal
		$this->forge->dropTable('kode_referal');
	}
}

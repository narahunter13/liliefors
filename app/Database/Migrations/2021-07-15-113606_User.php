<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
	public function up()
	{
		//Tabel User
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'auto_increment' => true,
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
			'password' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'asal_daerah' => [
				'type' => 'VARCHAR',
				'default' => NULL,
				'null' => true,
				'constraint' => 255,
			],
			'jenjang' => [
				'type' => 'INT',
				'default' => NULL,
				'null' => true,
				'constraint' => 1,
			],
			'nama_instansi' => [
				'type' => 'VARCHAR',
				'default' => NULL,
				'null' => true,
				'constraint' => 128,
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
			],
			'role' => [
				'type' => 'INT',
				'default' => 2,
				'constraint' => 1,
			]
		]);

		$this->forge->addPrimaryKey('id');
		$this->forge->createTable('users');
	}

	public function down()
	{
		//Drop Tabel Users
		$this->forge->dropTable('users');
	}
}

<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SeederLomba extends Seeder
{
	public function run()
	{
		$data = [
			'lomba' => 1,
			'id_peserta' => 1,
			'jumlah_dibayar' => 35000,
			'status_pembayaran' => 0
		];

		$this->db->table('peserta_lomba')->insert($data);
	}
}

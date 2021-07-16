<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Referal extends Seeder
{
	public function run()
	{
		$data1 = [
			'kode_referal' => '3ErtY',
			'pemilik' => 1,
			'penerima' => 2
		];

		$this->db->table('kode_referal')->insert($data1);
	}
}

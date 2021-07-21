<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Users extends Seeder
{
	public function run()
	{
		$data1 =[
			'email' => "@-",
			'password' => password_hash("xLiliexForsx", PASSWORD_BCRYPT)
		];
		
		$this->db->table('users')
				 ->insert($data1);
	}
}

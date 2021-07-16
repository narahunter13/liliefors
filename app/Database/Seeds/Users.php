<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Users extends Seeder
{
	public function run()
	{
		$data1 =[
			'email' => "221810473@stis.ac.id",
			'password' => password_hash("221810473", PASSWORD_BCRYPT)
		];
		$data2 =[
			'email' => "221810573@stis.ac.id",
			'password' => password_hash("221810573", PASSWORD_BCRYPT)
		];
		
		$this->db->table('users')
				 ->insert($data1);
		$this->db->table('users')
				 ->insert($data2);
	}
}

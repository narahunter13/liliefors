<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_users extends Model
{
	public function get_email()
	{
		return $this->db->table('users')
					->select(['id', 'email'])
					->get()
					->getResultArray();
	}

	public function register($data)
	{
		return $this->db->table('users')
						->insert($data);
	}

	public function find_user($email)
	{
		return $this->db->table('users')
						->getWhere(['email' => $email])
						->getFirstRow();
	}
}
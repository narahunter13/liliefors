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

	public function find_email($params)
	{
		return $this->db->table('users')
						->getWhere(['id' => $params])
						->getFirstRow('array');
	}

	public function update_data($id, $data)
	{
		return $this->db->table('users')
						->update($data, ['id' => $id]);
	}

	public function get_peserta_per_jenjang($jenjang)
	{
		return $this->db->table('users')
						->where('jenjang', $jenjang)
						->where('liliefors', 1)
						->countAllResults();
	}
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_pengumuman extends Model
{
	protected $table = 'pengumuman';

	public function create($params)
	{
		return $this->db->table($this->table)
			->insert($params);
	}

	public function index($id = NULL)
	{
		if ($id == NULL) {
			return $this->db->table($this->table)
				->get()
				->getResultArray();
		} else {
			return $this->db->table($this->table)
				->getWhere(['id' => $id])
				->getResultArray()[0];
		}
	}

	public function ubah($id, $data)
	{
		return $this->db->table($this->table)
			->update($data, ['id' => $id]);
	}

	public function hapus($id)
	{
		return $this->db->table($this->table)
					->delete(['id' => $id]);
	}
}

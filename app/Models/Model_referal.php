<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_referal extends Model
{
	private $kode = "kode_referal";
	private $users = "users";

	public function index()
	{
		$sql = "SELECT kode_referal, pemilik, penggunaan FROM kode_referal";
		return $this->db->query($sql, [
			'users' => $this->users,
			'kode_referal' => $this->kode
		])->getResultArray();
	}

	public function is_valid($code)
	{
		return $this->db->table($this->kode)
						->where('kode_referal', $code)
						->countAllResults();
	}

	public function store($data)
	{
		return $this->db->table($this->kode)
			->insert($data);
	}

	private function last_used($code)
	{
		return $this->db->table('kode_referal')
						->select('penggunaan')
						->get()
						->getFirstRow('array');
	}

	public function update_referal($code)
	{
		return $this->db->table('kode_referal')
						->update(['penggunaan' => $this->last_used($code)['penggunaan'] + 1], ['kode_referal' => $code]);
	}
}

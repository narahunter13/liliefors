<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_referal extends Model
{
	private $kode = "kode_referal";
	private $users = "users";

	public function index()
	{
		$sql = "SELECT kode_referal, (SELECT email FROM users WHERE id = kode_referal.pemilik) as email_pemilik, (SELECT email FROM users WHERE id = kode_referal.penerima) as email_penerima FROM kode_referal";
		return $this->db->query($sql, [
			'users' => $this->users,
			'kode_referal' => $this->kode
		])->getResultArray();
	}

	public function is_valid($code)
	{
		return $this->db->table($this->kode)
						->where('kode_referal', $code)
						->where('sisa_penggunaan', 1)
						->countAllResults();
	}

	public function store($data)
	{
		return $this->db->table($this->kode)
			->insert($data);
	}

	public function update_referal($code, $data)
	{
		return $this->db->table('kode_referal')
						->update($data, ['kode_referal' => $code, 'sisa_penggunaan' => 0]);
	}
}

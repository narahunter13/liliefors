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
		return $this->db->query($sql,[
			'users' => $this->users,
			'kode_referal' => $this->kode
		])->getResultArray();
	}

	public function store($data)
	{
		return $this->db->table($this->kode)
					->insert($data);
	}
}

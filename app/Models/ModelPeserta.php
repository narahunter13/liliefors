<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPeserta extends Model
{
	public function index()
	{
		$sql = "SELECT u.nama, u.email, l.id, l.lomba, l.jumlah_dibayar, l.status_pembayaran FROM users as u JOIN peserta_lomba as l ON u.id = l.id_peserta";
		return $this->db->query($sql)->getResultArray();
	}

	public function konfirmasi($id) {
		return $this->db->table('peserta_lomba')
						->update(['status_pembayaran' => 1], ['id' => $id]);
	}
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPeserta extends Model
{
	public function get_status_pengumpulan($id, $lomba)
	{
		return $this->db->table('peserta_lomba')
						->select('status_pengumpulan')
						->getWhere(['id_peserta' => $id, 'lomba' => $lomba])
						->getFirstRow('array');
	}

	public function ubah_status_pengumpulan($id, $lomba)
	{
		return $this->db->table('peserta_lomba')
						->update(['status_pengumpulan' => 1], [
							'id_peserta' => $id,
							'lomba' => $lomba
						]);
	}

	public function get_status_pembayaran($id, $lomba)
	{
		return $this->db->table('peserta_lomba')
						->select(['status_pembayaran', 'jumlah_dibayar'])
						->where('lomba', $lomba)
						->where('id_peserta', $id)
						->get()
						->getFirstRow('array');
	}

	public function cek_daftar($id_peserta, $id_lomba)
	{
		return $this->db->table('peserta_lomba')
						->where('id_peserta', $id_peserta)
						->where('lomba', $id_lomba)
						->countAllResults();
	}

	public function index()
	{
		$sql = "SELECT u.nama, u.email, u.no_wa, l.id, l.lomba, l.jumlah_dibayar, l.kode_referal, l.status_pembayaran FROM users as u JOIN peserta_lomba as l ON u.id = l.id_peserta";
		return $this->db->query($sql)->getResultArray();
	}

	public function konfirmasi($id) {
		helper('custom_helper');
		$peserta = $this->db->table('peserta_lomba')->select(['id_peserta', 'lomba'])->getWhere(['id' => $id])->getFirstRow('array');

		if($peserta['lomba'] > 1) {
			$this->db->table('users')->update([lomba_mapping2($peserta['lomba']) => 1, 'liliefors' => 1]);
		} else {
			$this->db->table('users')->update([lomba_mapping2($peserta['lomba']) => 1]);
		}

		return $this->db->table('peserta_lomba')
						->update(['status_pembayaran' => 1], ['id' => $id]);
	}

	public function tambah_peserta($data)
	{
		return $this->db->table('peserta_lomba')
						->insert($data);
	}
}

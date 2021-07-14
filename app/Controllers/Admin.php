<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
	public function index()
	{
		//
		$data['title'] = 'Tentang Kami';
		return view('admin/index', $data);
	}

	public function pengumuman()
	{
		//
		$data['title'] = 'Pengumuman';
		return view('admin/pengumuman', $data);
	}

	public function kode_referal()
	{
		//
		$data['title'] = 'Kode Referal';
		return view('admin/kode_referal', $data);
	}

	public function konfirmasi_pembayaran()
	{
		//
		$data['title'] = 'Konfirmasi Pembayaran';
		return view('admin/konfirmasi_pembayaran', $data);
	}
}
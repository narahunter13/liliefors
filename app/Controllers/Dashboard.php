<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
	public function index()
	{
		//
		$data['title'] = 'Tentang Kami';
		return view('dashboard/index', $data);
	}

	public function pengumuman()
	{
		//
		$data['title'] = 'Pengumuman';
		return view('dashboard/pengumuman', $data);
	}

	public function linimasa()
	{
		//
		$data['title'] = 'Linimasa';
		return view('dashboard/linimasa', $data);
	}

	public function sunting()
	{
		//
		$data['title'] = 'Sunting Profil';
		return view('dashboard/sunting', $data);
	}
}

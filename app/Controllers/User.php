<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class User extends BaseController
{
	public function index()
	{
		//
		$data['title'] = 'Tentang Kami';
		return view('user/index', $data);
	}

	public function pengumuman()
	{
		//
		$data['title'] = 'Pengumuman';
		return view('user/pengumuman', $data);
	}

	public function linimasa()
	{
		//
		$data['title'] = 'Linimasa';
		return view('user/linimasa', $data);
	}

	public function sunting()
	{
		//
		$data['title'] = 'Sunting Profil';
		return view('user/sunting', $data);
	}
}

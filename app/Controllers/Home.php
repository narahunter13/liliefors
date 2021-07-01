<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$title = "Liliefors 2021";
		$data = [
			'title' => $title
		];
		return view('_layout', $data);
	}
}

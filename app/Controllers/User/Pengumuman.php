<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

class Pengumuman extends BaseController {

    private $active = "Pengumuman";

    public function index()
    {
        $data['active'] = $this->active;
        $data['title'] = 'Pengumuman';
		return view('user/pengumuman/index', $data);
    }

}
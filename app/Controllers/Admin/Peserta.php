<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Peserta extends BaseController {

    private $active = "Peserta";

    public function index()
    {
        $data['active'] = $this->active;
        $data['title'] = 'Peserta';
		return view('admin/peserta/index', $data);
    }

}
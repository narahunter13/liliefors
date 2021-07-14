<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Pengumuman extends BaseController {
    
    private $active = "Pengumuman";

    public function index()
    {
        $data['active'] = $this->active;
        $data['title'] = 'Pengumuman';
		return view('admin/pengumuman/index', $data);
    }

    public function new()
    {
        $data['active'] = $this->active;
        $data['title'] = 'Buat Pengumuman';
		return view('admin/pengumuman/new', $data);
    }

}
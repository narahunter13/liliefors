<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\Model_pengumuman;

class Pengumuman extends BaseController {

    private $active = "Pengumuman";
    private $m_pengumuman;

    public function __construct()
    {
        $this->m_pengumuman = new Model_pengumuman();
    }

    public function index()
    {
        $data['pengumuman'] = $this->m_pengumuman->index();
        $data['active'] = $this->active;
        $data['title'] = 'Pengumuman';
		return view('user/pengumuman/index', $data);
    }

}
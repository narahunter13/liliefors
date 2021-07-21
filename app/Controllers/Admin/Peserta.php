<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ModelPeserta;

class Peserta extends BaseController {

    private $active = "Peserta";
    private $m_peserta;

    public function __construct()
    {
        $this->m_peserta = new ModelPeserta();
    }

    public function index()
    {
        $data['peserta'] = $this->m_peserta->index();
        $data['active'] = $this->active;
        $data['title'] = 'Peserta';
		return view('admin/peserta/index', $data);
    }

    public function ubah()
    {
        $id = $this->request->getPost('id');

        if($this->m_peserta->konfirmasi($id)) {
            return redirect()->to(base_url('admin/peserta'));
        }
    }

}
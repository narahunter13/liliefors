<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Model_referal;
use App\Models\ModelPeserta;

class Peserta extends BaseController {

    private $active = "Peserta";
    private $m_peserta;
    private $m_referal;

    public function __construct()
    {
        $this->m_peserta = new ModelPeserta();
        $this->m_referal = new Model_referal();
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
        $kode_referal = $this->request->getPost('kode_referal');

        if($this->m_peserta->konfirmasi($id)) {
            if(isset($kode_referal) && $kode_referal != "") {
                $this->m_referal->update_referal($kode_referal);
            }
            return redirect()->to(base_url('admin/peserta'));
        }
    }

}
<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Model_referal;
use App\Models\Model_users;

class Referal extends BaseController {
    
    private $active = "Referal";
    private $m_referal;
    private $m_users;
    private $session;

    public function __construct()
    {
        $this->m_referal = new Model_referal();
        $this->m_users = new Model_users();
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        $data['active'] = $this->active;
        $data['title'] = 'Kode Referal';
        $data['emails'] = $this->m_users->get_email();
        $data['kode_referal'] = $this->m_referal->index();
		return view('admin/referal/index', $data);
    }

    public function store()
    {
        $email_pemilik = $this->request->getPost('email-pemilik');
        $kode = $this->request->getPost('kode');

        $data = [
            'kode_referal' => $kode,
            'pemilik' => $email_pemilik
        ];

        if($this->m_referal->store($data)) {
            $this->session->setFlashdata('success', "Kode Referal Berhasil Dibuat");
            return redirect()->to(base_url('admin/referal'));
        }
    }

}
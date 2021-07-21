<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\ModelPeserta;

class Unggah_Fotografi extends BaseController {

    private $session;
    private $active = "fotografi";
    private $m_peserta;
    private $EXT_FILE = "zip";
    private $PATH_FILE = "3-%^&";
    private $PREFIX = "Fotografi_";

    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->m_peserta = new ModelPeserta();
    }

    public function index()
    {
        $data['status'] = $this->m_peserta->get_status_pengumpulan($this->session->get('id'), 3);
        $data['active'] = $this->active;
        $data['title'] = 'Unggah Karya Fotografi';
		return view('user/' . $this->active . '/index', $data);
    }

    public function send()
    {
        $validate = $this->validate([
            'karya' => 'uploaded[karya]|ext_in[karya,' . $this->EXT_FILE . ']'
        ]);

        if($validate) {
            $file = $this->request->getFile('karya');
            $id = $this->session->get('id');

            $nama_file = $this->PREFIX . $this->session->get('nama') . "." . $this->EXT_FILE;
            $file->move(ROOTPATH . "public/lie%^&L^^/" . $this->PATH_FILE, $nama_file, true);

            if($this->m_peserta->ubah_status_pengumpulan($id, 3)) {
                $this->m_peserta->ubah_status_pengumpulan($id, 3);
                return redirect()->to(base_url('user/unggah-' . $this->active));
            } else {
                return redirect()->to(base_url('user/unggah-' . $this->active))->with('error', 'Kesalahan mengirim file!');
            }
        } else {
            return redirect()->to(base_url('user/unggah-' . $this->active))->with('error', 'Pastikan format file adalah ' . $this->EXT_FILE);
        }
    }

}
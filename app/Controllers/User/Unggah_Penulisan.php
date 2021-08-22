<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\ModelPeserta;

class Unggah_Penulisan extends BaseController {

    private $session;
    private $active = "penulisan";
    private $m_peserta;
    private $EXT_FILE = "zip,rar,pdf";
    private $PATH_FILE = "2-%^&";
    private $PREFIX = "Penulisan_";

    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->m_peserta = new ModelPeserta();
    }

    public function index()
    {
        $data['status'] = $this->m_peserta->get_status_pengumpulan($this->session->get('id'), 2);
        $data['active'] = $this->active;
        $data['title'] = 'Unggah Karya Penulisan';
		return view('user/' . $this->active . '/index', $data);
    }

    public function send()
    {
        $validate = true;
        // $validate = $this->validate([
        //     'karya' => 'uploaded[karya]|ext_in[karya,' . $this->EXT_FILE . ']'
        // ]);

        if($validate) {
            $file = $this->request->getFile('karya');
            $id = $this->session->get('id');

            $nama_file = $this->PREFIX . $this->session->get('nama') . "." . $file->getExtension();
            $file->move(WRITEPATH . "lie%^&L^^/" . $this->PATH_FILE, $nama_file, true);

            if($this->m_peserta->ubah_status_pengumpulan($id, 2)) {
                $this->m_peserta->ubah_status_pengumpulan($id, 2);
                return redirect()->to(base_url('user/unggah-' . $this->active));
            } else {
                return redirect()->to(base_url('user/unggah-' . $this->active))->with('error', 'Kesalahan mengirim file!');
            }
        } else {
            return redirect()->to(base_url('user/unggah-' . $this->active))->with('error', 'Pastikan format file adalah ' . $this->EXT_FILE);
        }
    }

}
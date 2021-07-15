<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Model_pengumuman;

class Pengumuman extends BaseController
{

    private $active = "Pengumuman";
    private $validation;
    private $model;
    private $session;

    public function __construct()
    {
        date_default_timezone_set("Asia/Bangkok");
        $this->validation = \Config\Services::validation();
        $this->model = new Model_pengumuman();
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        $data['pengumuman'] = $this->model->index();
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

    public function sunting($id)
    {
        $data['pengumuman'] = $this->model->index($id);
        $data['active'] = $this->active;
        $data['title'] = 'Buat Pengumuman';
        return view('admin/pengumuman/edit', $data);
    }

    public function post()
    {
        $this->session = \Config\Services::session();

        $judul = $this->request->getPost('judul');
        $konten = trim($this->request->getPost('isi'));

        $test = [
            'judul' => $judul,
            'konten' => $konten
        ];

        $this->validation->setRules([
            'judul' => 'required|min_length[5]',
            'konten' => 'required|min_length[5]',
        ]);

        if ($this->validation->run($test)) {
            $this->model->create($test);
            $this->session->setFlashdata('success', "Pengumuman Berhasil Dibuat");
            return redirect()->to(base_url('admin/pengumuman'));
        } else {
            $data['active'] = $this->active;
            $data['title'] = 'Buat Pengumuman';
            $this->session->setFlashdata('errors', $this->validation->getErrors());
            return redirect()->back()->withInput();
        }
    }

    public function update()
    {
        $id = $this->request->getPost('id');
        $judul = $this->request->getPost('judul');
        $konten = trim($this->request->getPost('isi'));

        $test = [
            'judul' => $judul,
            'konten' => $konten,
            'last_edited' => date("Y-m-d H:i:s", time())
        ];

        $this->validation->setRules([
            'judul' => 'required|min_length[5]',
            'konten' => 'required|min_length[5]',
        ]);

        if ($this->validation->run($test)) {
            $this->model->ubah($id, $test);
            $this->session->setFlashdata('success', "Pengumuman Berhasil Disunting");
            return redirect()->to(base_url('admin/pengumuman'));
        } else {
            $this->session->setFlashdata('errors', $this->validation->getErrors());
            return redirect()->back()->withInput();
        }
    }

    public function del($id)
    {
        if ($this->model->hapus($id)) {
            $this->session->setFlashdata('success', "Pengumuman Berhasil Dihapus");
            return redirect()->to(base_url('admin/pengumuman'));
        }
    }
}

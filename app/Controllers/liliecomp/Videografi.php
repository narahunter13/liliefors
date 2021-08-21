<?php

namespace App\Controllers\liliecomp;

use App\Controllers\BaseController;
use App\Models\Model_referal;
use App\Models\Model_users;
use App\Models\Model_videografi;
use App\Models\ModelPeserta;

class Videografi extends BaseController
{
    private $validation;
    private $m_referal;
    private $m_users;
    private $m_peserta;
    private $m_videografi;
    private $session;

    private $title = "Videografi";
    private $view_path = "videografi";
    private $kode_lomba = 5;
    private $jumlah_dibayar_umum = 35000;
    private $jumlah_dibayar_sma = 35000;

    private $EXT_FILE = "pdf,PDF";
    private $PREFIX = "Identitas_";
    private $PATH_FILE = "1-iden-%^&";

    public function __construct()
    {
        helper('custom_helper');
        $this->validation = \Config\Services::validation();
        $this->m_referal = new Model_referal();
        $this->m_users = new Model_users();
        $this->m_peserta = new ModelPeserta();
        $this->m_videografi = new Model_videografi();
        $this->session = \Config\Services::session();

        $this->validation->setRules([
            'nama' => 'required|min_length[3]',
            'email' => 'required|valid_email',
            'asal_daerah' => 'required|min_length[5]',
            'jenjang' => 'required',
            'nama_instansi' => 'permit_empty|min_length[5]',
            'no_wa' => 'required|numeric|min_length[8]',
            'sosial_media' => 'required|min_length[5]'
            // 'identitas' => 'ext_in[identitas,' . $this->EXT_FILE . ']'
        ], [
            'nama' => [
                'required' => 'Nama Lengkap harus diisi',
                'min_length' => 'Nama Lengkap minimal 3 karakter'
            ],
            'email' => [
                'required' => 'Email harus diisi',
                'valid_email' => 'Format email salah',
            ],
            'asal_daerah' => [
                'required' => 'Asal Daerah harus diisi',
                'min_length' => 'Asal Daerah kurang tepat'
            ],
            'nama_instansi' => [
                'min_length' => 'Isilah Nama Instansi secara lengkap'
            ],
            'no_wa' => [
                'required' => 'Nomor WA yang Aktif harus diisi',
                'numeric' => 'Nomor WA yang Aktif tidak valid',
                'min_length' => 'Isilah Nomor WA secara lengkap'
            ],
            'sosial_media' => [
                'required' => 'Sosial Media yang aktif harus diisi',
                'min_length' => 'Isilah Sosial Media dengan benar'
            ]
            // 'identitas' => [
            //     'ext_in' => 'Format file tidak sesuai'
            // ]
        ]);
    }

    public function index()
    {
        $data['terbayar'] = $this->m_peserta->get_status_pembayaran($this->session->get('id'), $this->kode_lomba);
        $data['user'] = $this->m_users->find_email($this->session->get('id'));
        $data['terdaftar'] = $this->m_peserta->cek_daftar($this->session->get('id'), $this->kode_lomba);
        $data['title'] = 'Liliecomp | ' . $this->title;
        return view('liliecomp/' . $this->view_path, $data);
    }

    private function is_valid_referal($code = NULL)
    {
        if (!is_null($code)) {
            $count = $this->m_referal->is_valid($code);
        } else {
            return false;
        }

        if ($count == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function daftar()
    {
        $nama_lengkap = $this->request->getPost('nama_lengkap');
        $email = $this->request->getPost('email');
        $asal_daerah = $this->request->getPost('asal_daerah');
        $no_wa = $this->request->getPost('nomor_wa');
        $sosial_media = $this->request->getPost('sosial_media');
        $instansi = $this->request->getPost('instansi');
        $kode_referal = $this->request->getPost('kode_referal');
        $jenjang = $this->request->getPost('jenjang');
        $identitas = $this->request->getFile('identitas');
        $nama_lengkap_2 = $this->request->getPost('nama_lengkap_2');
        $email_2 = $this->request->getPost('email_2');
        $asal_daerah_2 = $this->request->getPost('asal_daerah_2');
        $no_wa_2 = $this->request->getPost('nomor_wa_2');
        $sosial_media_2 = $this->request->getPost('sosial_media_2');
        $nama_lengkap_3 = $this->request->getPost('nama_lengkap_3');
        $email_3 = $this->request->getPost('email_3');
        $asal_daerah_3 = $this->request->getPost('asal_daerah_3');
        $no_wa_3 = $this->request->getPost('nomor_wa_3');
        $sosial_media_3 = $this->request->getPost('sosial_media_3');

        $test = [
            'nama' => $nama_lengkap,
            'email' => $email,
            'asal_daerah' => $asal_daerah,
            'jenjang' => $jenjang,
            'nama_instansi' => $instansi,
            'no_wa' => $no_wa,
            'sosial_media' => $sosial_media
        ];

        $users = $test;

        if ($identitas->getSize() > 0 && $identitas->getTempName() != "") {
            $test['identitas'] = $identitas;
        }

        if ($this->validation->run($test)) {
            $peserta = [
                'lomba' => $this->kode_lomba,
                'id_peserta' => $this->session->get('id'),
                'jumlah_dibayar' => $jenjang == 1 ? $this->jumlah_dibayar_umum : $this->jumlah_dibayar_sma
            ];

            if ($identitas->getSize() > 0 && $identitas->getTempName() != "") {
                $nama_file = $this->PREFIX . $this->session->get('nama') . "." . $this->EXT_FILE;
                $identitas->move(ROOTPATH . "public/lie%^&L^^/" . $this->PATH_FILE, $nama_file, true);
            }

            if (strpos($email, "@stis.ac.id")) {
                $this->m_users->update_data($this->session->get('id'), $users);
                $peserta['jumlah_dibayar'] = 0;
                $peserta['status_pembayaran'] = 1;
            } else {
                $this->m_users->update_data($this->session->get('id'), $users);
                if ($this->is_valid_referal($kode_referal)) {
                    // $this->m_referal->update_referal($kode_referal);
                    $peserta['kode_referal'] = $kode_referal;
                    $peserta['jumlah_dibayar'] -= 5000;
                }
            }

            $this->m_peserta->tambah_peserta($peserta);

            if(
                (isset($nama_lengkap_2) && $nama_lengkap_2 != "") &&
                (isset($email_2) && $email_2 != "") &&
                (isset($asal_daerah_2) && $asal_daerah_2 != "") &&
                (isset($no_wa_2) && $no_wa_2 != "") &&
                (isset($sosial_media_2) && $sosial_media_2 != "")
              ) {
                  $peserta2 = [
                      'id_ketua' => $this->session->get('id'),
                      'nama' => $nama_lengkap_2,
                      'email' => $email_2,
                      'asal_daerah' => $asal_daerah_2,
                      'no_wa' => $no_wa_2,
                      'sosial_media' => $sosial_media_2
                  ];

                  $this->m_videografi->tambah_peserta($peserta2);
            }

            if(
                (isset($nama_lengkap_3) && $nama_lengkap_3 != "") &&
                (isset($email_3) && $email_3 != "") &&
                (isset($asal_daerah_3) && $asal_daerah_3 != "") &&
                (isset($no_wa_3) && $no_wa_3 != "") &&
                (isset($sosial_media_3) && $sosial_media_3 != "")
              ) {
                  $peserta3 = [
                      'id_ketua' => $this->session->get('id'),
                      'nama' => $nama_lengkap_3,
                      'email' => $email_3,
                      'asal_daerah' => $asal_daerah_3,
                      'no_wa' => $no_wa_3,
                      'sosial_media' => $sosial_media_3
                  ];

                  $this->m_videografi->tambah_peserta($peserta3);
            }

            return redirect()->to(base_url('liliecomp/videografi'));
        } else {
            $this->session->setFlashdata('errors', $this->validation->getErrors());
            return redirect()->to(base_url('liliecomp/videografi'))->withInput();
        }
    }
}
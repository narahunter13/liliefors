<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Model_referal;
use App\Models\Model_users;
use App\Models\ModelPeserta;

class Ringkasan extends BaseController {

    private $active = "Ringkasan";
    private $m_peserta;
    private $m_users;

    public function __construct()
    {
        $this->m_peserta = new ModelPeserta();
        $this->m_users = new Model_users();
    }

    public function index()
    {
        $data['active'] = $this->active;
        $data['klinik'] = $this->m_peserta->get_peserta_per_lomba(1);
        $data['penulisan'] = $this->m_peserta->get_peserta_per_lomba(2);
        $data['fotografi'] = $this->m_peserta->get_peserta_per_lomba(3);
        $data['desain'] = $this->m_peserta->get_peserta_per_lomba(4);
        $data['videografi'] = $this->m_peserta->get_peserta_per_lomba(5);
        $data['umum'] = $this->m_peserta->get_peserta_per_jenjang(1)[0];
        $data['sma'] = $this->m_peserta->get_peserta_per_jenjang(2)[0];
        $data['title'] = 'Ringkasan';
		return view('admin/index', $data);
    }
}
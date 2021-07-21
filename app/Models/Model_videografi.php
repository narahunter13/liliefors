<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_videografi extends Model {
    public function tambah_peserta($data)
    {
        return $this->db->table('peserta_videografi')
                        ->insert($data);
    }
}
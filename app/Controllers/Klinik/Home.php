<?php

namespace App\Controllers\Klinik;

use CodeIgniter\Controller;

class Home extends Controller {
    public function index()
    {
        $data['title'] = 'Liliefors | Klinik';
        return view('klinik/index', $data);
    }
}
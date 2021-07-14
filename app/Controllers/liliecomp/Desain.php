<?php

namespace App\Controllers\liliecomp;

use CodeIgniter\Controller;

class Desain extends Controller {
    public function index()
    {
        $data['title'] = 'Liliecomp | Desain Grafis';
        return view('liliecomp/desain', $data);
    }
}
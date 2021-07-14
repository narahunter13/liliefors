<?php

namespace App\Controllers\liliecomp;

use CodeIgniter\Controller;

class Penulisan extends Controller {
    public function index()
    {
        $data['title'] = 'Liliecomp | Penulisan';
        return view('liliecomp/penulisan', $data);
    }
}
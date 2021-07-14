<?php

namespace App\Controllers\liliecomp;

use CodeIgniter\Controller;

class Fotografi extends Controller {
    public function index()
    {
        $data['title'] = 'Liliecomp | Fotografi';
        return view('liliecomp/fotografi', $data);
    }
}
<?php

namespace App\Controllers\liliecomp;

use CodeIgniter\Controller;

class Videografi extends Controller {
    public function index()
    {
        $data['title'] = 'Liliecomp | Videografi';
        return view('liliecomp/videografi', $data);
    }
}
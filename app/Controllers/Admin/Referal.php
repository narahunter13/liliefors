<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Referal extends BaseController {
    
    private $active = "Referal";

    public function index()
    {
        $data['active'] = $this->active;
        $data['title'] = 'Kode Referal';
		return view('admin/referal/index', $data);
    }

}
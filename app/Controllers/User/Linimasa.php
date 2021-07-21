<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

class Linimasa extends BaseController {

    private $active = "Linimasa";

    public function index()
    {
        $data['active'] = $this->active;
        $data['title'] = 'Linimasa';
		return view('user/linimasa/index', $data);
    }

}
<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

class Sunting extends BaseController {

    private $active = "Sunting";

    public function index()
    {
        $data['active'] = $this->active;
        $data['title'] = 'Sunting Profil';
		return view('user/sunting/index', $data);
    }

}
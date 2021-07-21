<?php

namespace App\Controllers\Api;

use App\Models\Model_referal;
use CodeIgniter\RESTful\ResourceController;

class Referal extends ResourceController
{
    private $m_referal;
    protected $format = 'json';

    public function __construct()
    {
        $this->m_referal = new Model_referal();
    }

    public function show($id = null)
    {
        $data = [];

        $result = $this->m_referal->is_valid($id);

        if ($result == 1) {
            $data = [
                'success' => true,
                'data' => [
                    'isValid' => true
                ]
            ];

            return $this->respond($data, 200);
        } else {
            $data = [
                'success' => true,
                'data' => [
                    'isValid' => false
                ]
            ];

            return $this->respond($data, 200);
        }
    }
}

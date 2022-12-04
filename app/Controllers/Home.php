<?php

namespace App\Controllers;
use App\Models\M_kantor;

class Home extends BaseController
{
    public function __construct() {
        $this->M_kantor = new M_kantor();
    }

    public function index()
    {
        $data=[
            'title' => 'Pemetaan',
            'kantor' => $this->M_kantor->get_all_data(),
            'isi' => 'v_home',
        ];
        echo view('layout/v_template', $data);
    }
}

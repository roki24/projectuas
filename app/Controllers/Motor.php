<?php

namespace App\Controllers;

use App\Models\MotorModel;

class Motor extends BaseController
{
    protected $motorModel;

    public function __construct()
    {
        $this->motorModel = new MotorModel();
    }

    public function index()
    {
        $data['motor'] = $this->motorModel->findAll();
        return view('motor/index', $data);
    }
}

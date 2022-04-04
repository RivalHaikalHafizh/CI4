<?php

namespace App\Controllers;
use App\Models\PortoModel;
use App\Models\OrganisasiModel;

class Home extends BaseController
{
    protected $PortoModel;
    protected $OrganisasiModel;
    public function __construct()
    {
        $this->PortoModel = new PortoModel();
        $this->OrganisasiModel = new OrganisasiModel();
    }
    public function index()
    {
        $Porto = $this->PortoModel->findAll();
        $org= $this->OrganisasiModel->findAll();
        $data = [
            'title' => 'CV | Belajar CI4',
            'page' => 'home',
            'porto' => $Porto,
            'org' => $org
        ];
        return view('home', $data);
    }
}

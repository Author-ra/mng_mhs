<?php

namespace App\Controllers;

use App\Models\Mahasiswa;
use App\Models\Dosen;

class Home extends BaseController
{
    public function index()
    {
        $mahasiswaModel = new Mahasiswa();
        $dosenModel = new Dosen();

        $data = [
            'jumlahMahasiswa' => $mahasiswaModel->countAll(),
            'jumlahDosen'     => $dosenModel->countAll(),
        ];

        return view('dashboard', $data);
    }

    // Alias supaya dashboard gampang dibuka via /dashboard
    public function dashboard()
    {
        return $this->index();
    }

    public function login()
    {
        return view('login');
    }
}

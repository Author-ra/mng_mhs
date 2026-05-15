<?php

namespace App\Controllers;
use App\Models\Mahasiswa;

class MahasiswaController extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new Mahasiswa();
    }

    public function index()
    {
        $data['mahasiswa'] = $this->model->findAll();
        return view('mahasiswa/index', $data);
    }

    public function form_tambah()
    {
        return view('mahasiswa/tambah');
    }

    public function tambah()
    {
        $this->model->save($this->request->getPost());
        session()->setFlashdata('success', 'Data mahasiswa berhasil ditambahkan!');
        return redirect()->to('/mahasiswa');
    }

    public function edit($id)
    {
        $data['mahasiswa'] = $this->model->find($id);
        return view('mahasiswa/edit', $data);
    }

    public function update($id)
    {
        $this->model->update($id, $this->request->getPost());
        session()->setFlashdata('success', 'Data mahasiswa berhasil diupdate!');
        return redirect()->to('/mahasiswa');
    }

    public function delete($id)
    {
        $this->model->delete($id);
        session()->setFlashdata('success', 'Data mahasiswa berhasil dihapus!');
        return redirect()->to('/mahasiswa');
    }
}

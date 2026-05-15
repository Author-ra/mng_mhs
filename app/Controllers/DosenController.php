<?php

namespace App\Controllers;
use App\Models\Dosen;

class DosenController extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new Dosen();
    }

    public function index()
    {
        $data['dosen'] = $this->model->findAll();
        return view('dosen/index', $data);
    }

    public function form_tambah()
    {
        return view('dosen/tambah');
    }

    public function tambah()
    {
        $this->model->save($this->request->getPost());
        session()->setFlashdata('success', 'Data dosen berhasil ditambahkan!');
        return redirect()->to('/dosen');
    }

    public function edit($id)
    {
        $data['dosen'] = $this->model->find($id);
        return view('dosen/edit', $data);
    }

    public function update($id)
    {
        $this->model->update($id, $this->request->getPost());
        session()->setFlashdata('success', 'Data dosen berhasil diupdate!');
        return redirect()->to('/dosen');
    }

    public function delete($id)
    {
        $this->model->delete($id);
        session()->setFlashdata('success', 'Data dosen berhasil dihapus!');
        return redirect()->to('/dosen');
    }
}

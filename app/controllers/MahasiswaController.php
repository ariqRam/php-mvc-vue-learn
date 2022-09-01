<?php

class MahasiswaController extends Controller
{

    public function index()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = array_values($this->model('Mahasiswa')->getAllData());

        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer', $data, scripts: ['index.mahasiswa.php']);
    }

    public function add()
    {
        $data['judul'] = 'Add Mahasiswa';
        $data['mhs'] = array_values($this->model('Mahasiswa')->getAllData());
        $this->view('templates/header', $data);
        $this->view('mahasiswa/add', $data);
        $this->view('templates/footer', $data, scripts: ['add.mahasiswa.php']);
    }
}
<?php

class HomeController extends Controller
{
    public function index()
    {
        $data['judul'] = 'Home Page';
        $this->view('templates/header', $data);
        $this->view('home/index');
        $this->view('templates/footer');
    }
}

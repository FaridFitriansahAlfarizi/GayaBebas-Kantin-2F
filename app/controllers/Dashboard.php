<?php

class Dashboard extends Controller
{
    public function index()
    {
        $data['page'] = 'dashboard';
        $data['barang'] = $this->model('BarangModel')->getBarangJoinKategori();
        $this->view('templates/header');
        $this->view('admin/pages/dashboard', $data);
        $this->view('templates/footer', $data);
    }
}

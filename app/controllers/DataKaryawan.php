<?php

class DataKaryawan extends Controller
{
    public function index()
    {
        $data['page'] = 'dataKaryawan';
        $this->view('admin/templates/header');
        $this->view('admin/pages/dataKaryawan');
        $this->view('admin/templates/footer', $data);
    }
}

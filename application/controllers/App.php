<?php
defined('BASEPATH') or exit('No direct script access allowed');

class App extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = [
            'judul'     => 'Valencia Tour',
            'konten'    => $this->M_global->getDataTop('konten', 3),
            'konten2'   => $this->M_global->getDataTop('konten', 2),
        ];

        $this->template->load('Template', 'App', $data);
    }

    public function konten($id)
    {
        $konten = $this->M_global->getData('konten', ['id' => $id]);
        $galeri = $this->M_global->getDataResult('galeri', ['konten_id' => $id]);
        $hari   = $this->M_global->getDataResult('hari', ['konten_id' => $id]);

        $data = [
            'judul'     => $konten->title,
            'konten'    => $konten,
            'konten2'   => $this->M_global->getDataTop('konten', 2),
            'galeri'    => $galeri,
            'hari'      => $hari,
        ];

        $this->template->load('Template', 'Post', $data);
    }
}

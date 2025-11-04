<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Destinasi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = [
            'judul'     => 'Valencia Tour',
            'konten'    => $this->M_global->getDataTop('konten', 4),
        ];

        $this->template->load('Template', 'Destinasi', $data);
    }
}

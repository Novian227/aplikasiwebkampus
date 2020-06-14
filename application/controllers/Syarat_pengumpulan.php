<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Syarat_pengumpulan extends CI_Controller {

	  public function index()
    {
        $data = array(

            'title'     => 'Syarat Pengumpulan Berkas Pendadaran',

        );

        $this->load->view('Syarat_pengumpulan_v', $data);
    }

}
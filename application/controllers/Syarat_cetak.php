<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Syarat_cetak extends CI_Controller {

	  public function index()
    {
        $data = array(

            'title'     => 'Syarat Cetak KRS',

        );

        $this->load->view('Syarat_cetak_v', $data);
    }

}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_keterangan_lulus extends CI_Controller {

	  public function index()
    {
        $data = array(

            'title'     => 'Surat Keterangan Lulus',

        );

        $this->load->view('Surat_keterangan_lulus_v', $data);
    }

}
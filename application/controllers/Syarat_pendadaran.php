<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Syarat_pendadaran extends CI_Controller {

	  public function index()
    {
        $data = array(

            'title'     => 'Syarat Pendadaran',

        );

        $this->load->view('Syarat_pendadaran_v', $data);
    }

}
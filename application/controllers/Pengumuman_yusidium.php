<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman_yusidium extends CI_Controller {

	  public function index()
    {
        $data = array(

            'title'     => 'Pengumuman Yusidium',

        );

        $this->load->view('Pengumuman_yusidium_v', $data);
    }

}
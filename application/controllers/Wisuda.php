<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisuda extends CI_Controller {

	  public function index()
    {
        $data = array(

            'title'     => 'Info Wisuda',

        );

        $this->load->view('Wisuda_v', $data);
    }

}
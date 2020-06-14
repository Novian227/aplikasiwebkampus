<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontpage extends CI_Controller {

	  public function index()
    {
        $data = array(

            'title'     => 'Introduction',

        );

        $this->load->view('Frontpage_v', $data);
    }

}
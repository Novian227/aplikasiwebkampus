<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prosedur_pembatalan_krs extends CI_Controller {

	  public function index()
    {
        $data = array(

            'title'     => 'Prosedur Pembatalan KRS',

        );

        $this->load->view('Prosedur_pembatalan_krs_v', $data);
    }

}
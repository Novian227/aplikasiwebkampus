<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_pendadaran_user extends CI_Controller {

    public function __construct(){

        parent ::__construct();

        //load model
        $this->load->model('jadwal_pendadaran_m'); 

    }

    public function index()
    {
        $data = array(

            'title'     => 'Jadwal Pendadaran (User View)',
            'data_jadwal_pendadaran' => $this->jadwal_pendadaran_m->get_all(),

        );

        $this->load->view('Data_jadwal_pendadaran_user', $data);
    }

}

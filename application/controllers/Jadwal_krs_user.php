<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_krs_user extends CI_Controller {

    public function __construct(){

        parent ::__construct();

        //load model
        $this->load->model('jadwal_krs_m'); 

    }

    public function index()
    {
        $data = array(

            'title'     => 'Jadwal KRS (User View)',
            'data_jadwal_krs_coba' => $this->jadwal_krs_m->get_all(),

        );

        $this->load->view('Data_jadwal_krs_user', $data);
    }

}

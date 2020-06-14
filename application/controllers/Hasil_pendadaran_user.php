<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hasil_pendadaran_user extends CI_Controller {

    public function __construct(){

        parent ::__construct();

        //load model
        $this->load->model('hasil_pendadaran_m'); 

    }

    public function index()
    {
        $data = array(

            'title'     => 'Hasil Pendadaran (User View)',
            'data_hasil_pendadaran' => $this->hasil_pendadaran_m->get_all(),

        );

        $this->load->view('Data_hasil_pendadaran_user', $data);
    }

}

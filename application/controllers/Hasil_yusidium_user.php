<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hasil_yusidium_user extends CI_Controller {

    public function __construct(){

        parent ::__construct();

        //load model
        $this->load->model('hasil_yusidium_m'); 

    }

    public function index()
    {
        $data = array(

            'title'     => 'Hasil Yusidium (User View)',
            'data_hasil_yusidium' => $this->hasil_yusidium_m->get_all(),

        );

        $this->load->view('Data_hasil_yusidium_user', $data);
    }

}

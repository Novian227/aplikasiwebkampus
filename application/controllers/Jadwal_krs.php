<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_krs extends CI_Controller {

    public function __construct(){

        parent ::__construct();
        $this->load->helper('tgl_indo');

        //load model
        $this->load->model('jadwal_krs_m'); 

    }

    public function index()
    {
        $data = array(

            'title'     => 'Jadwal KRS',
            'data_jadwal_krs' => $this->jadwal_krs_m->get_all(),

        );

        $this->load->view('Data_jadwal_krs', $data);
    }

    public function tambah()
    {
        $data = array(

            'title'     => 'Tambah Jadwal KRS'

        );

        $this->load->view('Tambah_jadwal_krs', $data);
    }

    public function simpan()
    {
        $data = array(

            'judul' => $this->input->post("judul"),
            'hari' => $this->input->post("hari"),
            'akhir' => $this->input->post("akhir"),
            'prodi'    => $this->input->post("prodi"),

        );

        $this->jadwal_krs_m->simpan($data);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible">Data berhasil disimpan di Database.
            </div>');

        //redirect
        redirect('Jadwal_krs/');

    }

    public function edit($id_krs)
    {
        $id_krs = $this->uri->segment(3);

        $data = array(

            'title'     => 'Edit Data Jadwal KRS',
            'data_jadwal_krs' => $this->jadwal_krs_m->edit($id_krs)

        );

        $this->load->view('Edit_jadwal_krs', $data);
    }

    public function update()
    {
        $id['id_krs'] = $this->input->post("id_krs");
        $data = array(

            'judul' => $this->input->post("judul"),
            'hari' => $this->input->post("hari"),
            'akhir' => $this->input->post("akhir"),
            'prodi'    => $this->input->post("prodi"),

        );

        $this->jadwal_krs_m->update($data, $id);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible">Data berhasil diupdate di Database.
            </div>');

        //redirect
        redirect('Jadwal_krs/');

    }

    public function hapus($id_krs)
    {
        $id['id_krs'] = $this->uri->segment(3);

        $this->jadwal_krs_m->hapus($id);

        $this->session->set_flashdata('notif', '<div class="alert alert-danger alert-dismissible">Data berhasil dihapus dari Database.
            </div>');

        //redirect
        redirect('Jadwal_krs/');

    }
    

}

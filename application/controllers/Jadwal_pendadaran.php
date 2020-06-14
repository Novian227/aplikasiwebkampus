<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_pendadaran extends CI_Controller {

    public function __construct(){

        parent ::__construct();
         $this->load->helper('tgl_indo');

        //load model
        $this->load->model('jadwal_pendadaran_m'); 

    }

    public function index()
    {
        $data = array(

            'title'     => 'Jadwal Pendadaran',
            'data_jadwal_pendadaran' => $this->jadwal_pendadaran_m->get_all(),

        );

        $this->load->view('Data_jadwal_pendadaran', $data);
    }

    public function tambah()
    {
        $data = array(

            'title'     => 'Tambah Data Pendadaran'

        );

        $this->load->view('Tambah_jadwal_pendadaran', $data);
    }

    public function simpan()
    {
        $data = array(

            'no_pendadaran'       => $this->input->post("no_pendadaran"),
            'hari_tanggal'         => $this->input->post("hari_tanggal"),
            'ruang'    => $this->input->post("ruang"),
            'waktu'         => $this->input->post("waktu"),
            'npm'         => $this->input->post("npm"),
            'nama'         => $this->input->post("nama"),
            'dosen'         => $this->input->post("dosen"),

        );

        $this->jadwal_pendadaran_m->simpan($data);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible">Data berhasil disimpan di Database.
                                                </div>');

        //redirect
        redirect('Jadwal_pendadaran/');

    }

    public function edit($id_pendadaran)
    {
        $id_pendadaran = $this->uri->segment(3);

        $data = array(

            'title'     => 'Edit Data Pendadaran',
            'data_jadwal_pendadaran' => $this->jadwal_pendadaran_m->edit($id_pendadaran)

        );

        $this->load->view('Edit_jadwal_pendadaran', $data);
    }

    public function update()
    {
        $id['id_pendadaran'] = $this->input->post("id_pendadaran");
        $data = array(

            'no_pendadaran'       => $this->input->post("no_pendadaran"),
            'hari_tanggal'         => $this->input->post("hari_tanggal"),
            'ruang'    => $this->input->post("ruang"),
            'waktu'         => $this->input->post("waktu"),
            'npm'         => $this->input->post("npm"),
            'nama'         => $this->input->post("nama"),
            'dosen'         => $this->input->post("dosen"),

        );

        $this->jadwal_pendadaran_m->update($data, $id);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible">Data berhasil diupdate di Database.
                                                </div>');

        //redirect
        redirect('Jadwal_pendadaran/');

    }

    public function hapus($id_pendadaran)
    {
        $id['id_pendadaran'] = $this->uri->segment(3);

        $this->jadwal_pendadaran_m->hapus($id);

        $this->session->set_flashdata('notif', '<div class="alert alert-danger alert-dismissible">Data berhasil dihapus dari Database.
                                                </div>');

        //redirect
        redirect('Jadwal_pendadaran/');

    }
    
     public function exportCSV()
    { 
        // file name 
        $filename = 'jadwal_pendadaran'.date('Ymd').'.csv'; 
        header("Content-Description: File Transfer"); 
        header("Content-Disposition: attachment; filename=$filename"); 
        header("Content-Type: application/csv; ");
   
        // get data 
        $data_jadwal_pendadaran = $this->jadwal_pendadaran_m->getUserDetails();

        // file creation 
        $file = fopen('php://output', 'w');
 
        $header = array("No Pendadaran","Hari / Tanggal","Ruang","Waktu","NPM","Nama","Dosen Pembimbing"); 
        fputcsv($file, $header);
        foreach ($data_jadwal_pendadaran as $hasil=>$line){ 
        fputcsv($file,$line); 
        }
        fclose($file); 
        exit; 
  }

}

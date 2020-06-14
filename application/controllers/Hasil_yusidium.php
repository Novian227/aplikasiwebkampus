<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hasil_yusidium extends CI_Controller {

    public function __construct(){

        parent ::__construct();

        //load model
        $this->load->model('hasil_yusidium_m'); 

    }

    public function index()
    {
        $data = array(

            'title'     => 'Hasil Yusidium',
            'data_hasil_yusidium' => $this->hasil_yusidium_m->get_all(),

        );

        $this->load->view('Data_hasil_yusidium', $data);
    }

    public function tambah()
    {
        $data = array(

            'title'     => 'Tambah Data Hasil Yusidium'

        );

        $this->load->view('Tambah_hasil_yusidium', $data);
    }

    public function simpan()
    {
        $data = array(

            'nama'       => $this->input->post("nama"),
            'nim'         => $this->input->post("nim"),
            'ipk'    => $this->input->post("ipk"),
            'jml_sks'         => $this->input->post("jml_sks"),
            'jml_nilai_d'         => $this->input->post("jml_nilai_d"),
            'jml_nilai_e'         => $this->input->post("jml_nilai_e"),
            'status'         => $this->input->post("status"),
            'keterangan'         => $this->input->post("keterangan"),

        );

        $this->hasil_yusidium_m->simpan($data);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible">Data berhasil disimpan di Database.
                                                </div>');

        //redirect
        redirect('Hasil_yusidium/');

    }

    public function edit($id_yusidium)
    {
        $id_yusidium = $this->uri->segment(3);

        $data = array(

            'title'     => 'Edit Data Hasil Yusidium',
            'data_hasil_yusidium' => $this->hasil_yusidium_m->edit($id_yusidium)

        );

        $this->load->view('Edit_hasil_yusidium', $data);
    }

    public function update()
    {
        $id['id_yusidium'] = $this->input->post("id_yusidium");
        $data = array(

            'nama'       => $this->input->post("nama"),
            'nim'         => $this->input->post("nim"),
            'ipk'    => $this->input->post("ipk"),
            'jml_sks'         => $this->input->post("jml_sks"),
            'jml_nilai_d'         => $this->input->post("jml_nilai_d"),
            'jml_nilai_e'         => $this->input->post("jml_nilai_e"),
            'status'         => $this->input->post("status"),
            'keterangan'         => $this->input->post("keterangan"),

        );

        $this->hasil_yusidium_m->update($data, $id);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible">Data berhasil diupdate di Database.
                                                </div>');

        //redirect
        redirect('Hasil_yusidium/');

    }

    public function hapus($id_yusidium)
    {
        $id['id_yusidium'] = $this->uri->segment(3);

        $this->hasil_yusidium_m->hapus($id);

        $this->session->set_flashdata('notif', '<div class="alert alert-danger alert-dismissible">Data berhasil dihapus dari Database.
                                                </div>');

        //redirect
        redirect('Hasil_yusidium/');

    }
        public function exportCSV()
    { 
        // file name 
        $filename = 'hasil_yusidium'.date('Ymd').'.csv'; 
        header("Content-Description: File Transfer"); 
        header("Content-Disposition: attachment; filename=$filename"); 
        header("Content-Type: application/csv; ");
   
        // get data 
        $data_hasil_yusidium = $this->hasil_yusidium_m->getUserDetails();

        // file creation 
        $file = fopen('php://output', 'w');
 
        $header = array("Nama","NIM","IPK","Jml SKS","Jml Nilai D","Jml Nilai E","Status","Keterangan"); 
        fputcsv($file, $header);
        foreach ($data_hasil_yusidium as $hasil=>$line){ 
        fputcsv($file,$line); 
        }
        fclose($file); 
        exit; 
  }

}

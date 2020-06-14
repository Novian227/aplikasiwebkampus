<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hasil_pendadaran extends CI_Controller {

    public function __construct(){

        parent ::__construct();

        //load model
        $this->load->model('hasil_pendadaran_m'); 

    }

    public function index()
    {
        $data = array(

            'title'     => 'Hasil Pendadaran',
            'data_hasil_pendadaran' => $this->hasil_pendadaran_m->get_all(),

        );

        $this->load->view('Data_hasil_pendadaran', $data);
    }

    public function tambah()
    {
        $data = array(

            'title'     => 'Tambah Data Hasil Pendadaran'

        );

        $this->load->view('Tambah_hasil_pendadaran', $data);
    }

    public function simpan()
    {
        $data = array(

            'hari_tanggal'       => $this->input->post("hari_tanggal"),
            'jam'         => $this->input->post("jam"),
            'npm'    => $this->input->post("npm"),
            'nilai'         => $this->input->post("nilai"),
            'status'         => $this->input->post("status"),
            'dosen'         => $this->input->post("dosen"),

        );

        $this->hasil_pendadaran_m->simpan($data);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible">Data berhasil disimpan di Database.
                                                </div>');

        //redirect
        redirect('Hasil_pendadaran/');

    }

    public function edit($id_hasilpendadaran)
    {
        $id_hasilpendadaran = $this->uri->segment(3);

        $data = array(

            'title'     => 'Edit Data Hasil Pendadaran',
            'data_hasil_pendadaran' => $this->hasil_pendadaran_m->edit($id_hasilpendadaran)

        );

        $this->load->view('Edit_hasil_pendadaran', $data);
    }

    public function update()
    {
        $id['id_hasilpendadaran'] = $this->input->post("id_hasilpendadaran");
        $data = array(

            'hari_tanggal'       => $this->input->post("hari_tanggal"),
            'jam'         => $this->input->post("jam"),
            'npm'    => $this->input->post("npm"),
            'nilai'         => $this->input->post("nilai"),
            'status'         => $this->input->post("status"),
            'dosen'         => $this->input->post("dosen"),

        );

        $this->hasil_pendadaran_m->update($data, $id);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible">Data berhasil diupdate di Database.
                                                </div>');

        //redirect
        redirect('Hasil_pendadaran/');

    }

    public function hapus($id_hasilpendadaran)
    {
        $id['id_hasilpendadaran'] = $this->uri->segment(3);

        $this->hasil_pendadaran_m->hapus($id);

        $this->session->set_flashdata('notif', '<div class="alert alert-danger alert-dismissible">Data berhasil dihapus dari Database.
                                                </div>');

        //redirect
        redirect('Hasil_pendadaran/');

    }
      public function exportCSV(){ 
   // file name 
   $filename = 'hasil_pendadaran'.date('Ymd').'.csv'; 
   header("Content-Description: File Transfer"); 
   header("Content-Disposition: attachment; filename=$filename"); 
   header("Content-Type: application/csv; ");
   
   // get data 
   $data_hasil_pendadaran = $this->hasil_pendadaran_m->getUserDetails();

   // file creation 
   $file = fopen('php://output', 'w');
 
   $header = array("Hari / Tanggal","Jam","NPM","Nilai","Status","Dosen Pembimbing"); 
   fputcsv($file, $header);
   foreach ($data_hasil_pendadaran as $hasil=>$line){ 
     fputcsv($file,$line); 
   }
   fclose($file); 
   exit; 
  }

}

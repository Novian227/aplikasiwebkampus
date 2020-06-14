<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hasil_pendadaran_m extends CI_model{

    public function get_all()
    {
        $query = $this->db->select("*")
                 ->from('hasil_pendadaran')
                 ->order_by('id_hasilpendadaran', 'DESC')
                 ->get();
        return $query->result();
    }

    public function simpan($data)
    {

        $query = $this->db->insert("hasil_pendadaran", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function edit($id_hasilpendadaran)
    {

        $query = $this->db->where("id_hasilpendadaran", $id_hasilpendadaran)
                ->get("hasil_pendadaran");

        if($query){
            return $query->row();
        }else{
            return false;
        }

    }

    public function update($data, $id)
    {

        $query = $this->db->update("hasil_pendadaran", $data, $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function hapus($id)
    {

        $query = $this->db->delete("hasil_pendadaran", $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }
    
    function getUserDetails()
    {
 
        $response = array();
 
        // Select record
        $this->db->select('hari_tanggal,jam,npm,nilai,status,dosen');
        $q = $this->db->get('hasil_pendadaran');
        $response = $q->result_array();
 
        return $response;
  }

}

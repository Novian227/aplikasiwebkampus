<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hasil_yusidium_m extends CI_model{

    public function get_all()
    {
        $query = $this->db->select("*")
                 ->from('hasil_yusidium')
                 ->order_by('id_yusidium', 'DESC')
                 ->get();
        return $query->result();
    }

    public function simpan($data)
    {

        $query = $this->db->insert("hasil_yusidium", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function edit($id_yusidium)
    {

        $query = $this->db->where("id_yusidium", $id_yusidium)
                ->get("hasil_yusidium");

        if($query){
            return $query->row();
        }else{
            return false;
        }

    }

    public function update($data, $id)
    {

        $query = $this->db->update("hasil_yusidium", $data, $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function hapus($id)
    {

        $query = $this->db->delete("hasil_yusidium", $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }
    
     function getUserDetails(){
 
    $response = array();
 
    // Select record
    $this->db->select('nama,nim,ipk,jml_sks,jml_nilai_d,jml_nilai_e,status,keterangan');
    $q = $this->db->get('hasil_yusidium');
    $response = $q->result_array();
 
    return $response;
  }

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_pendadaran_m extends CI_model{

    public function get_all()
    {
        $query = $this->db->select("*")
                 ->from('jadwal_pendadaran')
                 ->order_by('id_pendadaran', 'DESC')
                 ->get();
        return $query->result();
    }

    public function simpan($data)
    {

        $query = $this->db->insert("jadwal_pendadaran", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function edit($id_pendadaran)
    {

        $query = $this->db->where("id_pendadaran", $id_pendadaran)
                ->get("jadwal_pendadaran");

        if($query){
            return $query->row();
        }else{
            return false;
        }

    }

    public function update($data, $id)
    {

        $query = $this->db->update("jadwal_pendadaran", $data, $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function hapus($id)
    {

        $query = $this->db->delete("jadwal_pendadaran", $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }
    
     function getUserDetails(){
 
    $response = array();
 
    // Select record
    $this->db->select('no_pendadaran,hari_tanggal,ruang,waktu,npm,nama,dosen');
    $q = $this->db->get('jadwal_pendadaran');
    $response = $q->result_array();
 
    return $response;
  }

}

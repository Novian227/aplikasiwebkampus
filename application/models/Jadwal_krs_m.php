<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_krs_m extends CI_model{

    public function get_all()
    {
        $query = $this->db->limit(1)
        /*$query = $this->db->select("*")*/
        ->from('jadwal_krs')
        ->order_by('id_krs', 'DESC')
        ->get();
        return $query->result();
    }

    public function simpan($data)
    {

        $query = $this->db->insert("jadwal_krs", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function edit($id_krs)
    {

        $query = $this->db->where("id_krs", $id_krs)
        ->get("jadwal_krs");

        if($query){
            return $query->row();
        }else{
            return false;
        }

    }

    public function update($data, $id)
    {

        $query = $this->db->update("jadwal_krs", $data, $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function hapus($id)
    {

        $query = $this->db->delete("jadwal_krs", $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }

}

<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_dataalternatif extends CI_Model
{

    public function tampil()
    {
        $query = $this->db->get('tb_alternatifs');
        return $query->result();
    }

    public function getTotal()
    {
        return $this->db->count_all('tb_alternatifs');
    }

    public function insert($data = [])
    {
        $result = $this->db->insert('tb_alternatifs', $data);
        return $result;
    }

    public function show($id_tb_alternatifs)
    {
        $this->db->where('id_tb_alternatifs', $id_tb_alternatifs);
        $query = $this->db->get('tb_alternatifs');
        return $query->row();
    }

    public function update($id_tb_alternatifs, $data = [])
    {
        $ubah = array(
            'nama'  => $data['nama']
        );

        $this->db->where('id_tb_alternatifs', $id_tb_alternatifs);
        $this->db->update('tb_alternatifs', $ubah);
    }


    public function delete($id_tb_alternatifs)
    {
        $this->db->where('id_tb_alternatifs', $id_tb_alternatifs);
        $this->db->delete('tb_alternatifs');
    }
}

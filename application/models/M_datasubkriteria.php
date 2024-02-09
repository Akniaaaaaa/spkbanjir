<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_datasubkriteria extends CI_Model
{

    public function tampil()
    {
        $query = $this->db->get('tb_subkriteria');
        return $query->result();
    }
    public function get_data()
    {
        $query = $this->db->get('tb_subkriteria');
        return $query->result();
    }

    public function getTotal()
    {
        return $this->db->count_all('tb_subkriteria');
    }

    public function insert($data = [])
    {
        $result = $this->db->insert('tb_subkriteria', $data);
        return $result;
    }

    public function show($id_subkriteria)
    {
        $this->db->where('id_subkriteria', $id_subkriteria);
        $query = $this->db->get('tb_subkriteria');
        return $query->row();
    }

    public function update($id_subkriteria, $data = [])
    {
        $ubah = array(
            'id_kriteria' => $data['id_kriteria'],
            'nama_subkriteria' => $data['nama_subkriteria'],
            'nilai'  => $data['nilai']
        );

        $this->db->where('id_subkriteria', $id_subkriteria);
        $this->db->update('tb_subkriteria', $ubah);
    }

    public function delete($id_subkriteria)
    {
        $this->db->where('id_subkriteria', $id_subkriteria);
        $this->db->delete('tb_subkriteria');
    }

    public function get_kriteria()
    {
        $query = $this->db->get('tb_kriteria');
        return $query->result();
    }

    public function count_kriteria()
    {
        $query =  $this->db->query("SELECT id_kriteria,COUNT(nama_subkriteria) AS jml_setoran FROM tb_subkriteria GROUP BY id_kriteria")->result();
        return $query;
    }

    public function data_sub_kriteria($id_kriteria)
    {
        $query = $this->db->query("SELECT * FROM tb_subkriteria WHERE id_kriteria='$id_kriteria'  ORDER BY nilai DESC;");
        return $query->result_array();
    }
}
    
    /* End of file Kategori_model.php */

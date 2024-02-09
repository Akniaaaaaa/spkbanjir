<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_penilaian extends CI_Model
{

    public function tambah_penilaian($id_alternatif, $id_kriteria, $nilai)
    {
        $query = $this->db->simple_query("INSERT INTO tb_penilaian VALUES (DEFAULT,'$id_kriteria','$id_alternatif',$nilai);");
        return $query;
    }
    public function edit_penilaian($id_alternatif, $id_kriteria, $nilai)
    {
        $query = $this->db->simple_query("UPDATE tb_penilaian SET nilai=$nilai WHERE id_alternatif='$id_alternatif' AND id_kriteria='$id_kriteria';");
        return $query;
    }

    public function get_kriteria()
    {
        $query = $this->db->get('tb_kriteria');
        return $query->result();
    }
    public function get_alternatif()
    {
        $query = $this->db->query("SELECT * FROM tb_alternatifs");
        return $query->result();
    }
    public function get_sub_kriteria()
    {
        $query = $this->db->get('tb_subkriteria');
        return $query->result();
    }

    public function data_penilaian($id_alternatif, $id_kriteria)
    {
        $query = $this->db->query("SELECT * FROM tb_penilaian WHERE id_alternatif='$id_alternatif' AND id_kriteria='$id_kriteria';");
        return $query->row_array();
    }
    public function untuk_tombol($id_alternatif)
    {
        $query = $this->db->query("SELECT * FROM tb_penilaian WHERE id_alternatif='$id_alternatif';");
        return $query->num_rows();
    }
    public function data_sub_kriteria($id_kriteria)
    {
        $query = $this->db->query("SELECT * FROM tb_subkriteria WHERE id_kriteria='$id_kriteria' ORDER BY nilai DESC;");
        return $query->result_array();
    }
}

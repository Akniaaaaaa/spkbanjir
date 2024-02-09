<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_datahasilhitungmoora extends CI_Model
{

    public function get_kriteria()
    {
        $query = $this->db->get('tb_kriteria');
        return $query->result();
    }
    public function get_alternatif()
    {
        $query = $this->db->get('tb_alternatifs');
        return $query->result();
    }

    public function data_nilai($id_alternatif, $id_kriteria)
    {
        $query = $this->db->query("SELECT * FROM tb_penilaian JOIN tb_subkriteria WHERE tb_penilaian.nilai=tb_subkriteria.id_subkriteria AND tb_penilaian.id_alternatif='$id_alternatif' AND tb_penilaian.id_kriteria='$id_kriteria';");
        return $query->row_array();
    }

    public function get_hasil_moora()
    {
        $query = $this->db->query("SELECT * FROM tb_hasilhitungmoora JOIN tb_alternatifs ON tb_hasilhitungmoora.id_alternatif=tb_alternatifs.id_alternatif ORDER BY nilai DESC;");
        return $query->result();
    }

    public function insert_hasil_moora($hasil_akhir = [])
    {
        $result = $this->db->insert('tb_hasilhitungmoora', $hasil_akhir);
        return $result;
    }

    public function hapus_hasil_moora()
    {
        $query = $this->db->query("TRUNCATE TABLE tb_hasilhitungmoora;");
        return $query;
    }
    public function jumlah_kriteria()
    {
        $sum_kriteria = $this->db->get('tb_kriteria')->num_rows();
        return $sum_kriteria;
    }
    public function jumlah_penilaian()
    {
        $sum_penilaian = $this->db->get('tb_penilaian')->num_rows();
        return $sum_penilaian;
    }
    public function jumlah_alternatif()
    {
        $sum_alternatifs = $this->db->get('tb_alternatifs')->num_rows();
        return $sum_alternatifs;
    }
}

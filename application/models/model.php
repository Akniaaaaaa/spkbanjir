<?php

class model extends CI_Model
{

    public function tampil_kriteria()
    {
        return $this->db->query("SELECT tb_alternatif.*, tb_kecamatan.kecamatan, tb_kabupaten.kabupaten, tb_nilaikriteria.*
        FROM tb_alternatif 
        INNER JOIN tb_kecamatan
        ON tb_alternatif.id_kecamatan = tb_kecamatan.id_kecamatan
        INNER JOIN tb_kabupaten
        ON tb_kecamatan.id_kabupaten = tb_kabupaten.id_kabupaten
        INNER JOIN tb_nilaikriteria
        ON tb_nilaikriteria.id_alternatif = tb_alternatif.id_alternatif
        -- INNER JOIN tb_z
        -- ON tb_z.id_alternatif = tb_alternatif.id_alternatif
        -- WHERE tb_alternatif.status != 'x'
        -- ORDER BY tb_z.z DESC
        ");
    }

    public function tampil_datakriteria()
    {
        return $this->db->query("SELECT*FROM tb_kriteria");
    }

    public function tampil_subkriteria()
    {
        return $this->db->query("SELECT tb_subkriteria.*,tb_kriteria.*
        FROM tb_subkriteria 
        INNER JOIN tb_kriteria ON tb_subkriteria.id_kriteria=tb_kriteria.id_kriteria");
    }

    public function tampil_nilairating()
    {
        return $this->db->query("SELECT tb_nilairating.*, tb_alternatif.*
        FROM tb_nilairating 
        INNER JOIN tb_alternatif
        ON tb_nilairating.id_alternatif = tb_alternatif.id_alternatif");
    }

    public function tampil_normalisasi()
    {
        return $this->db->query("SELECT tb_normalisasi.*, tb_nilairating.*
        FROM tb_normalisasi 
        INNER JOIN tb_nilairating
        ON tb_normalisasi.id_nilairating = tb_nilairating.id_nilairating");
    }

    public function tampil_optimalisasi()
    {
        return $this->db->query("SELECT tb_optimalisasi.*, tb_normalisasi.*
        FROM tb_optimalisasi 
        INNER JOIN tb_normalisasi
        ON tb_optimalisasi.id_normalisasi = tb_normalisasi.id_normalisasi");
    }

    public function tampil_hasil()
    {
        return $this->db->query("SELECT tb_hasil.*, tb_optimalisasi.*, tb_normalisasi.*, tb_nilairating.*, tb_alternatif.*
        FROM tb_hasil 
        INNER JOIN tb_optimalisasi
        ON tb_hasil.id_optimalisasi = tb_optimalisasi.id_optimalisasi
        INNER JOIN tb_normalisasi
        ON tb_optimalisasi.id_normalisasi = tb_normalisasi.id_normalisasi
        INNER JOIN tb_nilairating
        ON tb_normalisasi.id_nilairating = tb_nilairating.id_nilairating
        INNER JOIN tb_alternatif
        ON tb_nilairating.id_alternatif = tb_alternatif.id_alternatif");
    }

    public function tampil_hasilrangking()
    {
        return $this->db->query("SELECT tb_hasil.*, tb_optimalisasi.*, tb_normalisasi.*, tb_nilairating.*, tb_alternatif.*
        FROM tb_hasil 
        INNER JOIN tb_optimalisasi
        ON tb_hasil.id_optimalisasi = tb_optimalisasi.id_optimalisasi
        INNER JOIN tb_normalisasi
        ON tb_optimalisasi.id_normalisasi = tb_normalisasi.id_normalisasi
        INNER JOIN tb_nilairating
        ON tb_normalisasi.id_nilairating = tb_nilairating.id_nilairating
        INNER JOIN tb_alternatif
        ON tb_nilairating.id_alternatif = tb_alternatif.id_alternatif Order by tb_hasil.hasil DESC");
    }

    public function tampil_hasil2()
    {
        return $this->db->query("SELECT hasil
        FROM tb_hasil");
    }

    public function jumlah()
    {
        $query = $this->db->get('tb_hasil');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function tambah($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function edit($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}

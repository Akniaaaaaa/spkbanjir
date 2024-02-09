<?php

class M_rangking extends CI_Model
{
    public function get_data($table)
    {
        return $this->db->get($table);
    }
    public function get_hasil_moora()
    {
        $query = $this->db->query("SELECT * FROM tb_hasilhitungmoora JOIN tb_alternatifs ON tb_hasilhitungmoora.id_alternatif=tb_alternatifs.id_alternatif ORDER BY nilai DESC;");
        return $query->result();
    }
}

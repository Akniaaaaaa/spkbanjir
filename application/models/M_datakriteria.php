<?php

class M_datakriteria extends CI_Model{
    public function get_data($table)
    {
        return $this->db->get($table);
    }

    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

    public function hitungJumlahKriteria()
	{   
		$query = $this->db->get('tb_kriteria');
		if($query->num_rows()>0)
		{
			return $query->num_rows();
		}
		else
		{
			return 0;
		}
	}
}

?>
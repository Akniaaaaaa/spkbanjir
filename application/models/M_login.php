<?php 
defined('BASEPATH') OR exit('no direct script access allowed');

Class M_login extends CI_Model {
	public function index($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function cek_login()
	{
		$username = set_value('username');
		$password = set_value('password');

		$result = $this->db
						->where('username',$username)
						->where('password',$password)
						->get('tb_admin');

		if($result->num_rows() > 0) {
			return $result->row();
		}else{
			return FALSE;
		}
	}
}
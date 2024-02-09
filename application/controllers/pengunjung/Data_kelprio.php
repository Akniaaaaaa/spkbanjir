<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Data_kelprio extends CI_Controller 
{    
    public function index()
    {
        $data['rangking'] = $this->M_rangking->get_data('tb_rangking')->result();
        $data['hasil'] = $this->model->tampil_hasilrangking()->result();
        $this->load->view('template_pengunjung/v_head');
        $this->load->view('template_pengunjung/v_header');
        $this->load->view('pengunjung/Data_kelprio' ,$data);
        $this->load->view('template_pengunjung/v_footer');
    }
}

?>
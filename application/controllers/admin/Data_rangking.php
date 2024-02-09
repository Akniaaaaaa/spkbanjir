<?php

class Rangking extends CI_Controller
{
    public function index()
    {
        $data = [
            'page' => "Hasil",
            'hasil_moora' => $this->M_rangking->get_hasil_moora()
        ];

        $this->load->view('template_admin/v_head');
        $this->load->view('template_admin/v_header');
        $this->load->view('template_admin/v_sidebar');
        $this->load->view('admin/Data_rangking', $data);
        $this->load->view('template_admin/v_footer');
    }

    public function cetak_rangking()
    {
        $data['rangking'] = $this->M_rangking->get_data('tb_rangking')->result();
        $data['hasil'] = $this->model->tampil_hasilrangking()->result();
        $this->load->view('admin/Cetak_rangking', $data);
    }
}

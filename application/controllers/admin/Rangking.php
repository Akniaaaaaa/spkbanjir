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
}

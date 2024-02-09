<?php

class Home_pengunjung extends CI_Controller{

    public function index()
    {
        $this->load->view('template_pengunjung/v_head');
        $this->load->view('template_pengunjung/v_header');
        $this->load->view('Home_pengunjung');
        $this->load->view('template_pengunjung/v_footer');
    }
}


?>
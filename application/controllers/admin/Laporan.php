<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{


    public function cetak_laporan_hasil()
    {
        $data = [
            'hasil_moora' => $this->M_rangking->get_hasil_moora(),
        ];

        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "Laporan_Hasil.pdf";
        $this->pdf->load_view('admin/Cetak_ranking', $data);
    }
    public function cetak_rangking()
    {
        $data = [
            'hasil_moora' => $this->M_rangking->get_hasil_moora(),
        ];
        $this->load->view('admin/Cetak_rangking', $data);
    }
}

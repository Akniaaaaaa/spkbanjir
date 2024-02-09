<?php defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $data = [
            'title' => "HALAMAN UTAMA",
            'sub_title' => "Selamat Datang Admin",
            'isi' => 'Dashboard',
        ];
        $data['total_kriteria'] = $this->M_datakriteria->hitungJumlahKriteria();
        $data['total_subkriteria'] = $this->M_datasubkriteria->getTotal();
        $data['total_alternatif'] = $this->M_dataalternatif->getTotal();
        $data['total_admin'] = $this->M_dataadmin->hitungJumlahAdmin();

        $this->load->view('template_admin/v_wrapper', $data);
    }
}

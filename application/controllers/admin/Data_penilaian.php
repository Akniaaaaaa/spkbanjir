<?php

class Data_penilaian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->library('form_validation');
        $this->load->model('M_penilaian');
    }

    public function index()
    {
        $data = [
            'page' => "Penilaian",
            'kriteria' => $this->M_penilaian->get_kriteria(),
            'alternatif' => $this->M_penilaian->get_alternatif(),
            // 's_option' => $this->M_penilaian->data_penilaian($keys->id_alternatif, $subs_kriteria['id_kriteria']);
        ];
        $this->load->view('template_admin/v_head');
        $this->load->view('template_admin/v_header');
        $this->load->view('template_admin/v_sidebar');
        $this->load->view('admin/Penilaian', $data);
        $this->load->view('template_admin/v_footer');
    }
    public function tambah_penilaian()
    {
        $id_alternatif = $this->input->post('id_alternatif');
        $id_kriteria = $this->input->post('id_kriteria');
        $nilai = $this->input->post('nilai');
        $i = 0;
        echo var_dump($nilai);
        foreach ($nilai as $key) {
            $this->M_penilaian->tambah_penilaian($id_alternatif, $id_kriteria[$i], $key);
            $i++;
        }
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil disimpan!</div>');
        redirect('admin/Data_penilaian/index');
    }
    public function update_penilaian()
    {
        $id_alternatif = $this->input->post('id_alternatif');
        $id_kriteria = $this->input->post('id_kriteria');
        $nilai = $this->input->post('nilai');
        $i = 0;

        foreach ($nilai as $key) {
            $cek = $this->M_penilaian->data_penilaian($id_alternatif, $id_kriteria[$i]);
            if ($cek == 0) {
                $this->M_penilaian->tambah_penilaian($id_alternatif, $id_kriteria[$i], $key);
            } else {
                $this->M_penilaian->edit_penilaian($id_alternatif, $id_kriteria[$i], $key);
            }
            $i++;
        }
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil disimpan!</div>');
        redirect('admin/Data_penilaian/index');
    }
}

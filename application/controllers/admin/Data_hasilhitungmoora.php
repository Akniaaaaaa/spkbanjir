<?php

class Data_hasilhitungmoora extends CI_Controller
{
    public function index()
    {

        $data = [
            'page' => "Perhitungan",
            'kriterias' => $this->M_datahasilhitungmoora->get_kriteria(),
            'alternatifs' => $this->M_penilaian->get_alternatif(),
            'sum_alternatif' => $this->M_datahasilhitungmoora->jumlah_alternatif(),
            'sum_penilaian' => $this->M_datahasilhitungmoora->jumlah_penilaian(),
            'sum_kriteria' => $this->M_datahasilhitungmoora->jumlah_kriteria(),
        ];

        $this->load->view('template_admin/v_head');
        $this->load->view('template_admin/v_header');
        $this->load->view('template_admin/v_sidebar');
        $this->load->view('admin/Data_hasilhitungmoora', $data);
        $this->load->view('template_admin/v_footer');
    }

    public function tambah_aksi()
    {
        $nilai       = $this->input->post('nilai');

        $data = array(
            'nilai'      => $nilai,
        );

        $this->M_datahasilhitungmoora->input_data($data, 'tb_hasilhitungmoora');
        redirect('admin/Data_hasilhitungmoora/index');
    }

    public function hapus($id_hasilhitungmoora)
    {
        $where = array('id_hasilhitungmoora' => $id_hasilhitungmoora);
        $this->M_datahasilhitungmoora->hapus_data($where, 'tb_hasilhitungmoora');
        redirect('admin/Data_hasilhitungmoora/index');
    }

    public function edit()
    {
        $id_hasilhitungmoora        = $this->input->post('id_hasilhitungmoora');
        $nilai      = $this->input->post('kode_hasilhitungmoora');
        $data = array(
            'id_kriteria'      => $id_kriteria,
            'nilai'            => $nilai

        );
        $this->db->where('id_hasilhitungmoora', $id_hasilhitungmoora);
        $this->db->update('tb_hasilhitungmoora', $data);
        $this->session->set_flashdata("pesan", "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
         <strong>Berhasil!</strong> Edit Data.
         <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
         <span aria-hidden='true'>$times;</span>
         </button>
         </div>");
        redirect('admin/Data_hasilhitungmoora/index');
    }
}

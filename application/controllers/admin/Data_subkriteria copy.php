<?php

class Data_subkriteria extends CI_Controller
{
    public function index()
    {
        // $data['subkriteria'] = $this->M_datasubkriteria->get_data('tb_subkriteria')->result();
        $data['subkriteria'] = $this->M_datasubkriteria->tampil_join()->result();
        $this->load->view('template_admin/v_head');
        $this->load->view('template_admin/v_header');
        $this->load->view('template_admin/v_sidebar');
        $this->load->view('admin/Data_subkriteria', $data);
        $this->load->view('template_admin/v_footer');
    }

    public function tambah_aksi()
    {
        $nama_subkriteria      = $this->input->post('nama_subkriteria');
        $nilai                 = $this->input->post('nilai');

        $data = array(
            'nama_subkriteria'      => $nama_subkriteria,
            'nilai'                 => $nilai,
        );

        $this->M_datasubkriteria->input_data($data, 'tb_subkriteria');
        redirect('admin/Data_subkriteria/index');
    }

    //hapus data
    public function hapus($id_subkriteria)
    {
        $where = array('id_subkriteria' => $id_subkriteria);
        $this->M_datasubkriteria->hapus_data($where, 'tb_subkriteria');
        redirect('admin/Data_subkriteria/index');
    }

    //edit data 
    public function edit()
    {
        $id_subkriteria        = $this->input->post('id_subkriteria');
        $nama_subkriteria      = $this->input->post('nama_subkriteria');
        $nilai                 = $this->input->post('nilai');
        $data = array(
            'id_subkriteria'   => $id_subkriteria,
            'nama_subkriteria' => $nama_subkriteria,
            'nilai'            => $nilai

        );
        $this->db->where('id_subkriteria', $id_subkriteria);
        $this->db->update('tb_subkriteria', $data);
        $this->session->set_flashdata("pesan", "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
         <strong>Berhasil!</strong> Edit Data.
         <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
         <span aria-hidden='true'>$times;</span>
         </button>
         </div>");
        redirect('admin/Data_subkriteria/index');
    }
}

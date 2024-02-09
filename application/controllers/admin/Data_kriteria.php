<?php

class Data_kriteria extends CI_Controller{
    public function index()
    {
        $data['kriteria'] = $this->M_datakriteria->get_data('tb_kriteria')->result();
        $this->load->view('template_admin/v_head');
        $this->load->view('template_admin/v_header');
        $this->load->view('template_admin/v_sidebar');
        $this->load->view('admin/Data_kriteria' ,$data);
        $this->load->view('template_admin/v_footer');
    }

    public function tambah_aksi()
        {
            $kode       = $this->input->post('kode_kriteria');
            $nama       = $this->input->post('nama_kriteria');
            $bobot      = $this->input->post('bobot');
            $jenis      = $this->input->post('jenis');

            $data = array(
                'kode_kriteria'      => $kode,
                'nama_kriteria'      => $nama,
                'bobot'     => $bobot,
                'jenis'     => $jenis,
            );

            var_dump($data);
            $die;

            $this->M_datakriteria->input_data($data, 'tb_kriteria');
            redirect('admin/Data_kriteria/index');
        }

        public function hapus($id_kriteria)
        {
            $where = array ('id_kriteria' => $id_kriteria);
            $this->M_datakriteria->hapus_data($where, 'tb_kriteria');
            redirect('admin/Data_kriteria/index');
        }

        public function edit() {
            $id_kriteria        = $this->input->post('id_kriteria');
            $kode_kriteria      = $this->input->post('kode_kriteria');
            $nama_kriteria      = $this->input->post('nama_kriteria');
            $bobot              = $this->input->post('bobot');
            $jenis              = $this->input->post('jenis');
            $data = array(
                 'id_kriteria'      => $id_kriteria,
                 'kode_kriteria'    => $kode_kriteria,
                 'nama_kriteria'    => $nama_kriteria,
                 'bobot'            => $bobot,
                 'jenis'            => $jenis

            );
            $this->db->where('id_kriteria', $id_kriteria);
            $this->db->update('tb_kriteria', $data);
            $this->session->set_flashdata("pesan", "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
             <strong>Berhasil!</strong> Edit Data.
             <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
             <span aria-hidden='true'>$times;</span>
             </button>
             </div>");
             redirect('admin/Data_kriteria/index');
         
        }
}

?>
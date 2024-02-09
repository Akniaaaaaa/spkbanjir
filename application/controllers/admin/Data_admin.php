<?php

class Data_admin extends CI_Controller{
    public function index()
    {
        $data['admin'] = $this->M_dataadmin->get_data('tb_admin')->result();
        $this->load->view('template_admin/v_head');
        $this->load->view('template_admin/v_header');
        $this->load->view('template_admin/v_sidebar');
        $this->load->view('admin/Data_admin' ,$data);
        $this->load->view('template_admin/v_footer');
    }

        public function tambah_aksi()
        {
            $nama           = $this->input->post('nama_admin');
            $username       = $this->input->post('username');
            $password       = $this->input->post('password');
            $jabatan        = $this->input->post('jabatan');

            $data = array(
                'nama_admin'    => $nama,
                'username'      => $username,
                'password'      => $password,
                'jabatan'       => $jabatan,
            );

            $this->M_dataadmin->input_data($data, 'tb_admin');
            // $this->session->set_flashdata('pesan','<div class="alert
            //     alert-success alert-dismissible fade show"
            //     role="alert">
            //         Data Admin Berhasil Ditambah !
            //         <button type="button" class="close"
            //             data-dismiss="alert" aria-label="Close">
            //         <span aria-hidden="true">&times;</span>
            //         </button>
            //         </div>');
            redirect('admin/Data_admin/index');
        }

        public function hapus($id_admin)
        {
            $where = array ('id_admin' => $id_admin);
            $this->M_dataadmin->hapus_data($where, 'tb_admin');
            redirect('admin/Data_admin/index');
        }

        public function edit() {
                    $id_admin    = $this->input->post('id_admin');
                    $nama_admin  = $this->input->post('nama_admin');
                    $username    = $this->input->post('username');
                    $password    = $this->input->post('password');
                    $jabatan     = $this->input->post('jabatan');
                    $data = array(
                         'id_admin'      => $id_admin,
                         'nama_admin'    => $nama_admin,
                         'username'      => $username,
                         'password'      => $password,
                         'jabatan'       => $jabatan
 
                    );
                    $this->db->where('id_admin', $id_admin);
                    $this->db->update('tb_admin', $data);
                    // $this->session->set_flashdata('pesan','<div class="alert
                    // alert-warning alert-dismissible fade show"
                    // role="alert">
                    //     Data Admin Berhasil Diedit !
                    //     <button type="button" class="close"
                    //         data-dismiss="alert" aria-label="Close">
                    //     <span aria-hidden="true">&times;</span>
                    //     </button>
                    //     </div>');
                     redirect('admin/Data_admin/index');
                 
         }
}
?>
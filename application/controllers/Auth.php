<?php
class Auth extends CI_Controller
{
	public function login()
	{	
		$this->_rules();

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('template_admin/v_head');
			$this->load->view('Form_login');
		}
		else
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$cek = $this->M_login->cek_login($username, $password);

			if($cek == FALSE)
			{
				$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">Username atau Password Salah !
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
						</button>
					</div>');
					redirect('Auth/login');
			}
				else
				{
					$this->session->set_userdata('username',$cek->username);
					$this->session->set_userdata('nama_admin',$cek->nama_admin);
					$this->session->set_userdata('password',$cek->password);
					redirect('Dashboard');
				}
			}
		}

		public function _rules()
		{
			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('password','Password','required');
		}

		public function logout()
		{
			$this->session->sess_destroy();
			redirect('Auth/login');
		}
	}
?>
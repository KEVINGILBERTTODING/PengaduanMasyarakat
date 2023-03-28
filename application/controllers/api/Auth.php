<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model', 'user_model');
	}

	public function login()
	{

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$validate = $this->user_model->auth($username, $password);

		if ($validate != false) {
			echo 'berhasil login';
		} else {
			echo 'gagal login';
		}
	}
}


/* End of file Login.php */
/* Location: ./application/controllers/Login.php */

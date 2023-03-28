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
			$response = [
				'status' => true,
				'code' => 200,
				'message' => 'Selamat Datang' . ' ' . $validate['username'],
				'data' => $validate
			];

			echo json_encode($response);
		} else {
			$response = [
				'status' => false,
				'code' => 500,
				'message' => 'Username atau password anda salah'
			];

			echo json_encode($response);
		}
	}
}


/* End of file Login.php */
/* Location: ./application/controllers/Login.php */

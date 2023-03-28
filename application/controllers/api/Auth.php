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

	public function register()
	{
		$namaLengkap = $this->input->post('nama_lengkap');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$noTelp = $this->input->post('no_telp');
		$nik = $this->input->post('nik');
		$alamat = $this->input->post('alamat');


		$this->form_validation->set_rules(
			'username',
			'username',
			'trim|required|min_length[5]|max_length[12]|is_unique[masyarakat.username]',
			array(
				'trim' => 'Username tidak boleh mengandung spasi',
				'required' => 'Username tidak boleh kosong',
				'min_length' => 'Username tidak boleh kosong'
			)
		);

		$this->form_validation->set_rules(
			'password',
			'password',
			'trim|required|min_length[3]',
			array(
				'trim' => 'Username tidak boleh mengandung spasi',
				'required' => 'Username tidak boleh kosong',
				'min_length' => 'Username tidak boleh kosong'
			)
		);


		if ($this->form_validation->run() == False) {
			$response = [
				'status' => false,
				'code' > 500,
				'message' => 'Gagal register'
			];

			echo json_encode($response);
		} else {

			$data = [
				'nama' => $namaLengkap,
				'username' => $username,
				'password' => password_hash($password, PASSWORD_DEFAULT),
				'no_telepon' => $noTelp,
				'alamat' => $alamat,
				'nik' => $nik
			];

			$register = $this->user_model->register($data);
			if ($register == TRUE) {
				$response = [
					'status' => true,
					'code' => 200,
					'message' => 'Berhasil register'
				];

				echo json_encode($response);
			} else {
				$response = [
					'status' => false,
					'code' => 500,
					'message' => 'Gagal register'
				];

				echo json_encode($response);
			}
		}
	}
}


/* End of file Login.php */
/* Location: ./application/controllers/Login.php */

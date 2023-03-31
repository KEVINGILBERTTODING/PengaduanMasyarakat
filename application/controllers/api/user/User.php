<?php
defined('BASEPATH') or exit('No direct script access allowed');


class User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model', 'user_model');
		$this->load->model('Saran_model', 'saran_model');
	}


	public function getUserById()
	{
		$userId = $this->input->get('user_id');
		$userData = $this->user_model->getUserByUserId($userId);

		echo json_encode($userData);
	}

	public function insertSaran()
	{
		$nama = $this->input->post('nama');
		$no_telepon = $this->input->post('no_telepon');
		$alamat = $this->input->post('alamat');
		$saran = $this->input->post('saran');

		$data = [
			'nama' => $nama,
			'no_telepon' => $no_telepon,
			'alamat' => $alamat,
			'saran' => $saran,
			'tgl_saran' => date('Y-m-d H:i:s')
		];

		$insert = $this->saran_model->inseertSaran($data);
		if ($insert == true) {
			$response = [
				'status' => 'success',
				'code' => 200,
				'message' => 'Berhasil mengirimkan saran'
			];

			echo json_encode($response);
		} else {
			$response = [
				'status' => 'error',
				'code' => 500,
				'message' => 'Gagal mengirimkan saran'
			];

			echo json_encode($response);
		}
	}
}


/* End of file Login.php */
/* Location: ./application/controllers/Login.php */

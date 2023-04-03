<?php
defined('BASEPATH') or exit('No direct script access allowed');


class ManajemenData extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model', 'user_model');
	}
	public function getAllUser()
	{
		$userId = $this->input->get('id_user');
		$data = $this->user_model->getAllUser($userId);
		echo json_encode($data);
	}

	public function getAllMasyarakaat()
	{
		$data = $this->user_model->getAllMasyarakat();
		echo json_encode($data);
	}

	public function deleteUserbyUserId()
	{
		$userId = $this->input->post('id_user');
		$delete = $this->user_model->deleteUserbyUserId($userId);
		if ($delete == true) {
			$response = [
				'status' => 'success',
				'code' => 200,
				'message' => 'Berhasil menghapus user'
			];

			echo json_encode($response);
		} else {
			$response = [
				'status' => 'error',
				'code' => 500,
				'message' => 'Gagal menghapus user'
			];

			echo json_encode($response);
		}

		# code...
	}

	public function ubahProfileUser()
	{
		$idUser = $this->input->post('id_user');
		$data = [
			'nama' => $this->input->post('nama'),
			'no_telepon' => $this->input->post('no_telp')
		];
		$update = $this->user_model->updateUserById($idUser, $data);

		if ($update) {
			$response = [
				'status' => 'success',
				'code' => 200,
				'message' => 'Berhasil mengubah data'
			];

			echo json_encode($response);
		} else {
			$response = [
				'status' => 'error',
				'code' => 500,
				'message' => 'Gagal mengubah data'
			];

			echo json_encode($response);
		}
	}
}


/* End of file ManajemenData.php */
/* Location: ./application/controllers/ManajemenData.php */

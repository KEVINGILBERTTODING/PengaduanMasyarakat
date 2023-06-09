<?php
defined('BASEPATH') or exit('No direct script access allowed');


class ManajemenData extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model', 'user_model');
		$this->load->model('Kecamatan_model', 'kecamatan_model');
		$this->load->model('Kelurahan_model', 'kelurahan_model');
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

	public function getUserByUserId()
	{
		$idUser = $this->input->get('id_user');
		$data = $this->user_model->getUserByuserId2($idUser);

		echo json_encode($data);
	}

	public function insertUser()
	{

		$username = $this->input->post('username');
		if ($this->user_model->getUserByUsername($username) == false) {
			$response = [
				'status' => 'error',
				'message' => 'Username telah digunakan'
			];

			echo json_encode($response);
		} else {
			$data = [
				'nama' => $this->input->post('nama'),
				'username' => $this->input->post('username'),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'no_telepon' => $this->input->post('no_telepon'),
				'jabatan' => 'operator'
			];

			$insert = $this->user_model->insertUser($data);
			if ($insert == true) {
				$response = [
					'status' => 'success',
					'code' => 200,
					'message' => 'Berhasil menambahkan user baru'
				];

				echo json_encode($response);
			} else {
				$response = [
					'status' => 'error',
					'code' => 500,
					'message' => 'Gagal menambahkan user baru'
				];

				echo json_encode($response);
			}
		}
	}

	public function deleteMasyarakatbyUserId()
	{
		$userId = $this->input->post('id_masyarakat');
		$delete = $this->user_model->deleteMasyarakatbyUserId($userId);
		if ($delete == true) {
			$response = [
				'status' => 'success',
				'code' => 200,
				'message' => 'Berhasil menghapus masyarakat'
			];

			echo json_encode($response);
		} else {
			$response = [
				'status' => 'error',
				'code' => 500,
				'message' => 'Gagal menghapus masyarakat'
			];

			echo json_encode($response);
		}

		# code...
	}

	public function updateMasyarakat()
	{
		$idUser = $this->input->post('id_masyarakat');
		$data = [
			'nama' => $this->input->post('nama'),
			'no_telepon' => $this->input->post('no_telepon'),
			'alamat' => $this->input->post('alamat'),
			'nik' => $this->input->post('nik')
		];
		$update = $this->user_model->updateMasyarakatById($idUser, $data);

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

	public function getMasyarakatById()
	{
		$idUser = $this->input->get('id_masyarakat');
		$data = $this->user_model->getMasyarakatById($idUser);
		echo json_encode($data);
	}

	public function insertMasyarakat()
	{

		$username = $this->input->post('username');
		if ($this->user_model->getMasyarakatByUsername($username) == false) {
			$response = [
				'status' => 'error',
				'message' => 'Username telah digunakan'
			];

			echo json_encode($response);
		} else {
			$data = [
				'nama' => $this->input->post('nama'),
				'username' => $this->input->post('username'),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'no_telepon' => $this->input->post('no_telepon'),
				'nik' => $this->input->post('nik'),
				'alamat' => $this->input->post('alamat')
			];

			$insert = $this->user_model->insertMasyarakat($data);
			if ($insert == true) {
				$response = [
					'status' => 'success',
					'code' => 200,
					'message' => 'Berhasil menambahkan masyarakat baru'
				];

				echo json_encode($response);
			} else {
				$response = [
					'status' => 'error',
					'code' => 500,
					'message' => 'Gagal menambahkan masyarakat baru'
				];

				echo json_encode($response);
			}
		}
	}

	public function getKecamatan()
	{
		$data = $this->kecamatan_model->getAllKecamatan();
		echo json_encode($data);
	}

	public function deleteKecamatan()
	{
		$idKecamatan = $this->input->post('id_kecamatan');
		$delete = $this->kecamatan_model->deleteKecamatan($idKecamatan);
		if ($delete == true) {
			$response = [
				'status' => 'success',
				'code' => 200,
				'message' => 'Berhasil mengahapus kecamatan'
			];

			echo json_encode($response);
		} else {
			$response = [
				'status' => 'error',
				'code' => 500,
				'message' => 'Gagal mengahapus kecamatan'
			];

			echo json_encode($response);
		}
	}


	public function updateKecamatan()
	{
		$idKecamatan = $this->input->post('id_kecamatan');
		$data = [
			'kecamatan' => $this->input->post('kecamatan')
		];
		$update = $this->kecamatan_model->updateKecamatan($idKecamatan, $data);
		if ($update == true) {
			$response = [
				'status' => 'success',
				'code' => 200,
				'message' => 'Berhasil mengubah data kecamatan'
			];


			echo json_encode($response);
		} else {
			$response = [
				'status' => 'error',
				'code' => 500,
				'message' => 'Gagal mengubah data kecamatan'
			];


			echo json_encode($response);
		}
	}

	public function insertKecamatan()
	{
		$data = [
			'kecamatan' => $this->input->post('kecamatan')
		];

		$insert = $this->kecamatan_model->insertKecamatan($data);
		if ($insert == true) {
			$response = [
				'status' => 'success',
				'code' => 200,
				'message' => 'Berhasil menambahkan kecamatan baru'
			];

			echo json_encode($response);
		} else {
			$response = [
				'status' => 'error',
				'code' => 500,
				'message' => 'Gagal menambahkan kecamatan baru'
			];

			echo json_encode($response);
		}
	}



	public function getKelurahan()
	{
		$data = $this->kelurahan_model->getAllKelurahan();
		echo json_encode($data);
	}

	public function insertKelurahan()
	{
		$data = [
			'kelurahan' => $this->input->post('kelurahan'),
			'id_kecamatan' => $this->input->post('id_kecamatan')
		];

		$insert = $this->kelurahan_model->insertKelurahan($data);
		if ($insert == true) {
			$response = [
				'status' => 'success',
				'code' => 200,
				'message' => 'Berhasil menambahkan kelurahan baru'
			];

			echo json_encode($response);
		} else {
			$response = [
				'status' => 'error',
				'code' => 500,
				'message' => 'Gagal menambahkan kelurahan baru'
			];

			echo json_encode($response);
		}
	}

	public function deleteKelurahan()
	{
		$idKelurahan = $this->input->post('id_kelurahan');
		$delete = $this->kelurahan_model->deleteKelurahan($idKelurahan);
		if ($delete == true) {
			$response = [
				'status' => 'success',
				'code' => 200,
				'message' => 'Berhasil mengahapus kelurahan'
			];

			echo json_encode($response);
		} else {
			$response = [
				'status' => 'error',
				'code' => 500,
				'message' => 'Gagal mengahapus kecamatan'
			];

			echo json_encode($response);
		}
	}

	public function updateKelurahan()
	{
		$idKelurahan = $this->input->post('id_kelurahan');
		$idKecamatan = $this->input->post('id_kecamatan');
		$data = [
			'kelurahan' => $this->input->post('kelurahan'),
			'id_kecamatan' => $idKecamatan
		];
		$update = $this->kelurahan_model->updateKelurahan($idKelurahan, $data);
		if ($update == true) {
			$response = [
				'status' => 'success',
				'code' => 200,
				'message' => 'Berhasil mengubah data kelurahan'
			];


			echo json_encode($response);
		} else {
			$response = [
				'status' => 'error',
				'code' => 500,
				'message' => 'Gagal mengubah data kelurahan'
			];


			echo json_encode($response);
		}
	}
}


/* End of file ManajemenData.php */
/* Location: ./application/controllers/ManajemenData.php */

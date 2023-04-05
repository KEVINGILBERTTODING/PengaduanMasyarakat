<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Pengaduan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('User_model', 'user_model');
		$this->load->model('Pengaduan_model', 'pengaduan_model');
	}


	public function getAllPengaduanByStatus()
	{
		$status = $this->input->get('status');
		$data = $this->pengaduan_model->getAllPengaduanByStatus($status);
		echo json_encode($data);
	}

	public function deletePengaduan()
	{
		$idPengaduan = $this->input->post('id_pengaduan');
		$deletePengaduan = $this->pengaduan_model->deletePengaduan($idPengaduan);
		if ($deletePengaduan == true) {
			$response = [
				'status' => 'success'
			];

			echo json_encode($response);
		} else {
			$response = [
				'status' => 'error'
			];

			echo json_encode($response);
		}
	}









	public function updateImage()
	{

		$field = $this->input->post('field');
		$id_pengaduan = $this->input->post('id_pengaduan');

		$config['upload_path'] = './assets/img/img_pengaduan/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max_size'] = '2048';

		$this->load->library('upload', $config);
		$data = array();

		if ($this->upload->do_upload('foto')) {
			$data['foto'] = $this->upload->data('file_name');
		} else {
			$response = [
				'status' => 'error',
				'code' => 400

			];
			echo json_encode($response);
		}

		if (isset($data['error'])) {
			echo json_encode($data['error']);
		} else {




			$data = [

				$field => $data['foto'],
				'tgl_pengaduan' => date('Y-m-d H:i:S')


			];

			$update = $this->pengaduan_model->updatePengaduan($id_pengaduan, $data);
			if ($update == true) {
				$response = [
					'status' => 'success',
					'code' => 200,
					'message' => 'Berhasil mengubah pengaduan'
				];
				echo json_encode($response);
			} else {
				$response = [
					'status' => 'error',
					'code' => 500,
					'message' => 'Gagal mengubah pengaduan'
				];
				echo json_encode($response);
			}
		}
	}




	public function getTanggapanById()
	{
		$idPengaduan = $this->input->get('id_pengaduan');
		$data = $this->pengaduan_model->getTanggapanById($idPengaduan);
		echo json_encode($data);
	}

	public function filterPengaduan()
	{
		$jenis = $this->input->get('jenis');
		$dateStart = $this->input->get('date_start');
		$dateEnd = $this->input->get('date_end');

		if ($jenis == "semua") {
			$data = $this->pengaduan_model->getFilterPengaduanAdminSemua($dateStart, $dateEnd);
		} else {
			$data = $this->pengaduan_model->getFilterPengaduanAdmin($jenis, $dateStart, $dateEnd);
		}
		echo json_encode($data);
	}
}




/* End of file Login.php */
/* Location: ./application/controllers/Login.php */

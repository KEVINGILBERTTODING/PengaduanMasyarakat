<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Tanggapan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('User_model', 'user_model');
		$this->load->model('Pengaduan_model', 'pengaduan_model');
		$this->load->model('Tanggapan_model');
	}




	public function getTanggapanById()
	{
		$idPengaduan = $this->input->get('id_pengaduan');
		$data = $this->Tanggapan_model->getTanggapannById2($idPengaduan);
		echo json_encode($data);
	}

	public function insertTanggapan()
	{

		$config['upload_path'] = './assets/img/img_tanggapan/';
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
			// echo json_encode($data['error']);
		} else {

			$isiTanggapan = $this->input->post('isi_tanggapan');
			$tglTanggapan = date('Y-m-d H:i:s');
			$statusTanggapan = $this->input->post('status_tanggapan');
			$idPengaduan = $this->input->post('id_pengaduan');
			$id_user = $this->input->post('id_user');



			$data = [
				'isi_tanggapan' => $isiTanggapan,
				'tgl_tanggapan' => $tglTanggapan,
				'status_tanggapan' => $statusTanggapan,
				'foto_tanggapan' => $data['foto'],
				'id_pengaduan' => $idPengaduan,
				'id_user' => $id_user
			];

			$insert = $this->Tanggapan_model->insertTanggapan($data);
			if ($insert == true) {
				$dataUpdate = [
					'status_pengaduan'  => $statusTanggapan
				];
				$this->pengaduan_model->updatePengaduan($idPengaduan, $dataUpdate);
				$response = [
					'status' => 'success',
					'code' => 200,
					'message' => 'Berhasil mengirim tanggapan'
				];
				echo json_encode($response);
			} else {
				$response = [
					'status' => 'error',
					'code' => 500,
					'message' => 'Gagal mengirim tanggapan'
				];
				echo json_encode($response);
			}
		}
	}
}




/* End of file Login.php */
/* Location: ./application/controllers/Login.php */

<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller LaporanPengaduan
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class LaporanPengaduan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('Pengaduan_model');
	}

	public function cetakLaporan($idMasyarakat, $jenis, $dateFrom, $dateEnd)
	{

		$this->load->library('pdflib');
		$this->pdflib->setFileName('Laporan_pengaduan.pdf');
		$this->pdflib->setPaper('A4', 'landscape');


		$bulan = [
			'01' => 'Januari',
			'02' => 'Februari',
			'03' => 'Maret',
			'04' => 'April',
			'05' => 'Mei',
			'06' => 'Juni',
			'07' => 'Juli',
			'08' => 'Agustus',
			'09' => 'September',
			'10' => 'Oktober',
			'11' => 'November',
			'12' => 'Desember'
		];

		// 2023-03-02

		$tahunfrom = substr($dateFrom, 0, 4);
		$bulanFrom = $bulan[substr($dateFrom, 5, 2)];
		$tanggalFrom = substr($dateFrom, 8, 2);
		$tanggalDari = $tanggalFrom . ' ' . $bulanFrom . ' ' . $tahunfrom;

		$tahunEnd = substr($dateEnd, 0, 4);
		$bulanEnd = $bulan[substr($dateEnd, 5, 2)];
		$tanggalEnd = substr($dateEnd, 8, 2);
		$tanggalEnd = $tanggalEnd . ' ' . $bulanEnd . ' ' . $tahunEnd;

		$judul = 'Laporan ' . $tanggalDari . ' s/d ' . $tanggalEnd . ', status: ' . $jenis . '.';
		$data['jenis'] = $jenis;
		$data['judul'] = $judul;

		if ($jenis == "semua") {
			$data['pengaduan'] = $this->Pengaduan_model->getFilterPengaduanSemua($idMasyarakat, $dateFrom, $dateEnd);
			$this->pdflib->loadView('v_laporan_pengaduan', $data);
		} else {


			$data['pengaduan'] = $this->Pengaduan_model->getFilterPengaduan($jenis, $idMasyarakat, $dateFrom, $dateEnd);
			$this->pdflib->loadView('v_laporan_pengaduan', $data);
		}
	}


	public function cetakLaporanAdmin($jenis, $dateFrom, $dateEnd)
	{

		$this->load->library('pdflib');
		$this->pdflib->setFileName('Laporan_pengaduan.pdf');
		$this->pdflib->setPaper('A4', 'landscape');


		$bulan = [
			'01' => 'Januari',
			'02' => 'Februari',
			'03' => 'Maret',
			'04' => 'April',
			'05' => 'Mei',
			'06' => 'Juni',
			'07' => 'Juli',
			'08' => 'Agustus',
			'09' => 'September',
			'10' => 'Oktober',
			'11' => 'November',
			'12' => 'Desember'
		];

		// 2023-03-02

		$tahunfrom = substr($dateFrom, 0, 4);
		$bulanFrom = $bulan[substr($dateFrom, 5, 2)];
		$tanggalFrom = substr($dateFrom, 8, 2);
		$tanggalDari = $tanggalFrom . ' ' . $bulanFrom . ' ' . $tahunfrom;

		$tahunEnd = substr($dateEnd, 0, 4);
		$bulanEnd = $bulan[substr($dateEnd, 5, 2)];
		$tanggalEnd = substr($dateEnd, 8, 2);
		$tanggalEnd = $tanggalEnd . ' ' . $bulanEnd . ' ' . $tahunEnd;

		$judul = 'Laporan ' . $tanggalDari . ' s/d ' . $tanggalEnd . ', status: ' . $jenis . '.';
		$data['jenis'] = $jenis;
		$data['judul'] = $judul;

		if ($jenis == "semua") {
			$data['pengaduan'] = $this->Pengaduan_model->getFilterPengaduanAdminSemua($dateFrom, $dateEnd);
			$this->pdflib->loadView('v_laporan_pengaduan', $data);
		} else {


			$data['pengaduan'] = $this->Pengaduan_model->getFilterPengaduanAdmin($jenis,  $dateFrom, $dateEnd);
			$this->pdflib->loadView('v_laporan_pengaduan', $data);
		}
	}
}


/* End of file LaporanPengaduan.php */
/* Location: ./application/controllers/LaporanPengaduan.php */

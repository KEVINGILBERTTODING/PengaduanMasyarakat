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
	}

	public function index()
	{

		$this->load->library('pdflib');
		$this->pdflib->setFileName('Surat_penolakan.pdf');
		$this->pdflib->setPaper('A4', 'potrait');
		$this->pdflib->loadView('v_laporan_pengaduan');
	}
}


/* End of file LaporanPengaduan.php */
/* Location: ./application/controllers/LaporanPengaduan.php */

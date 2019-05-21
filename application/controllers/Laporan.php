<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->library('Pdf');
		$this->load->model('M_laporan');
    $this->load->model('M_referensi');
		
	}

	public function index()
	{
		$data['active'] = "";
    $data['makanan'] = $this->M_referensi->tampil();
		$data['judul'] ="Laporan";
    $session = $this->session->userdata("nama_level");
		if ($session=="Administrator") {
      $this->load->view('Componen/header', $data);
    }elseif ($session=="Kasir") {
      $this->load->view('Componen/kasir', $data);
    }elseif ($session=="Waiter"){

      $this->load->view('Componen/waiter', $data);
    }else{
      $this->load->view('Componen/owner', $data);
      
    }
		$this->load->view("Laporan/laporan");
		$this->load->view('Componen/footer');
		
	}

	public function hasil()
	{
        $data['makanan'] = $this->M_referensi->tampil();
		$tanggal1 = $this->input->post('tanggal1');
	    $tanggal2 = $this->input->post('tanggal2');
	    if ($_POST == NULL) {
	    	redirect('Laporan','refresh');
	    }
	  $data['active'] = "";
		$data['judul'] ="Laporan";
    $session = $this->session->userdata("nama_level");
		$data['laporan'] = $this->M_laporan->laporan_tanggal($tanggal1,$tanggal2);
		if ($session=="Administrator") {
      $this->load->view('Componen/header', $data);
    }elseif ($session=="Kasir") {
      $this->load->view('Componen/kasir', $data);
    }elseif ($session=="Waiter"){ 
      $this->load->view('Componen/waiter', $data);
    }else{
      $this->load->view('Componen/owner', $data);
    }
		$this->load->view("Laporan/laporan",$data);
		$this->load->view('Componen/footer');
		$this->load->view('Laporan/script');
	}

	public function pdf()
	{
		
		  $tanggal1 = $this->db->escape_str(htmlspecialchars($this->input->post('tanggal1')));
	    $tanggal2 = $this->db->escape_str(htmlspecialchars($this->input->post('tanggal2')));
	  	$data['laporan'] = $this->M_laporan->laporan_tanggal($tanggal1,$tanggal2);
		  $this->pdf->setPaper('A4', 'potrait');
	    $this->pdf->filename = "laporan-.pdf";
	    $this->pdf->load_view('coba',$data);
		
	}

  public function pdf_owner()
  {
      $data['makanan'] = $this->M_referensi->tampil();
      // $this->pdf->setPaper('A4', 'potrait');
      
      // $this->pdf->filename = "lporan makanan.pdf";
      // $this->pdf->render ();
      $this->load->view('Laporan/owner',$data);
      
    
  }


	public function excel()
	{
		
    include APPPATH.'third_party/PHPExcel/PHPExcel.php';
    
    // Panggil class PHPExcel nya
    $excel = new PHPExcel();
    // Settingan awal fil excel
    $excel->getProperties()->setCreator('Harithya')
                 ->setLastModifiedBy('resto')
                 ->setTitle("Laporan")
                 ->setSubject("Laporan")
                 ->setDescription("Laporan keuangan")
                 ->setKeywords("Laporan ke uangan   ");
    // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
    $style_col = array(
      'font' => array('bold' => true), // Set font nya jadi bold
      'alignment' => array(
        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
      ),
      'borders' => array(
        'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
        'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
        'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
        'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
      )
    );
    // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
    $style_row = array(
      'alignment' => array(
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
      ),
      'borders' => array(
        'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
        'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
        'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
        'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
      )
    );
    $excel->setActiveSheetIndex(0)->setCellValue('A1', "Laporan Keuangan"); // Set kolom A1 dengan tulisan "DATA SISWA"
    $excel->getActiveSheet()->mergeCells('A1:E1'); // Set Merge Cell pada kolom A1 sampai E1
    $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
    $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
    $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
    // Buat header tabel nya pada baris ke 3
    $excel->setActiveSheetIndex(0)->setCellValue('A3', "No"); // Set kolom A3 dengan tulisan "NO"
    $excel->setActiveSheetIndex(0)->setCellValue('B3', "Tanggal"); // Set kolom B3 dengan tulisan "NIS"
    $excel->setActiveSheetIndex(0)->setCellValue('C3', "No Meja"); // Set kolom C3 dengan tulisan "NAMA"
    $excel->setActiveSheetIndex(0)->setCellValue('D3', "User"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"
    $excel->setActiveSheetIndex(0)->setCellValue('E3', "Total Bayar"); // Set kolom E3 dengan tulisan "ALAMAT"
    // Apply style header yang telah kita buat tadi ke masing-masing kolom header
    $excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('E3')->applyFromArray($style_col);
    
    $tanggal1 = $this->input->post('tanggal1');
    $tanggal2 = $this->input->post('tanggal2');
	$laporan = $this->M_laporan->laporan_tanggal($tanggal1,$tanggal2);

    $no = 1; // Untuk penomoran tabel, di awal set dengan 1
    $numrow = 4; // Set baris pertama untuk isi tabel adalah baris ke 4
    foreach($laporan as $data){ // Lakukan looping pada variabel siswa
      $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
      $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data->tanggal);
      $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data->no_meja);
      $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data->nama_user);
      $excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data->total_bayar);
      
      // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
      $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);
      
      $no++; // Tambah 1 setiap kali looping
      $numrow++; // Tambah 1 setiap kali looping
    }
    // Set width kolom
    $excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); // Set width kolom A
    $excel->getActiveSheet()->getColumnDimension('B')->setWidth(15); // Set width kolom B
    $excel->getActiveSheet()->getColumnDimension('C')->setWidth(25); // Set width kolom C
    $excel->getActiveSheet()->getColumnDimension('D')->setWidth(20); // Set width kolom D
    $excel->getActiveSheet()->getColumnDimension('E')->setWidth(30); // Set width kolom E
    
    // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
    $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
    // Set orientasi kertas jadi LANDSCAPE
    $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
    // Set judul file excel nya
    $excel->getActiveSheet(0)->setTitle("Laporan Data Siswa");
    $excel->setActiveSheetIndex(0);
    // Proses file excel
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="Laporan.xlsx"'); // Set nama file excel nya
    header('Cache-Control: max-age=0');
    $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
    $write->save('php://output');
	}


  public function print()
  {
    $tanggal1 = $this->input->post('tanggal1');
    $tanggal2 = $this->input->post('tanggal2');
    $data['laporan'] = $this->M_laporan->laporan_tanggal($tanggal1,$tanggal2);
    $this->load->view('coba', $data);
  }

  public function print_owner()
  {
    $data['makanan'] = $this->M_referensi->tampil();
    $this->load->view('Laporan/owner', $data);
  }


}

/* End of file Laporan.php */
/* Location: ./application/controllers/Laporan.php */

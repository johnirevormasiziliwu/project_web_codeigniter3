<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PdfView extends CI_Controller {

    public function index()
    {
      $footer['footer'] = 'Univeritas Kristen Immanuel &copy; 2021-2022 <a href="https://ukrim.ac.id/">ukrim.ac.id </a> / Pengembangan Perangakat Lunak';
      $data['title'] = '<u>Dashboard</u>';
      $this->load->view('templates/header',$data);
      $this->load->view('templates/sidebar', $data);
       // panggil library yang kita buat sebelumnya yang bernama pdfgenerator
      $this->load->library('pdfgenerator');
        
      // title dari pdf
      $this->data['title_pdf'] = 'Laporan Penjualan Toko Kita';

      // filename dari pdf ketika didownload
      $file_pdf = 'laporan_penjualan_toko_kita';
     // setting paper
     $paper = 'A4';
     //orientasi paper potrait / landscape
     $orientation = "portrait";

     $html =  $this->load->view('Laporan_PDF/laporan_pdf',$this->data, true);	    

    // run dompdf
    $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
     
      $this->load->view('templates/footer', $footer );
        
    }
}
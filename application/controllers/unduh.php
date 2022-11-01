<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class unduh extends CI_Controller {

public function unduh()
{
      $data["files"] = directory_map("./gambar");
      $title['title'] = "Upload File/Gambar";
      $footer['footer'] = 'Univeritas Kristen Immanuel &copy; 2021-2022 <a href="https://ukrim.ac.id/">ukrim.ac.id </a> / Pengembangan Perangakat Lunak';
      $this->load->view('templates/header', $title );
      $this->load->view('templates/sidebar', $title);
      $this->load->view('upload/create', $data);
      $this->load->view('templates/footer', $footer);
   }

}
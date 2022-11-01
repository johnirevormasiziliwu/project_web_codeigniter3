<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Dasbhoard extends CI_Controller
{
   public function index()
   {
      $data['title'] = "Data Gereja";
      $footer['footer'] = 'Univeritas Kristen Immanuel &copy; 2021-2022 <a href="https://ukrim.ac.id/">ukrim.ac.id </a> / Pengembangan Perangakat Lunak';
      $this->load->view('templates/header');
      $this->load->view('templates/sidebar', $data);
      $this->load->view('Home/dasbhoard');
      $this->load->view('templates/footer',$footer);
   }
}
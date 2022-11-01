<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class layout extends CI_Controller
{
   public function index()
   {
      $this->load->view('layout/index');
   }
}
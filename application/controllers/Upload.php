<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller
{
 
   
   public function index()
   {
      $files["files"] = directory_map("./gambar");
      $data['title'] = "Upload Dokument";
      $footer['footer'] = 'Univeritas Kristen Immanuel &copy; 2021-2022 <a href="https://ukrim.ac.id/">ukrim.ac.id </a> / Pengembangan Perangakat Lunak';
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar',$data);
      $data['data'] = $this->db->get('upload')->result();
      $this->load->view('upload/create', $data , $files);
      $this->load->view('templates/footer', $footer);
   }

   public function create()
   {
      if(isset($_POST['submit'])) {
         $this->form_validation->set_rules('name', 'Name', 'required');
         $config['upload_path']          = './gambar/';
         $config['allowed_types']        = 'pdf|jpg|jpeg|png';
         $config['max_size']             = 2048;
         $config['encrypt_name']            = TRUE;
         $this->load->library('upload', $config);

         //File 1
         if(!empty($_FILES['file1']['name'])) {
            $this->upload->do_upload('file1');
            $data1 = $this->upload->data();
            $file1 = $data1['file_name'];
         }
         //File 2
         if(!empty($_FILES['file2']['name'])) {
            $this->upload->do_upload('file2');
            $data2 = $this->upload->data();
            $file2 = $data2['file_name'];
         }

         if($this->form_validation->run())
         {
            $name = $this->input->post('name', TRUE);
            $data = ['name' => $name, 'file1' => $file1, 'file2' => $file2];
            $insert = $this->db->insert('upload', $data);
            if($insert)
            {
               $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
               Data Berhasil Ditambahkan
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
               </button>
               </div>');
               redirect('Upload');
            }
         } 
         else 
         {
            $this->index();
         }

      } 
      else 
      {
         $this->index();
      }
   }

   

}
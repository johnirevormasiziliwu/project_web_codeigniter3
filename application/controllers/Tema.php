<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tema extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model('ModelTema');
   }

   public function index()
   {
      $footer['footer'] = 'Univeritas Kristen Immanuel &copy; 2021-2022 <a href="https://ukrim.ac.id/">ukrim.ac.id </a> / Pengembangan Perangakat Lunak';
      $data['title'] = 'Profile Gembala';
      $this->load->view('templates/header',$data);
      $this->load->view('templates/sidebar', $data);
      $tema = $this->ModelTema->getAll();
      $datatemas = array(
         "temas" => $tema
      );
      $this->load->view('tema/list_data', $datatemas);
      $this->load->view('templates/footer',$footer);
      
   }

   public function Tambah()
   {
      $footer['footer'] = 'Univeritas Kristen Immanuel &copy; 2021-2022 <a href="https://ukrim.ac.id/">ukrim.ac.id </a> / Pengembangan Perangakat Lunak';
      $data['title'] = 'Profile Gembala';
      $this->load->view('templates/header',$data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('tema/add_data');
      $this->load->view('templates/footer',$footer);
   }
public function insert()
{


      $config['upload_path']          = './gambar/';
      $config['allowed_types']        = 'gif|jpg|jpeg|png';
      $config['max_size']             = 10000;
      $config['max_width']            = 10000;
      $config['max_height']           = 10000;

      $this->load->library('upload',  $config);
     
      if ( ! $this->upload->do_upload('userfile'))
      {
             echo "Gambar Gagal Dikirim";
      }
      else
      {
        
    
             $gambar = $this->upload->data();
             $gambar = $gambar['file_name'];
             $judul_tema = $this->input->post('judul_tema' ,TRUE);
             $isi_tema = $this->input->post('isi_tema', TRUE);
             $data = array(
               "judul_tema" => $judul_tema,
               "isi_tema" => $isi_tema,
               "gambar" => $gambar 
             );
            
             $id = $this->ModelTema->insertGetId($data);
             $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
             Data Berhasil Ditambahkan
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>');
           redirect('tema');
      }
}
public function edit($id)
{
   $tema = $this->ModelTema->getByPrimaryKe($id);
   $datatema =  array([
      'datatemas' => $tema
   ]);

   $this->load->view('content/tema/edit_data', $datatema);
}

public function update()
{
   $config['upload_path']          = './gambar/';
      $config['allowed_types']        = 'jpg|jpeg|png';
      $config['max_size']             = 10000;
      $config['max_width']            = 10000;
      $config['max_height']           = 10000;

      $this->load->library('upload',  $config);
      $this->load->library('upload', 'pdfgenerator');

     
      if ( ! $this->upload->do_upload('userfile'))
      {
             echo "Gambar Gagal Dikirim";
      }
      else
      {
        
    
             $gambar = $this->upload->data();
             $gambar = $gambar['file_name'];
             $judul_tema = $this->input->post('judul_tema' ,TRUE);
             $isi_tema = $this->input->post('isi_tema', TRUE);
             $id = $this->input->post('id_tema');
             $data = array(
               "judul_tema" => $judul_tema,
               "isi_tema" => $isi_tema,
               "gambar" => $gambar 
             );
            
             $id = $this->ModelTema->update($id,$data);
             $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
             Data Berhasil Ditambahkan
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>');
           redirect('tema');
      }
}

public function hapus($id)
{
   $tema = $this->ModelTema->getByPrimaryKe($id);
   $datatema =  array([
      'datatemas' => $tema
   ]);

   $this->load->view('content/tema/edit_data', $datatema);
}


public function delete()
{
   $id = $this->input->post('id_tema');
   $this->ModelTema->delete($id);
   return('tema');

}
}
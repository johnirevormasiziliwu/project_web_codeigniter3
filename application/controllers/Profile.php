<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller
{
   function __construct()
   {
      parent::__construct();
      $this->load->model("ProfileGembala");
   }
   public function index()
   {
     $footer['footer'] = 'Univeritas Kristen Immanuel &copy; 2021-2022 <a href="https://ukrim.ac.id/">ukrim.ac.id </a> / Pengembangan Perangakat Lunak';
      $data['title'] = 'Profile Gembala';
      $this->load->view('templates/header',$data);
      $this->load->view('templates/sidebar', $data);
      $profileGembala = $this->ProfileGembala->getAll();
      $dataProfile = array(
         "profiles" => $profileGembala
      );
      $this->load->view('profile/list_data', $dataProfile);
      $this->load->view('templates/footer',$footer);
   }

   public function tambah()
   {
    $footer['footer'] = 'Univeritas Kristen Immanuel &copy; 2021-2022 <a href="https://ukrim.ac.id/">ukrim.ac.id </a> / Pengembangan Perangkat Lunak';
      $data['title'] = 'Tambah Data Profile Gembala';
      $this->load->view('templates/header',$data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('profile/add_data', $data);
      $this->load->view('templates/footer', $footer );
      
   }
   
   public function insert()
   {
    $data = array(
        
        "nama_gembala" => $this->input->post("nama_gembala"),
        "deskripsi_gembala" => $this->input->post("deskripsi_gembala"),
        "riwayat_pendidikan" => $this->input->post("riwayat_pendidikan"),
        "role" => $this->input->post("role")   
        
    );

    $id = $this->ProfileGembala->insertGetId($data);
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Data Berhasil Ditambahkan
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
  redirect('profile');
}

 //untuk meload tampilan form update
    public function ubah($id)
    {
     $footer['footer'] = 'Univeritas Kristen Immanuel &copy; 2021-2022 <a href="https://ukrim.ac.id/">ukrim.ac.id </a> / Pengembangan Perangkat Lunak';
      $data['title'] = 'Ubah Data Profile Gembala';
      $this->load->view('templates/header',$data);
      $this->load->view('templates/sidebar', $data);
      $profile = $this->ProfileGembala->getByPrimaryKey($id);
        $data = array(
            "profile" => $profile,
        );
        $this->load->view('profile/update_data', $data);
        $this->load->view('templates/footer',$footer);
    }

    public function update()
    {
        $id = $this->input->post('id_gembala');
        $data = array(
         "nama_gembala" => $this->input->post("nama_gembala"),
         "deskripsi_gembala" => $this->input->post("deskripsi_gembala"),
         "riwayat_pendidikan" => $this->input->post("riwayat_pendidikan"),
         "role" => $this->input->post("role") 
        );
        $this->ProfileGembala->update($id,$data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        Data Berhasil Di Ubah
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('profile');
    }

     public function hapus($id)
    {
     $footer['footer'] = 'Univeritas Kristen Immanuel &copy; 2021-2022 <a href="https://ukrim.ac.id/">ukrim.ac.id </a> / Pengembangan Perangkat Lunak';
      $data['title'] = 'Anda Yakin Hapus Data Ini ..?';
      $this->load->view('templates/header',$data);
      $this->load->view('templates/sidebar', $data);
      $profile = $this->ProfileGembala->getByPrimaryKey($id);
        $data = array(
            "profile" => $profile,
        );
        $this->load->view('profile/delete_data', $data);
        $this->load->view('templates/footer',$footer);
    }
    
    public function delete()
    {
        $id = $this->input->post('id_gembala');
        $this->ProfileGembala->delete($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Berhasil Di Hapus
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('profile');
    }


}

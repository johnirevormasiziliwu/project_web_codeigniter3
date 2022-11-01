<?php $this->load->view('templates/header') ?>
<?= $this->session->flashdata('pesan'); ?>
<div class="card">
   <div class="card-header bg-info text-white">
      <h3 class="card-title">Data Profile Gembala</h3>
   </div>
   <div class="card-body">
      <a class="btn btn-outline-info mb-3" href="<?= base_url("profile/tambah") ?>">
         <i class="fa fa-plus"></i>
         Tambah Data Profile Gembala
      </a>
      <table class=" table table-bordered table-hover">
         <thead>
            <tr style="text-align:center ;">
               <th>No</th>
               <th>Nama Gembala</th>
               <th>Deskripsi</th>
               <th>Riwayat Pendidikan</th>
               <th>Role</th>
               <th>Action</th>
            </tr>
         </thead>
         <tbody>
            <?php
            $no = 1;
            foreach($profiles as $p)
            {
               ?>
            <tr>
               <td style=" text-align: center;"><?= $no ++?></td>
               <td><?= $p->nama_gembala ?></td>
               <td><?= $p->deskripsi_gembala ?></td>
               <td><?= $p->riwayat_pendidikan ?></td>
               <td><?= $p->role ?></td>
               <td style="text-align: center ;">
                  <a class=" btn btn-warning btn-sm" href="<?= base_url("profile/ubah/$p->id_gembala") ?>">
                     <i class="fa fa-edit"></i>
                  </a>

                  <a class="btn btn-danger btn-sm" href="<?= base_url("profile/hapus/$p->id_gembala") ?>">
                     <i class="fa fa-trash-alt"></i>
                  </a>
               </td>
            </tr>
            <?php
            }
            ?>
         </tbody>
      </table>
   </div>
</div>


<!---Awal Modal form tambah data profile gembala -->
<!-- <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
   aria-labelledby="staticBackdropLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id=" staticBackdropLabel">Form Tambah Data Profile
               Gembala</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <form action="<?= base_url('profile/insert') ?>" method="POST">
               <div class="form-group">
                  <label for="">Nama Gembala</label>
                  <input type="text" class="form-control" name="nama_gembala" required
                     placeholder="Masukan Nama Gembala">
               </div>
               <div class="form-group">
                  <label for="exampleFormControlTextarea1">Deskripsi Gembala</label>
                  <textarea class="form-control" name="deskripsi_gembala" required
                     placeholder="Masukan Deskripsi Gembala " rows="3"></textarea>
               </div>
               <div class="form-group">
                  <label for="">Riwayat Pendidikan</label>
                  <input type="text" class="form-control" name="riwayat_pendidikan" required
                     placeholder="Masukan Riwayat Pendidikan Gembala">
               </div>
               <div class="form-group">
                  <label for="">Role</label>
                  <input type="text" class="form-control" name="role" required placeholder="Masukan Role">
               </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
            <button type="sumbit" class="btn btn-success">
               <i class="fa fa-save"></i>
               Simpan
            </button>
         </div>
         </form>
      </div>
   </div>
</div> -->
<!---Akhir Modal form tambah data profile gembala-->
<div class="card">
   <div class="card-header">
      <h3 class="card-title">Form Tambah Data Tema</h3>
   </div>
   <form action="<?= base_url('Tema/insert')?>" method="
   post" enctype="multipart/form-data">
      <div class="card-body">
         <div class="form-group">
            <label for="">Judul Tema</label>
            <input class="form-control" type="text" name="judul_tema" required placeholder="judul tema">
         </div>
         <div class="form-group">
            <div class="label">Isi Tema</div>
            <input type="text" name="isi_tema" class="form-control" required placeholder="isi tema">
         </div>
         <div class="form-group">
            <div class="label">Gambar</div>
            <input class="form-control" name="userfile" type="file">
         </div>
      </div>
      <div class="card-footer">
         <a href="<?= base_url('tema') ?>">
            <i class="fa fa-reply"></i>
            Kembali
         </a>
         <button type="submit" class="btn btn-succes">
            <i class="fa fa-save"></i>
            Simpan Data Tema
         </button>
      </div>
   </form>
</div>
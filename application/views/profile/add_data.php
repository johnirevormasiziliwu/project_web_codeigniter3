<div class="card ">
   <div class="card-header bg-info text-white">
      <h3 class="card-title">Form Ubah Data Gembala</h3>
   </div>
   <div class="card-body">
      <form id="form-update-gembala" action="<?= site_url('profile/insert')?>" method="post">
         <div class="form-group">
            <label for="">Nama Gembala</label>
            <input required class="form-control col-5" name="nama_gembala" placeholder="Masukan Nama gembala "
               type="text">
         </div>
         <div class="form-group">
            <label for="">Deskripsi Gembala</label>
            <input required class="form-control col-5" name="deskripsi_gembala" placeholder="Masukan Deskripsi Gembala"
               type="text">
         </div>
         <div class="form-group">
            <label for="">Riwayat Pendidikan</label>
            <input required class="form-control col-5" name="riwayat_pendidikan"
               placeholder="Masukan Riwayat Pendidikan" type="text">
         </div>
         <div class="form-group">
            <label for="">Role</label>
            <input required class="form-control col-5" name="role" placeholder="Masukan Role" type="text">
         </div>

         <div class="card-footer">
            <a class="btn btn-info" href="<?= site_url('profile')?>">Kembali</a>
            <button class="btn btn-success" id="btn-update-gembala">
               <i class="fa fa-save"></i>
               Simpan Data Gembala
            </button>
         </div>
      </form>
   </div>